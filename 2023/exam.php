<?php

    $counter = 0;

    $path0 = "./ids.txt";
    $path1 = "./subjects.txt";

    $id = array();
    $sub = array();

    //ids.txt to $ Array
    if(file_exists($path0)){
        echo "File found";
        $fp = fopen($path0, "r");
        while(!feof($fp)){
            $line = fgets($fp);
            $id[$counter] = explode(",", $line);
            $counter ++;
        }
    }else{
        echo "File not found\n";
    }

    $counter = 0;

    //sub.txt to $ Array
    if(file_exists($path1)){
        echo "File found";
        $fp = fopen($path1, "r");
        while(!feof($fp)){
            $line = fgets($fp);
            $sub[$counter] = explode(",", $line);

            //線形探索
            for($i = 0 ; $i < 3 ; $i ++){
                if($sub[$counter][$i] == ""){
                    $sub[$counter][$i] = "指定されていません";
                }
            }
            $counter ++;

            echo $sub[$counter-1][0]."\n";
        }
    }else{
        echo "File not found\n";
    }

    //rename id to name
    $maxIndex = count($sub);

    for ($i=0; $i < $maxIndex; $i++) { 
        $sub[$i][0] = $id[$i][1];
    }

    echo "done \n";

    //display

    foreach ($sub as $value) {
        echo $value[0].":";
        echo "[".$value[1]."] ";
        echo "[".$value[2]."] ";
        echo "[".$value[3]."]\n";
    }


    
?>