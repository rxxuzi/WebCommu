<html>
    <head>
    <title>ArrayA.php</title>
    </head>
    <body>
        <?php
        
        $a = array(123, 456, 789);
        print "0banme: $a[0] <br />\n";
        print "1banme: $a[1] <br />\n";
        print "2banme: $a[2] <br />\n";
        array_push($a, 999);
        array_unshift($a, 000);
        print "0banme: $a[0] <br />\n";
        print "1banme: $a[1] <br />\n";
        print "2banme: $a[2] <br />\n";
        print "3banme: $a[3] <br />\n";
        print "4banme: $a[4] <br />\n";

        ?>
    </body>
</html>