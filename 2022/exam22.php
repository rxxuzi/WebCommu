<?php
$row = 1;
//相対パス
$path = "./2022/reports.csv";

$idtxt = "./2022/id.txt";


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
            echo $repo[$row]."\n";
            $row++;
        }
        fclose($handle);
    }
    fclose($fp);
}else{
    echo "file not found";
}

$counter2 = 0;

if(file_exists($idtxt)){
    while(!feof($fp)){
        $line = fgets($fp);
        $id2 = explode(",",$line);
        $counter2 ++ ;
    }
}
?>