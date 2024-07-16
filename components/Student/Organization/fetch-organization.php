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

// Get the department ID from the URL parameter
$department_id = $_GET['id'];

// Retrieve the list of organizations for the department
$sql = "SELECT * FROM organization WHERE deptId = '$department_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $organization_id = $row["id"];
        $organization_name = $row["orgName"];
        $organization_program = $row["program"];
        $logoPic = $row["logoPic"];

        // Display the organization details
        echo '<li class="org-item">
                <button class="org-button" type="button" onclick="window.location.href=\'fetch-orgDetails.php?id='.$organization_id.'\'">
                    <div class="org-image">
                        <img src="data:image/jpeg;base64,'.base64_encode($logoPic).'">
                    </div>
                    <div class="org-info">
                        <h3 class="org-title">'.$organization_name.'</h3>
                        <p class="org-program">'.$organization_program.'</p>
                    </div>
                </button>
            </li>';
    }
} else {
    echo "No organizations found for this department.";
}

$conn->close();
?>

<style>
    
.org-item {
    width: 90%;
    background: white; 
    box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.10); 
    border-radius: 20px; 
    border: 1px #F6F6F6 solid;
    margin-bottom: 20px;
}

.org-button {
    width: 100%;
    padding: 20px;
    background: none;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: left;
    gap: 30px;
}

.org-image img {
    width: 70px;
    height: 70px;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid #B5B5B5;
}

.org-title {
    color: #313131;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 5px;
}

.org-program {
    color: #828282;
    font-size: 18px;
}

.org-info {
    text-align: left;
}
</style>