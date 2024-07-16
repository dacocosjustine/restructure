<?php
require 'database_connection.php';

if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];
    
    $query = "SELECT e.title, e.created_at, e.venue, e.start_date, e.status, e.description, e.approval_letter, e.approval_letter_filename, o.orgName 
              FROM events e
              JOIN Organization o ON e.orgId = o.id
              WHERE e.event_id = ?";
    
    $stmt = $con->prepare($query);
    $stmt->bind_param('i', $event_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $event = $result->fetch_assoc();
        $approvalStatus = ($event['status'] == 'approved') ? 'APPROVED' : 'PENDING'; // Adjust as per your status field
    } else {
        echo "Event not found.";
        exit;
    }
    
    $stmt->close();
    $con->close();
} else {
    echo "No event ID specified.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5 p-4 bg-white shadow-sm rounded">
        <a href="#" id="back-btn" class="btn btn-outline-dark mb-3">Back</a>
        <div class="alert alert-success text-center" role="alert">
            <?= htmlspecialchars($approvalStatus) ?>
        </div>
        <h2 class="fw-bold mb-3"><?= htmlspecialchars($event['title']) ?></h2>
        <div class="d-flex gap-3">
            <div class="border rounded p-2 text-center">
                <span class="text-muted"><?= htmlspecialchars($event['start_date']) ?></span>
            </div>
            <div class="border rounded p-2 text-center">
                <span class="text-muted"><?= htmlspecialchars($event['venue']) ?></span>
            </div>
        </div>
        <p><?= htmlspecialchars($event['description']) ?></p>
        <div class="list-group mb-3">
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span><?= htmlspecialchars($event['approval_letter_filename']) ?></span>
                <?php if (isset($event['approval_letter_filename'])): ?>
                    <a href="../components/Admin/Activities/calendar/download_approval_letter.php?event_id=<?= $event_id ?>" class="text-success">Download</a>
                <?php endif; ?>
            </div>
        </div>
        <button class="btn btn-success mb-2 w-100">Close Evaluation</button>
        <button class="btn btn-success w-100">View Results</button>
    </div>
</body>
</html>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
        $(document).ready(function() {
            // Handle click event for Back button
            $("#back-btn").click(function(e) {
                e.preventDefault(); // Prevent default action of anchor tag
                
                // Load admin-calendar.html into #main-content div
                $("#main-content").load("../components/Admin/Activities/calendar/admin-calendar.html");
            });
        });

</script>