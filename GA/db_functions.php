<?php

// Inkludera config-filen för att hämta anslutningsinformationen
require_once 'config.php';

// Funktion för att sätta in data i last_button_press-tabellen
function log_button_press($user_id) {
    global $conn; // Använd den globala anslutningen till databasen

    // Skapa tidstämpel
    $timestamp = date('Y-m-d H:i:s');

    // Skapa SQL-frågan
    $sql = "INSERT INTO last_button_press (user_id, timestamp) VALUES ('$user_id', '$timestamp')";

    // Kör SQL-frågan och kolla om den lyckades
    if (mysqli_query($conn, $sql)) {
        echo "Data added to last_button_press table.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
