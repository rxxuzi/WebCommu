<?php
$row = 1;
//相対パス
$path = "./2022/reports.csv";
//空のレポート用配列
$repo = array();
//空のid配列
$id = array();
// ファイルが存在しているかチェックする
if(file_exists($path)){
    //ファイルポインタ
    $fp = @fopen($path, "r");
    if (($handle = $fp) !== FALSE) {
    // 1行ずつfgetcsv()関数を使って読み込む
        while (($data = fgetcsv($handle))) {
            echo $row."行目\n";
            //listにdataを配列化して代入
            $list = (array)$data;
            $id[$row] = $list[0];

            if($list[1] == null){
                $repo[$row]  = "【未提出】";
            }else{
                $repo[$row]  = $list[1];
            }

            echo $repo[$row].": ";
            echo $id[$row]."\n";
            $row++;
        }
        fclose($handle);
    }
    fclose($fp);

    //htmlに<br>タグをつけて出力
    // foreach($repo as $key => $value){
    //     echo "$value<br/>\n";
    // }
    

}else{
    echo "file not found";
}
?>