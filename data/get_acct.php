<?php

// Get account
include 'db.php';


$quiry = $conn->prepare('SELECT * FROM accnt');
$quiry->execute();

$result = $quiry->get_result();

if ($result->num_rows > 0) {
    echo '  not empty';
} else {
    echo '  no result';
}

$quiry->close();  // Close the statement first
$conn->close();   // Then close the connection
?>
