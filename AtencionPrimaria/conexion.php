<?php
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'atencion_primaria';
$databaseport = 33065;


// Open a new connection to the MySQL server
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, $databaseport); 