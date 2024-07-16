<?php
session_start(); // Start session for storing user data

// Include the database connection script
include '../connection.php'; // Adjust path as necessary

// Function to authenticate user login
function authenticateUser($studentNumber, $password, $conn)
{
    // Prepare SQL statement to fetch user details using a parameterized query
    $sql = "SELECT * FROM users WHERE student_number = :studentNumber";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':studentNumber', $studentNumber);
    $stmt->execute();

    // Check if user exists
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $hashedPassword = $row['password'];

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            // Password correct, set session variables for user
            $_SESSION['user_id'] = $row['id']; // Example: Store user ID in session
            $_SESSION['user_role'] = $row['role']; // Example: Store user role in session

            return true; // Authentication successful
        } else {
            return false; // Password incorrect
        }
    } else {
        return false; // User not found
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $studentNumber = $_POST['student_number'];
    $password = $_POST['password'];

    // Validate if fields are not empty
    if (empty($studentNumber) || empty($password)) {
        echo "Please enter both student number and password.";
        exit; // Stop further execution
    }

    // Call authenticateUser function
    $authenticated = authenticateUser($studentNumber, $password, $conn);

    // Handle authentication result
    if ($authenticated) {
        // Redirect based on user role
        if ($_SESSION['user_role'] == 'student') {
            header("Location: ../components/Student/Activities/activities.php");
        } elseif ($_SESSION['user_role'] == 'admin') {
            header("Location: ../components/admin-index.php");
        }
        exit; // Ensure script stops execution after redirection
    } else {
        // Authentication failed, show alert message
        echo '<script>alert("Incorrect student number or password. Please try again.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            /* Light grey background */
            margin: 0;
            font-family: 'Inter', sans-serif;
        }

        .page-content {
            display: flex;
            font-family: "Inter", sans-serif;
            justify-content: space-evenly;
            padding: 20px 50px 50px 20px;
            flex-wrap: wrap;
        }

        .backdrop {
            width: 500px;
            height: 550px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .img-banner {
            width: 300px;
            height: 50px;
        }

        .title {
            color: #262729;
            font-size: 2.5rem;
            padding-right: 20px;
            text-align: end;
            transition: all .5s ease;
        }

        .green-txt {
            color: #198754;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            width: 300px;
            height: 550px;
            padding: 0px 80px 0px 80px;
            justify-content: space-evenly;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .col {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 5px;
        }

        .even {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: nowrap;
        }

        .login-btn {
            width: 100%;
            color: #fff;
            background-color: #198754;
            padding: 10px 0px 10px 0px;
            border: 0;
            font-family: "Inter", sans-serif;
            border-radius: 0.3rem;
            cursor: pointer;
        }

        .bold {
            font-weight: bold;
        }

        .login {
            font-size: 1.5rem;
        }

        .s-txt {
            font-size: .8rem;
        }

        .txtfield {
            border: #f2f2f2;
            background-color: #f2f2f2;
            height: 35px;
            padding: 0px 20px 0px 40px;
            /* Adjusted padding for icon */
            outline: none;
            flex-grow: 1;
            position: relative;
            /* Ensure relative positioning for icon placement */
        }

        .password-toggle {
            position: absolute;
            /* Absolute positioning for icon */
            right: 10px;
            /* Adjusted position */
            top: 50%;
            /* Center vertically */
            transform: translateY(-50%);
            /* Center vertically */
            cursor: pointer;
            font-size: 1.2rem;
            /* Increased font size */
            background-color: #f2f2f2;
        }

        input:focus {
            outline: none;
        }
        
        .forgot {
            color: #198754;
            text-decoration: none;
        }

        .forgot:hover {
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="page-content">
        <div class="backdrop">
            <img src="../assets/img/pnc-header.svg" alt="banner" class="img-banner">
            <span class="title bold"><span class="green-txt">Student Affairs</span> and <span class="green-txt">Services</span> Department</span>
            <?php include '../assets/img/studyingDude.php'; ?>
        </div>
        <div class="login-container">
            <form class="login-form" action="login.php" method="POST">
                <span class="bold login">Log in</span>
                <div class="col">
                    <span class="bold s-txt">Student Number</span>
                    <input type="text" name="student_number" placeholder="Enter your student number" class="txtfield" required>
                </div>

                <div class="col">
                    <span class="bold s-txt">Password</span>
                    <div class="even">
                        <input type="password" name="password" id="password" placeholder="Enter your password" class="txtfield" required>
                        <i class="bi bi-eye-slash password-toggle" id="togglePassword"></i>
                    </div>

                </div>

                <div class="even">
                    <label><input type="checkbox" name="remember-me" id="remember-me">Remember me</label>
                    <a href="#" class="forgot">Forgot Password?</a>
                </div>

                <div>
                    <button type="submit" class="login-btn">Login</button>
                </div>
                <span class="s-txt">Not registered yet? <span class="green-txt">Create an account <a href="register.php" class="green-txt">Sign up</a></span></span>
            </form>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('bi-eye-slash');
            this.classList.toggle('bi-eye');
        });
    </script>
</body>

</html>