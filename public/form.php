<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Collection</title>
    <h1 style="text-align: center;"> Form Collection </h1>
</head>
<body>
<form action=“echo.php”>
    first name: <input type=“text” name=“firstname” /><br>
    last name:<input type=“text” name=“lastname” /><br>
    favorite color: <select name = "color">
    <option value = "blue"> blue </option>
    <option value = "yello"> yellow </option>
    <option value = "white"> white </option>
</select><br>
    method:<select name = "method">
    <option onselect = 'method(this, "get")'> get </option>
    <option onselect = 'method(this, "post")'> post </option>
</select><br>
    <button href="echo.php" type=“submit” value=“submit”>submit </button>
</form>

<script>
    function method(page, method){
        page.form.method = method;
    }
</script>

</body>