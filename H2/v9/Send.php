<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="SendMail.php" method="POST">
        件名 : <input type="text" name="sub" size="20" placeholder="Enter Subject"><br/>
        本文 : <br/>
        <textarea name="main" cols="30" rows="10" placeholder="Enter Message"></textarea><br/>
        <input type="submit" value="送信">
        <input type="reset" value="デモ">
    </form>
    <?php
        $debug = 0;
        
        if ($debug) {
            echo "<br/>";
            echo "POST : ";
            var_dump($_POST);
            echo "<br/>";
            echo "GET : ";
            var_dump($_GET);
            echo "<br/>";
        }

        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $mail_to = "te20fukuda@g.kumamoto-nct.ac.jp";
        $mail_from = "te20fukuda@g.kumamoto-nct.ac.jp";

        if(count($_POST) == 0) {
            echo "Please fill in all fields";
        }else{
            if($debug) {
                echo "mail_to : " . $mail_to;
                echo "件名" .$_POST["sub"];
                echo "本文" .$_POST["main"];
            }else if(mb_send_mail($mail_to, $_POST["sub"], $_POST["main"], "From:" . $mail_from)){
                echo "Mail sent";
            }else{
                echo "Mail not sent";
            }
        }
        
    ?>
</body>
</html>