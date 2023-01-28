<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        form { 
            margin: 0 auto; 
            width:25%;
            margin-top: 12%;
            text-align: center;
            background-color:transparent;
        }
        body{
            background-image: url('164903.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover ;
        }
    </style>
    
</head>
<body style="background-color:beige;">
<center> <h1 style="color: white;">STRAW HATS LOGIN</h1>
    <form action="authenticate.php" method="POST">
        <fieldset>
           <strong>
            Email: <input type="email" name="email" id="email"> <br>
           <br> Password: <input type="password" name="password" id="password"><br>
           <br> <input type="submit" value="Login">
           <input type="button" value="Sign-Up" onclick="redic()">
            </strong>
        </fieldset>
    </form>
    <script type="text/javascript">
        function redic(){
            window.location.href="./fp.php";
        }
    </script>
    </center> 
</body>
</html>