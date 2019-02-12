<html
<head>
<title>Session Fun</title>
</head>
<body>
<h1>Reading session variables</h1> <?php
session_start();
print "There are ".$_SESSION['num_stooges'] ." and my favorite is ". $_SESSION['fav_stooge'];
?>
  </body>
  </html>