<?php
    //ファイルパスの指定

    $path = "./H1/exp/data.txt";//相対パス
    //読み取り専用で開く
    /*
    ファイルまたは URL をオープンする
    fopen() は、 filename で指定されたリソースをストリームに結び付けます。
    "r"は読み取り専用の意
    */
    $fp = @fopen($path, "r");

    $str = array();//空の配列を用意
    $counter = 0;  //カウンター

    //ファイルまたはディレクトリが存在するかどうか調べる
    if(file_exists($path)){
        //ファイル内の文字を終端まで読み取るs
        /*
        $stream: ファイルポインタは、有効なファイルポインタである必要があり、 fopen() または fsockopen() で正常にオープンされた 
        （そしてまだ fclose() でクローズされていない） ファイルを指している必要があります。
        ファイルポインタがファイル終端に達しているかどうか調べる
        ファイルポインタがファイル終端に達しているかどうかを調べます。
        */
        while(!feof($fp)){
            /*
            ファイルポインタから 1 行取得します。
            @param $stream: ファイルポインタは、有効なファイルポインタである必要があり、 fopen() または fsockopen() で正常にオープンされた （そしてまだ fclose() でクローズされていない） ファイルを指している必要があります。
            @param $length: 読み出しは、 length - 1 バイト読み出したか、(戻り値に含まれる) 改行文字を検出したか、EOF に達したかのいずれかが起こった時点で終了します。 length が指定されない場合は、行末に達するまで読み続けます。
            @return stream で指定したファイルポインタから最大 length - 1 バイト読み出し、 そ
            */
            $line = fgets($fp);
            $str[$counter] = $line; // 配列にファイルから読み取った文字列を代入
            $counter++;             //カウンターをインクリメント
        }
        /*
        openしたファイルポインタを閉じる 
        @return 成功した場合に true を、失敗した場合に false を返します。
        ここでは開いている前提なのでreturnは使わない
        */
        fclose($fp);
    }else{
        echo "ファイルが存在しません"; //ファイルが存在しなかった場合の処理
    }

    foreach($str as $value){
        //文字列を分割して深層の配列に代入
        $gdp = explode(" ", $value);
        $country ;
        //条件分岐
        switch($gdp[0]){
            case "US": $country = "U.S.A."; break;
            case "JP": $country = "Japan"; break;
            case "CN": $country = "China";break;
            case "FR": $country = "France";break;
            case "DE": $country = "Germany";break;
            case "IT": $country = "Italy";break;
            case "UK": $country = "United Kingdom";break;
            default  : $country = "Unknown";break;
        }
        //gdp[1]内に含まれている改行コードを空文字と置換する
        /*
        str_replaceは検索文字列に一致したすべての文字列を置換する
        使用例: str_replace(search, replace , subject); 
        この関数は、 subject の中の search を全て replace に置換する。
        */
        $dollar = str_replace(PHP_EOL, '', $gdp[1]); //PHP_EOLとは改行コード

        //出力
        echo "$country GDP is : ".$dollar." Billion dollar \n ";
        
    }

    
?>