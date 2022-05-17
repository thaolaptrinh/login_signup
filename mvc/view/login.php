<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login nè</title>
    <link rel="stylesheet" href="../../assets/css/login.css">
</head>

<body>


    <div class="login">

        <form action="../controller/login.php" method="post">
            <h1>User login</h1>

            <label>User name:</label> <br>
            <input type="text" name="username" id="username" placeholder="username">



            <label>Password:</label> <br>
            <input type="text" name="password" id="password" placeholder="password">


            <input type="submit" value="Login" name="login">

        </form>


    </div>




</body>

</html>