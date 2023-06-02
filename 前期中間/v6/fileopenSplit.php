<html>
    <head>fileopen split.php</head>
    <body>
        <?php
        $linenumber = 1;
        if(file_exists("./list.txt")){
            $filepointer = fopen("./list.txt","r");
            while(!feof($filepointer)){
                $aline  = fgets($filepointer);
                echo "$linenumber : $aline <br/> \n";
                $linenumber++;
                //$alineをカンマで分割して出力された文字列たちは$wordに代入される
                // ただし、explode()の出力は配列なので$wordは自動的に配列になる
                $words  = explode(" ",$aline);
                echo "word count : ".count($words)."<br/>";
                echo "Explode Results : $words[0] $words[1] $words[2] $words[3] $words[4] <br / ";

            }
            fclose($filepointer);

        }
        else{echo "file not found";}
        ?>
    </body>
</html>