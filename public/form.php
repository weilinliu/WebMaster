<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Collection</title>
    <h1 style="text-align: center;"> Form Collection </h1>
</head>
<body>
<!--
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
-->
<form id="form">
        <label for="fname"><b>First Name</b></label>
        <input type="text" id="firstname" placeholder="Enter First Name" name="fname" required>
        <br>
        <label for="lname"><b>Last Name</b></label>
        <input type="text" id="lastname" placeholder="Enter Last Name" name="lname" required>
        <br>
        Favorite color:
        <select id="color">
                <option value="blue">blue</option>
                <option value="yellow">yellow</option>
                <option value="white">white</option>
        </select><br>
        Method:
        <select id="method">
                <option value="GET">get</option>
                <option value="POST">post</option>
        </select><br>
        <button onclick="submit()">Submit</button>
</form>

<script>
        function submit() {
/*
                var fName = document.getElementById('firstname').value;
                var lName = document.getElementById('lastname').value;
                var colorlist = document.getElementById('color');
                var favoritecolor = colorlist[colorlist.selectedIndex].value;
*/
                var methodlist = document.getElementById('method');
                var method = colorlist[methodlist.selectedIndex].value;
                let form = document.getElementById("form");
                //var firstname = document.createElement("input");
                //var lastname = document.createElement("input");
                //var color = document.createElement("input");

                form.method = method;
                form.action = "echo.php";

                //firstname.value=fName;
                //firstname.name="firstname";
                //form.appendChild(firstname);


                //lastname.value=lName;
                //lastname.name="lastname";
                //form.appendChild(lastname);

                //color.value=favoritecolor;
                //color.name="color";
                //form.appendChild(color);

                //document.body.appendChild(form);

                form.submit()
        }
</script>

</body>
</html>