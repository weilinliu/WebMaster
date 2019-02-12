<html>
<head>
<title>first_session</title>
<h1 style="text-align: center;">First Session</h1>
</head>

<form action="", method="post">
    username: <input type=“text” name=“username” /><br>
    <button type=“submit” value=“submit”>submit </button>
</form>

<a href="second.php">Next page</a>
<body>
<?php
    session_start();
    if(isset($_POST['submit'])){
        $_SESSION['username']= $_REQUEST['username'];
    }
?>
</body>
</html>