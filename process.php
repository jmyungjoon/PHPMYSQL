<?php
  $conn = mysqli_connect("localhost", "root", "zxcv1234");
  mysqli_select_db($conn, "opentutorials");
    $sql = "INSERT INTO topic (title, description, author, created) VALUE('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())";
    $result = mysqli_query($conn, $sql);
    header('Location: http://localhost/index.php');
?>