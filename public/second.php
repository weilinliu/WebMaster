<html
<head>
<title>Session Fun</title>
</head>
<body>

<?php
    session_start();
    if (isset($_SESSION['username'])) {
        print "Hi" . $_SESSION['username'] . "  nice to meet you!";
    }
    else{
        print "Howdy stranger. Please tell me your name on page1!";
    }


    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
    }
?>
<br>
<input type="submit" value="clear">
</body>
</html>