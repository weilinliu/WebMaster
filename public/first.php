<html>
<head>
<title>first_session</title>
</head>
<body>
<h1 style="text-align: center;">First Session</h1>

<form action="" method="post">
    <label for="username">
        <b>username</b></label>
        <input type="text" id="username" placeholder="Enter username" name="username" required>
        <br>
    <button type="submit" name="submit" value="submit">Submit</button>
</form>
<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        $_SESSION['username'] = $_POST['username'];
    }
?>

<a href="second.php">Next Page</a>
</body>
</html>