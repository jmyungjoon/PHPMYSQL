<?php
    $conn = mysqli_connect("localhost", "root", "zxcv1234");
    mysqli_select_db($conn, "opentutorials");
    $name = mysqli_real_escape_string($conn, $_GET['name']);
    $password = mysqli_real_escape_string($conn, $_GET['password']);
    $sql = "SELECT * FROM user WHERE name='".$name."' AND password='".$password."'";
    $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        if($result->num_rows == 1) {
            echo "Welcome, Sir!";
        } else { echo "Who are you?";
        }
    ?>
    
</body>
</html>