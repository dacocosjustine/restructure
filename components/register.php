<?php
// Include the database connection script
include '../connection.php'; // Replace with your database connection script

// Initialize message variable
$message = '';

// Function to register a new student
function registerStudent($name, $studentNumber, $email, $password, $role, $orgId, $conn) {
    // Prepare SQL statement
    $sql = "INSERT INTO users (name, student_number, email, password, role, orgId) VALUES (:name, :studentNumber, :email, :password, :role, :orgId)";
    
    // Hash the password for security (using bcrypt)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement with bound parameters
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':studentNumber', $studentNumber);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':role', $role);
    $stmt->bindParam(':orgId', $orgId);

    // Execute SQL statement
    if ($stmt->execute()) {
        return true; // Registration successful
    } else {
        return false; // Registration failed
    }
}

// Retrieve organizations from the database
$orgSql = "SELECT id, orgName FROM Organization";
$orgStmt = $conn->prepare($orgSql);
$orgStmt->execute();
$organizations = $orgStmt->fetchAll(PDO::FETCH_ASSOC);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $studentNumber = $_POST['student_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $role = $_POST['role']; // Added role field
    $orgId = $_POST['organization']; // Added organization field

    // Validate if passwords match
    if ($password !== $confirmPassword) {
        $message = "Passwords do not match. Please try again.";
    } else {
        // Call registerStudent function
        $registered = registerStudent($name, $studentNumber, $email, $password, $role, $orgId, $conn);

        // Handle registration result
        if ($registered) {
            $message = "Registration successful!";
        } else {
            $message = "Registration failed. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa; /* Light grey background */
            margin: 0;
            font-family: 'Inter', sans-serif;
        }

        .register-container {
            width: 100%;
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .register-title {
            color: #198754;
            font-size: 28px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            color: black;
            font-size: 16px;
            font-weight: 600;
        }

        .form-input {
            width: 100%;
            height: 40px;
            margin-top: 5px;
            margin-bottom: 15px;
            padding-left: 10px;
            background: #F2F2F2;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            color: rgba(0, 0, 0, 0.8);
        }

        .register-button {
            width: 100%;
            height: 40px;
            background: #198754;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2 class="register-title">Register</h2>
        <form action="register.php" method="POST">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-input" required>

            <label for="student_number" class="form-label">Student Number:</label>
            <input type="text" id="student_number" name="student_number" class="form-input" required>

            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-input" required>

            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-input" required>

            <label for="confirm_password" class="form-label">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" class="form-input" required>

            <label for="role" class="form-label">Role:</label>
            <select id="role" name="role" class="form-input">
                <option value="admin">Admin</option>
                <option value="student">Student</option>
                <option value="employee">Employee</option>
            </select>

            <div class="organization-field" style="display: none;">
                <label for="organization" class="form-label">Organization:</label>
                <select id="organization" name="organization" class="form-input">
                    <?php foreach ($organizations as $org) : ?>
                        <option value="<?php echo $org['id']; ?>"><?php echo $org['orgName']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" value="Register" class="register-button">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
    // Function to show/hide organization field based on role selection
    $(document).ready(function() {
        $('#role').change(function() {
            var role = $(this).val();
            if (role === 'admin' || role === 'employee') {
                $('.organization-field').hide();
            } else {
                $('.organization-field').show();
            }
        });
    });
    </script>


    <!-- JavaScript to display alert on successful registration -->
    <?php if (!empty($message)) : ?>
    <script>
        alert('<?php echo $message; ?>');
        <?php if ($message == "Registration successful!") : ?>
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 1000); // Redirect after 1 second
        <?php endif; ?>
    </script>
    <?php endif; ?>
</body>
</html>
