<html>
        <head>
                <title>Environment Variables</title>
                <h1 style="text-align: center;"> Environment Variables </h1>
        </head>
        <body>
        <?php
                while (list($var,$value) = each ($_SERVER)) {
                        echo "<strong>$var:</strong> $value <br />";
                }
        ?>

        </body>
</html>