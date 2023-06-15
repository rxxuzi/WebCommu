<?php
$row = 1;
//相対パス
$path = "./2022/reports.csv";

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
            echo $row."行目";
            //listにdataを配列化して代入
            $list = (array)$data;
            $id[$row] = $list[0];
            $repo[$row] = $list[1];

            //check 
            echo $id[$row]." : ";
            echo $repo[$row]."<br />\n";
            $row++;
        }
        // fclose($handle);
    }
    fclose($fp);
}else{
    echo "file not found";
}

$counter2 = 0;

echo "HELLO WORLD\n";

$idtxt = "./2022/ids.txt";
//未提出者のリスト
$not_submitted = array();
if(file_exists($idtxt)){
    $fp = @fopen($idtxt, "r");
    $get_line = fgets($fp);
    
    $id2 = (array)$get_line;

    //id2の要素数毎に比較
    for($i = 0 ; $i = count($id2) ; $i ++){
        for ($j=0; $j < $counter; $j++) { 
            $is_submitted = false;
            if ($id2[$i] == $id[$j]) {
                echo "found";
                $is_submitted = true;
                break;
            }
        }
    }
}

?>