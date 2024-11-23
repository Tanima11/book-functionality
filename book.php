<?php

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "project");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Insert data into book table
$sql = "INSERT INTO `book` (request_id, technician_id, paystatus, assign_id, service_id, user_id)
VALUES ('REQ001', 1, 'pending', 1, 1, 1),('REQ002', 2, 'paid', 2, 2, 2),
('REQ003', 3, 'pending', 3, 3, 3),
('REQ004', 1, 'paid', 4, 4, 4),
('REQ005', 2, 'pending', 5, 5, 5)";


if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} else {
    echo "Data inserted successfully!";
}


// Close connection
mysqli_close($conn);




?>