<html>
    <head>
        <script>

        </script>
    </head>

    <body>
        <?php
        $myarray = array(
            array("Aditya","Saad","Fahad"),
            array("Japan","Dubai","Bahrain")
        );
        print_r($myarray);
        for($x = 0;$x<3;$x++){
            for($y = 0;$y<3;$y++){
                echo $myarray[$x][$y];
            }
        }

        


        ?>
    </body>
</html>