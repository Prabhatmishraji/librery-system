<?php
  include "config.php"; // db configuration

  $issue_id = $_GET['iid'];
  //delete query
  $sql = "DELETE FROM book_issue WHERE issue_id = '{$issue_id}'";
  if(mysqli_query($conn, $sql)){
    // header("$base_url/book-issue.php");
    $conn = mysqli_connect("localhost","root","","librery-system") or die("Connection Failed : " . mysqli_connect_error());
  }else{
    echo "<p style='color: red; margin: 10px 0;'>Cant't delete book issue record.</p>";
  }
mysqli_close($conn);
?>
