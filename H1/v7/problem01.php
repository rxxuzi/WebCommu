<html>
    <head>
        <title>自習課題1</title>
    </head>
    <body>
        <?php 
            $memberArray = array(); //配列の宣言
            //ファイル名
            $path = "member.txt";
            $counter = 0;

            //file_exists()でファイルが存在するか
            if(file_exists($path)){
                //read専用 fp
                $fp = fopen($path, "r");
                //feofとはファイルの終端を検出する関数
                while(!feof($fp)){
                    //fgets() はファイルから1行分のデータを読み出す
                    $line = fgets($fp);
                    //echoで表示
                    // echo $counter . " : " . $line."<br />\n";

                    //配列化
                    // $words  = explode(",",$aline);
                    
                    $memberArray[$counter] = $line;

                    //行数をインクリメント
                    $counter++;
                }
                fclose($fp);
            }else{
                echo "file not found <br />\n";  //例外処理
            }

            for($i = 0; $i < $counter; $i++){
                //行を配列化
                $words = explode(",",$memberArray[$i]);
                //所有格を代入
                $sex = str_replace("F","Her",$words[1]);
                $sex = str_replace("M","His",$sex);
                $sex = str_replace("-","Their",$sex);
                $words[1] = str_replace("F","Ms.",$words[1]);
                $words[1] = str_replace("M","Mr.",$words[1]);
                $words[1] = str_replace("-","Mr/Ms.",$words[1]);

                echo $words[1].  " " . $words[2] ." ". $words[3]."came from ". $words[5]. " $sex ID is $words[0]<br />\n";
            }
        ?>
    </body>
</html>