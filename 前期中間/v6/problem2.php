<html>
    <head>
        <title>課題2</title>
    </head>
    <body>
        <?php 
            $product = array('ハンバーガー','チーズバーガー','フィッシュバーガー','チキンバーガー','えびかつバーガー');
            $price = array('ハンバーガー' =>  300, 'チーズバーガー' => 400, 'フィッシュバーガー' => 500, 'チキンバーガー' => 600, 'えびかつバーガー' => 700);

            foreach($product as $key => $value){
                echo $key."count : ".$value ."-> $". $price[$value] . "<br />\n";
            }
        ?>

    </body>
</html>