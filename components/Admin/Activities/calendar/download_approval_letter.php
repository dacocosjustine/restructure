<?php
require 'database_connection.php';

if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];
    
    $query = "SELECT approval_letter, approval_letter_filename FROM events WHERE event_id = ?";
    
    $stmt = $con->prepare($query);
    $stmt->bind_param('i', $event_id);
    $stmt->execute();
    $stmt->bind_result($approvalLetterContent, $approvalLetterFilename);
    $stmt->fetch();
    $stmt->close();
    
    if ($approvalLetterContent) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $approvalLetterFilename . '"');
        echo $approvalLetterContent;
    } else {
        echo "Approval letter not found.";
    }
} else {
    echo "No event ID specified.";
}

$con->close();
?>
