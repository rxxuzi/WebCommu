<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>BBS</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style type="text/css">
    body {
        background-color: #f0f0f2;
        margin: 0;
        padding: 0;
        font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        
    }
    div {
        width: 600px;
        /* margin: 5em auto; */
        padding: 1em;
        background-color: #fdfdff;
        border-radius: 0.1em;
        box-shadow: 2px 3px 7px 2px rgba(0,0,0,0.02);
    }
    form {
        background-color: #fdfdff;
    }

    .time{
        color: steelblue;
    }
    </style>
</head>
<body>
    <h1>BBS</h1>
    <!-- 入力フォーム -->
    <form action="Send.php" method="POST">
        件名 : <input type="text" name="sub"  size="20" placeholder="Enter Subject"><br/>
        名前 : <input type="text" name="name" size="20"  placeholder="Enter Name"><br/>
        本文 : <br/>
        <textarea name="main" cols="30" rows="10" placeholder="Enter Message"></textarea><br/>
        <input type="submit" value="Send">
        <input type="reset" value="Reset">
    </form>

    <?php
    // 掲示板   

    $path = "data.txt";
    $fp = fopen($path, "r");
    
    while(!feof($fp)){
        $line = fgets($fp);
        $body = explode(",", $line);
        // $body[2] = str_replace("^", " ", $body[2]);
        // $bodyTxt = explode("^", $body[2]);
        echo "<div>";
        echo "<hr>";
        echo "<h2>".$body[0]."</h2>";
        echo "<p>".$body[1]."</p>";
        echo "<p>".$body[2]."</p>";
        echo "<p class='time'>".$body[3]."</p>";
        echo "</div>";
        
    }
    ?>
</body>
</html>