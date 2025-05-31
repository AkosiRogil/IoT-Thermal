<?php
include 'db.php';
include 'time_serv.php';

$date = date('Y'); // Current year and month, e.g., 2025-05

$quiry = $conn->prepare('SELECT count(*) FROM recrds WHERE DATE_FORMAT(date, "%Y") = ?');
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
