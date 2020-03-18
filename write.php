<?php
    $conn = mysqli_connect("localhost", "root", "zxcv1234");
    mysqli_select_db($conn, "opentutorials");
    $result = mysqli_query($conn, "SELECT * FROM topic");
    
    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="target">
    <header>
        <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="life coding">
        <h1><a href="index.php">Application</a></h1>
    </header>
    <nav>
        <ul>
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo '<li><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";    
                    } 
            ?>
        </ul>
    </nav>
    <div id="control">
        <input type="button" value="white" id="white_btn"/>
        <input type="button" value="black" id="black_btn"/>
        <a href="http://localhost/write.php">write</a>

    </div>
    <article>
        <form action="process.php" method="POST">
          <p> Title : <input type="text" name="title"> </p>
          <p> Author : <input type="text" name="author"> </p>
          <p> Description : <textarea name="description"></textarea> </p>
          <input type="submit" name="name">
        </form>
    </article>
  

</body>
</html>