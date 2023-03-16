<?php

// Ange anslutningsuppgifter till din databas
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

// Skapa anslutning
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kontrollera om anslutningen lyckades
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    
}


