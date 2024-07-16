<?php
// Include the database connection file
require 'database_connection.php';

// Check if the event_id is set in the POST request
if (isset($_POST['event_id'])) {
    $event_id = intval($_POST['event_id']); // Sanitize the input

    // Prepare the delete query
    $query = "DELETE FROM events WHERE event_id = ?";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        // Bind the event_id parameter
        mysqli_stmt_bind_param($stmt, "i", $event_id);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            // Successfully deleted
            $response = array('status' => 'success', 'message' => 'Event deleted successfully.');
        } else {
            // Error executing the query
            $response = array('status' => 'error', 'message' => 'Error deleting event: ' . mysqli_stmt_error($stmt));
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Error preparing the query
        $response = array('status' => 'error', 'message' => 'Error preparing the delete query: ' . mysqli_error($con));
    }
} else {
    // No event_id provided
    $response = array('status' => 'error', 'message' => 'No event ID provided.');
}

// Close the database connection
mysqli_close($con);

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
