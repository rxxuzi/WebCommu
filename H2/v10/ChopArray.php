<?php
    $str = array("Hello","World","From","PHP");
    foreach($str as $value){
        echo $value."\n";
    }
    $maxIndex = count($str) - 1; 
    //改行コードの挿入
    $str[$maxIndex] .= "\n";
    

    $path = "./temp.txt";
    $fp = @fopen($path,"a");
    //追記ファイルポインタ

    if(file_exists($path)){
        file_put_contents($path, implode(',', $str), FILE_APPEND);
    }else{
        echo "file not found";
    }

    fwrite($fp, implode(',', $str));
    fclose($fp);

?>