<html>
<head>
<title>fileopen.php</title>
</head>
<body>
    
<?php
    $linenumber = 1;
    
    if(file_exists("./list.txt")){

        $filepointer=fopen("./list.txt", "r");
        
        //feofとはファイルの終端を検出する関数
        while(!feof($filepointer)){
            //fgets() はファイルから1行分のデータを読み出す
            $fileline = fgets($filepointer);
            echo "$linenumber: $fileline <br />\n";
            $linenumber++;
        }
        fclose($filepointer);
    }
    else { echo "error."; }
?>
</body>
</html>