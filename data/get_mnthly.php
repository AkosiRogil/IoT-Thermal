<?php
include 'db.php';
include 'time_serv.php';

$date = date('Y-m'); // Current year and month, e.g., 2025-05

$quiry = $conn->prepare('SELECT * FROM recrds WHERE DATE_FORMAT(date, "%Y-%m") = ?');
$quiry->bind_param('s', $date);
$quiry->execute();

$result = $quiry->get_result();

if ($result->num_rows > 0) {
    echo 'not empty';
} else {
    echo 'no result';
}

$quiry->close();
$conn->close();
?>
