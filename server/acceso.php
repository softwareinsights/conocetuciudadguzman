<?php  
session_start();
$token = $_GET['token'];
$_SESSION['token'] = $token;
?>
  <script> 
  window.location.href="./../index.php";
  alert("EXITOOOOOOOOO!!!");
  </script>
