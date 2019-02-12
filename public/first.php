<?php
session_start(); $_SESSION['fav_stooge']='Moe'; $_SESSION['num_stooges']=3;
?>
<html
<head>
<title>Session Fun</title>
</head>
<body>
<h1>Just set some session values</h1>
<a href="second.php">Next page</a>