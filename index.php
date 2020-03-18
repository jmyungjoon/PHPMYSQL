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
    <link rel="stylesheet" href="http://localhost/style.css">
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
        <a href="http://localhost/write.php">Write</a>

    </div>
    <article>
        <?php
        if(empty($_GET['id']) === false) {
            $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            echo '<h2>'.$row['title'].'</h2>';
            echo $row['description'];
            } else { ?>
                <h2>Welcome to Web</h2> <?php
            }
        ?>
        <div id="disqus_thread"></div>
        <script>
        
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://webapplicationpractice.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </article>
    <script src="script.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5e6339098d24fc22658644e8/1e3kc889i';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>