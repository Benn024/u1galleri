<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Food Thumbnails</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="galleri.css">
    </head>
    <body>
        
        <?php
            $var1 = glob("img/*.jpg");
//            var_dump($var1);

            foreach ($var1 as $filename) {
                $namn = substr($filename, 4, -4);
//                $skrift =   substr($namn, -1, 4);
                echo "<div class='ram'><a href='#'><img src='$filename'></a><p>$namn</p></div>";
            }
        ?>
            
    </body>
</html>
