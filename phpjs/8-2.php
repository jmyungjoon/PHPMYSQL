<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $password = $_GET["password"];
        if($password == "1111") {
            echo "Welcome, Sir!";
        } else { echo "Who are you?";
        }
    ?>
    
</body>
</html>