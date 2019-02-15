<html>
        <head>
                <title>Echo Back</title>
                <h1>Echo Back</h1>
        </head>
        <body>
        <?php
                $firstname = $_REQUEST['firstname'];
                $lastname = $_REQUEST['lastname'];
                $color = $_REQUEST['color'];
                if ($color = "blue"){
                        echo '<body style="background-color:blue">';
                }
                else if ($color = "yellow") {
                        echo '<body style="background-color:yellow">';
                }
                else {
                        echo '<body style="background-color:white">';
                }
                echo "Hello " . $firstname . " " . $lastname . " from a Web app written in PHP on " . date("h:i:sa"). " time";

        ?>
        </body>
</html>

