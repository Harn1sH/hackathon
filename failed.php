<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login failed</title>
    <style>
        form { 
            margin: 0 auto; 
            width:25%;
            margin-top: 17%;
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
<body style="background-color: antiquewhite;">
    <center>
        <form  action="index.php"> 
            <fieldset>
                <strong>LOGIN FAILED</strong> <br>
               <br> <a href="forgot.php">Forgot Password</a><br>
              <br> <input type="submit" value="Retry">
                <input type="button" value="Sign-Up" onclick="redi()">
            </fieldset>
        </form>
        <script type="text/javascript">
            function redi(){
                window.location.href="./fp.php";
            }
        </script>
    </center>
</body>
</html>