<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sasd_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the list of departments
$sql = "SELECT * FROM department";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $department_id = $row["id"];
        $department_name = $row["deptName"];
        $logo = $row["logo"];

        // Create a college item for each department
        echo '<li class="college-item">
                <button class="college-button" type="button" onclick="window.location.href=\'../Organization/college-details.php?id=' . $department_id . '\'">
                    <div class="orange-bar"></div>
                    <div class="college-image">
                        <img src="data:image/jpeg;base64,' . base64_encode($logo) . '">
                    </div>
                    <div class="college-info">
                        <h3 class="college-title">' . $department_name . '</h3>
                        <p class="college-description">Recognized Student Organizations</p>
                    </div>
                </button>
            </li>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<style>
    .college-item {
        width: 90%;
        background: white;
        box-shadow: 5px 5px 8px #b5b5b5;
        border-radius: 20px;
        border: 1px solid #b5b5b5;
        margin-bottom: 20px;
    }

    .college-button {
        width: 100%;
        padding: 20px;
        background: none;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: left;
        gap: 30px;
    }

    .college-image img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #B5B5B5;
    }

    .college-title {
        color: #313131;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .college-description {
        color: #828282;
        font-size: 18px;
    }

    .college-info {
        text-align: left;
    }
</style>