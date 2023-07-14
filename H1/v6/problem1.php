<html>
    <head>
        <title>課題1</title>
    </head>
    <body>
        <?php 
            $points = array(45,50,55,60,65,70,75,80);
            foreach($points as $point){
                $point *= (9/8);
                $point = floor($point);
                $point += 10;
                echo $point."<br/>\n";
            }
        ?>
    </body>
</html>
