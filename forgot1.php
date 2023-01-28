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
<body style="background-color:beige;">
<?php
    session_start()?>
    <?php
        $nnn= $_POST['fmail'];
        $_SESSION['ffmail'] = (string)$nnn;
        $con = new mysqli('localhost','id20215437_root','I](NT5US42(^{R5a','id20215437_demo');
        $sql = "SELECT * FROM onepiece WHERE EMAIL = '".$nnn."'LIMIT 1";
        $r = $con->query($sql);

        if(mysqli_num_rows($r)==1){
            echo("<center><h1>ENTER NEW PASSWORD</h1></center>");
            header("Location:forgot2.php");
            die();
            $con->close();
        }


        else{
            echo("
            
            <form>
            <h1>Invalid Email Id</h1>
            </form>
            
            ");

            header("location:forgot.php");
        }


    ?>
</body>
</html>