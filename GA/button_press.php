<button id="door-btn" onclick="buttonClick()">Öppna dörren</button>
<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

// Hämta användarinformation
$user_id = $_SESSION['user_id']; // Anpassa detta efter hur din användarautentisering fungerar

// Skapa en ny rad i last_button_pressed-tabellen
$sql = "INSERT INTO last_button_pressed (user_id, button_press_time) VALUES ('$user_id', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Knappen tryckt!";
} else {
    echo "Fel: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>