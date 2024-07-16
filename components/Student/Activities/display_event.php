<?php
// Include the database connection file
require 'database_connection.php';

$display_query = "SELECT event_id, title, start_date, end_date, venue, start_time, end_time FROM events";
$results = mysqli_query($con, $display_query);
$count = mysqli_num_rows($results);

if ($count > 0) {
    $data_arr = array();
    while ($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
        $event = array();
        $event['event_id'] = $data_row['event_id'];
        $event['title'] = $data_row['title'];
        $event['start'] = date("Y-m-d", strtotime($data_row['start_date']));
        $event['end'] = date("Y-m-d", strtotime($data_row['end_date']));
        $event['venue'] = $data_row['venue'];
        $event['start_time'] = $data_row['start_time'];
        $event['end_time'] = $data_row['end_time'];
        $event['color'] = '#198754'; // . substr(uniqid(), -6); Assigning random color
        $event['url'] = 'https://www.shinerweb.com'; // Example URL

        $data_arr[] = $event;
    }

    $data = array(
        'status' => true,
        'msg' => 'successfully!',
        'data' => $data_arr
    );
} else {
    $data = array(
        'status' => false,
        'msg' => 'Error!'
    );
}

// Close the database connection
mysqli_close($con);

echo json_encode($data);
