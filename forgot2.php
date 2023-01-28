<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
    <center>
        <form action="forgot3.php" method="post">
            <fieldset>
             <h3>   Enter Password: <input type="password" name="password" id="password"><br>
               <br> Retype Password: <input type="password" name="passwordd" id="passwordd"><br>
               <center><br><input type="submit" value="Submit"></center>
               </h3>
            </fieldset>
        </form>
    </center>
    <?php
    session_start();
    $_SESSION['fmaill'] = $_SESSION['ffmail'];
    ?>
</body>
</html>l