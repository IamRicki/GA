<?php
   session_start();
   if(isset($_POST['button']) && $_POST['button'] == 'door') {
      $user = $_SESSION['user_name'];
      $timestamp = date("Y-m-d H:i:s");
      $message = "Knappen Öppna dörren klickades av användaren $user på $timestamp\n";
      file_put_contents("button_log.txt", $message, FILE_APPEND);
   }
?>




