<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>JavaScript</h1>
    <ul>
    <script>
        list = new Array("최진혁", "최유빈", "한아람", "한이은");
        i = 0;
        while(i < list.length) {
        document.write("<li>"+list[i]+"</li>");
        i = i + 1;
        }
    </script>
    </ul>
    <h2>PHP</h2>
    <ol>
    <?php
        $list = Array("최진혁", "최유빈", "한아람", "한이은");
        $i = 0;
        while($i < count($list)){
            echo "<li>".$list[$i]."</li>";
            $i = $i + 1;
        }
    ?>
    </ol>
</body>
</html>