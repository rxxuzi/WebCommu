<html>
    <head>応用課題</head>
    <body>
        <?php
            echo "応用課題<br />\n";
            $line = 1;//行数カウンター
            //ファイル名
            $filePath = "./v7/member.txt";
            //file_exists()でファイルが存在するか
            if(!file_exists($filePath)){
                echo "files founds -> $filePath ";
                //read専用 fp
                $fp = fopen($filePath,"r");
                // echo "test <br />\n";
                //feofとはファイルの終端を検出する関数
                while(!feof($fp)){
                    //fgets() はファイルから1行分のデータを読み出す
                    $fileline = fgets($fp);
                    //echoで表示
                    echo "$line: $fileline <br />\n";
                    $line++;//行数をインクリメント
                }
                fclose($fp);//close
            }else { echo "files not founds : $filePath "; } //例外処理
            echo "end <br />\n";
        ?>
    </body>
</html>