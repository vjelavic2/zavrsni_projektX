<?php

$conn = mysqli_connect('localhost', 'root', '', 'zavrsniprojekt');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>