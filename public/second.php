<html
<head>
<title>Session Fun</title>
<h1>Reading session variables</h1>
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
        session_unset();
    }
?>
<br>
<button href="?logout">Clear Session</button>
</body>
</html>
