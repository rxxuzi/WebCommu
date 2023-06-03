<?php 
    //基本的な配列
    $arr = array(1,2,3,4,5);
    //配列の要素ごとにecho
    for($i = 0; $i < count($arr); $i++){
        echo "$arr[$i] \n";
    }

    echo "foreach文\n";
    
    /*
    foreach文
    インデックス0~maxまで回すfor文
    "as"は配列[index]の意
    */

    $arr1 = array("Apple","Banana","Orange");
    foreach($arr1 as $value){
        echo "$value \n";
    }

    /*
    $配列 = array(a => b);
    foreach (参照する配列 as a => b)
    */
    echo "key付きforeach文\n";

    $arr2 = array("a" => "Apple", "b" => "Bannana", "o" => "Orange" , "l" => "Lemon");

    foreach($arr2 as $key => $value){
        echo "$key => $value \n";
        echo "$value \n";
    }


?>