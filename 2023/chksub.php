<?php

    $counter = 0;

    $path0 = "./ids.txt";
    $path1 = "./subjects.txt";

    $id = array();
    $sub = array();

    if(file_exists($path0)){
        echo "File found";
        $fp = fopen($path0, "r");
        while(!feof($fp)){
            $line = fgets($fp);
        }
    }else{
        echo "File not found\n";
    }


    if(file_exists($path1)){
        echo "File found";
        $fp = fopen($path1, "r");
        while(!feof($fp)){
            $line = fgets($fp);
            echo $line."\n";

        }
    }else{
        echo "File not found\n";
    }
?>