<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>lärar sidan</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
   <script src="js/script.js?v=<?php echo time(); ?>"></script>

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hej, <span>lärare</span></h3>
      <h1>välkommen <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <button id="door-btn">Öppna dörren</button>
      <p id="door-status"></p>   
      <script>
   document.getElementById("door-btn").addEventListener("click", function() {
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "track_button.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send("button=door");
   });
   </script>

   <h2>Knapploggen</h2>
   <?php
      $log_file = "button_log.txt";
      if(file_exists($log_file)) {
         $log_data = file_get_contents($log_file);
         echo "<pre>" . $log_data . "</pre>";
      } else {
         echo "<p>Inga loggar hittades.</p>";
      }
   ?>
      <a href="logout.php" class="btn">logga ut</a>
   </div>

</div>

</body>
</html>