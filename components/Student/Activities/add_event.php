<?php
// Include the database connection file
include 'database_connection.php';
session_start();

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if user is logged in and retrieve orgId from the session
if (!isset($_SESSION['user_id'])) {
    die("User not logged in.");
}

$user_id = $_SESSION['user_id'];

// Retrieve orgId for the logged-in user
$userQuery = "SELECT orgId FROM users WHERE id = ?";
$userStmt = mysqli_prepare($con, $userQuery);
mysqli_stmt_bind_param($userStmt, "i", $user_id);
mysqli_stmt_execute($userStmt);
mysqli_stmt_bind_result($userStmt, $orgId);
mysqli_stmt_fetch($userStmt);
mysqli_stmt_close($userStmt);

if (!$orgId) {
    die("Organization ID not found for the user.");
}

// Get event details from POST request
$eventName = isset($_POST['eventName']) ? $_POST['eventName'] : '';
$eventDescription = isset($_POST['eventDescription']) ? $_POST['eventDescription'] : '';
$eventStartDate = isset($_POST['eventStartDate']) ? $_POST['eventStartDate'] : '';
$eventEndDate = isset($_POST['eventEndDate']) ? $_POST['eventEndDate'] : '';
$eventVenue = isset($_POST['eventVenue']) ? $_POST['eventVenue'] : '';
$eventStartTime = isset($_POST['eventStartTime']) ? $_POST['eventStartTime'] : '';
$eventEndTime = isset($_POST['eventEndTime']) ? $_POST['eventEndTime'] : '';
$eventApprovalLetter = isset($_FILES['eventApprovalLetter']) ? $_FILES['eventApprovalLetter'] : null;

// Debugging: log the received data
error_log("Event Name: " . $eventName);
error_log("Event Description: " . $eventDescription);
error_log("Event Start Date: " . $eventStartDate);
error_log("Event End Date: " . $eventEndDate);
error_log("Event Venue: " . $eventVenue);
error_log("Event Start Time: " . $eventStartTime);
error_log("Event End Time: " . $eventEndTime);
error_log("Event Approval Letter: " . json_encode($eventApprovalLetter));

// Read file content and filename
$approvalLetterContent = null;
$approvalLetterFilename = '';
if ($eventApprovalLetter && $eventApprovalLetter['size'] > 0) {
    $approvalLetterContent = file_get_contents($eventApprovalLetter['tmp_name']);
    $approvalLetterFilename = $eventApprovalLetter['name'];
}

// Set default status as 'pending'
$status = 'pending';

// Prepare the SQL query with placeholders
$query = "INSERT INTO events (orgId, title, description, start_date, end_date, venue, start_time, end_time, approval_letter, approval_letter_filename, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Initialize prepared statement
$stmt = mysqli_prepare($con, $query);

if ($stmt) {
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "issssssssss", $orgId, $eventName, $eventDescription, $eventStartDate, $eventEndDate, $eventVenue, $eventStartTime, $eventEndTime, $approvalLetterContent, $approvalLetterFilename, $status);
    
    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    // Check for execution success
    if ($result) {
        $response = array('status' => true, 'msg' => 'Event added successfully!');
    } else {
        $response = array('status' => false, 'msg' => 'Error adding event: ' . mysqli_stmt_error($stmt));
    }
    
    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    $response = array('status' => false, 'msg' => 'Error preparing statement: ' . mysqli_error($con));
}

// Close the database connection
mysqli_close($con);

// Return response
echo json_encode($response);
?>
