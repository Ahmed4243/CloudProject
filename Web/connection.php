<?php

$dbhost = 'db';
$dbuser = getenv("DB_USER") ?: "root";
$dbpass = getenv("DB_PASS") ?: "";
$dbname = getenv("DB_NAME") ?: "cloud";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}