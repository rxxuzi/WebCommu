<?php
    $row = 1;
    // $path = "./reports.csv";
    $path = "./2022/reports.csv";

    //空のレポート用配列
    $repo = array();

    //空のid配列
    $id = array();

    // ファイルが存在しているかチェックする
    if(file_exists($path)){
        $fp = @fopen($path, "r");

        if (($handle = $fp) !== FALSE) {
            // 1行ずつfgetcsv()関数を使って読み込む
            while (($data = fgetcsv($handle))) {
                echo $row."行目\n";
                $row++;
                foreach ($data as $value) {
                    echo "$value\n";
                }
            }
            fclose($handle);
        }

        fclose($fp);
    }else{
        echo "file not found";
    }
    
?>