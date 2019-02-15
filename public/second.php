<html
<head>
<title>Session Fun</title>
<h1 style="text-align: center;">Second Session</h1>
</head>
<body>

<?php
    session_start();
    if (isset($_SESSION['username'])) {
        print "Hi " . $_SESSION['username'] . "  nice to meet you!";
    }
    else{
        print "Howdy stranger. Please tell me your name on page1!";
    }

    if(isset($_REQUEST['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        $url="second.php";
        header("Location: ".$url);
        }
?>
<br>
<form action="" method="post">
        <button type="logout" name="logout" value="submit">Clear</button>
</form>
<br>
<a href="first.php">Previous Page</a>
</body>
</html>