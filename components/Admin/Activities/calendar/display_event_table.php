<?php
// Include the database connection file
require 'database_connection.php';

// Query to fetch events along with organization names for the request table
$query = "SELECT events.event_id, events.title, Organization.orgName, events.created_at, events.venue, events.start_date, events.status 
          FROM events 
          JOIN Organization ON events.orgId = Organization.id";
$result = mysqli_query($con, $query);

if (!$result) {
    die("Error fetching events: " . mysqli_error($con));
}

$events = array();

while ($row = mysqli_fetch_assoc($result)) {
    $events[] = array(
        'event_id' => $row['event_id'],
        'title' => $row['title'],
        'organization' => $row['orgName'], // Ensure 'organization' key is used
        'created_at' => $row['created_at'],
        'venue' => $row['venue'],
        'start_date' => $row['start_date'],
        'status' => $row['status']
    );
}

// Close the connection
mysqli_close($con);

// Return events as JSON
header('Content-Type: application/json');
echo json_encode(array('data' => $events));

