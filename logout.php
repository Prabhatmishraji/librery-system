<?php

  include "config.php"; // db configuration

  session_start();

  session_unset();

  session_destroy();

  // header("$base_url");
  $conn = mysqli_connect("localhost","root","","librery-system") or die("Connection Failed : " . mysqli_connect_error());

?>
