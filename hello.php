<html>
        <head>
                <title>Hello World</title>
        </head>
        <body>
        <?php
                $ran = rand(1, 3);
                if ($ran == 1){
                        $color = "blue";
                        echo '<body style="background-color:blue">';
                }
                else if ($ran == 2) {
                        $color = "yellow";
                        echo '<body style="background-color:yellow">';
                }
                else {
                        $color = "white";
                        echo '<body style="background-color:white">';
                }
                echo "Hello Web World from Language PHP on " . date("h:i:sa") . " enjoy my " .$color . " page";

        ?>
        </body>
</html>

