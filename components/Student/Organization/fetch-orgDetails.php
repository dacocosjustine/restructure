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

// Get the organization ID from the URL parameter
$organization_id = $_GET['id'];

// Retrieve the organization details
$sql = "SELECT * FROM organization WHERE id = '$organization_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $organization_name = $row["orgName"];
    $organization_program = $row["program"];
    $organization_acronym = $row["acronym"];

    // Display the organization details
    echo '<div class="row">
            <div class="col-12">
                <h2 class="title">' . $organization_name . '</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="org-program">' . $organization_program . '</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>' . $organization_acronym . '</p>
            </div>
        </div>';

    // Retrieve the events related to the organization
    $sql_events = "SELECT * FROM events WHERE orgId = '$organization_id'";
    $result_events = $conn->query($sql_events);

    if ($result_events->num_rows > 0) {
        echo '<h2>Events</h2>';
        echo '<table>';
        echo '<tr>
                <th>Title</th>
                <th>Created At</th>
                <th>Venue</th>
                <th>Start Date</th>
                <th>Status</th>
              </tr>';
        while ($event_row = $result_events->fetch_assoc()) {
            $title = $event_row["title"];
            $created_at = $event_row["created_at"];
            $venue = $event_row["venue"];
            $start_date = $event_row["start_date"];
            $status = $event_row["status"];

            echo '<tr>';
            echo '<td>' . $title . '</td>';
            echo '<td>' . $created_at . '</td>';
            echo '<td>' . $venue . '</td>';
            echo '<td>' . $start_date . '</td>';
            echo '<td>' . $status . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<p>No events found for this organization.</p>';
    }
} else {
    echo "Organization not found.";
}

$conn->close();
?>