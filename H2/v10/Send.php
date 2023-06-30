<?php
    $debug = false;

    // $fp = @fopen($path, "a");

    $data = array();//配列
    $counter = 0;  //カウンター

    mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    $mail_to = "bigguccisosa3750@gmain.com";//宛先
    $mail_from = "te20fukuda@g.kumamoto-nct.ac.jp";//送信元
    if(count($_POST) == 0) {
        echo "Please fill in all fields";
    }else{


        if($debug) {
            echo "mail_to : " . $mail_to;
            echo "件名" .$_POST["sub"];
            echo "名前" .$_POST["name"];
            echo "本文" .$_POST["main"];
        }else if(mb_send_mail($mail_to, $_POST["sub"], $_POST["main"], "From:" . $mail_from)){


            $now = new DateTime();

            //配列に追加
            $data[0] = $_POST["sub"];
            $data[1] = $_POST["name"];
            $text    = $_POST["main"];
            $text    = str_replace("\n", "", $text);
            $data[2] = str_replace(",", " ", $text);
            $data[3] = ($now->format('Y-m-d H:i:s'))."\n";
            //ファイルに追記

            $path = "data.txt";

            if(file_exists($path)){
                
                file_put_contents($path, implode(',', $data), FILE_APPEND);
                header("Location: https://edu3.te.kumamoto-nct.ac.jp/~te20fukuda/v10/kadai3.php"); //メインに戻る

            }else{
                echo "file not found";
            }

        }else{
        echo "Mail not sent";
        }
    }
?>