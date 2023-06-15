<?php
$row = 1;
//相対パス
$path = "./2022/reports.csv";
$idtxt = "./2022/ids.txt";

//空のレポート用配列
$repo = array();
//空のid配列
$id = array();

//txt側の配列
$id2 = array();

// ファイルが存在しているかチェックする
if(file_exists($path)){
    //ファイルポインタ
    $fp = @fopen($path, "r");
    if (($handle = $fp) !== FALSE) {
    // 1行ずつfgetcsv()関数を使って読み込む
        while (($data = fgetcsv($handle))) {
            // echo $row."行目";
            //listにdataを配列化して代入
            $list = (array)$data;
            $id[$row] = $list[0];
            $repo[$row] = $list[1];

            //check 
            // echo $id[$row]." : ";
            // echo $repo[$row]."<br />\n";
            $row++;
        }
        // fclose($handle);
    }
    fclose($fp);
}else{
    echo "file not found";
}

$counter2 = 0;
//未提出者のリスト
$not_submitted = array();
if(file_exists($idtxt)){
    //filepointer
    $fp = @fopen($idtxt, "r");

    $get_line = fgets($fp);
    //txtファイルを配列化s
    $id2 = explode(",", $get_line);

    //id2の要素数毎に比較
    $index =  count($id2);

    for($i = 0; $i < $index; $i++){

        echo $id2[$i].": ";

        $is_submitted = false;

        $tmp = "tmp";
        
        /*
        提出状況を探索
        */
        for($j = 1; $j < $row; $j++){
            if($id2[$i] == $id[$j]){
                $is_submitted = true;
                // echo $id[$j]."\n";
                $tmp = $repo[$j];
                break;
            }
        }

        //提出状況をチェック
        if(!$is_submitted){
            // 一応配列に名前を代入
            $not_submitted[$counter2] = $id2[$i];
            echo "not submitted <br />\n";
        }else{
            echo "submitted : ".$tmp."<br />\n";
        }
    }
}

?>