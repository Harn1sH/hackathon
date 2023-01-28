<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
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

    <form action="" method="post">
        <fieldset>
            <?php 
                session_start();
                $a = $_POST['password'];
                $b = $_POST['passwordd'];
                $nnn=(string)$_SESSION['fmaill'];
    

                if ($a==$b)
                {
                    $con = new mysqli('localhost','id20215437_root','I](NT5US42(^{R5a','id20215437_demo');
                  //$sql = "UPDATE onepiece SET Password = 12345 WHERE onepiece.Email = 'sanji@strawhats.co.in'";
                  $stmt = $con->prepare("UPDATE onepiece SET Password = (?) WHERE onepiece.Email = (?)");
                    $stmt->bind_param("ss",$a,$nnn);
                    $stmt->execute();
                    //$r = $con->query($sql);
                    echo("<center><h1>Done</h1></center>");
                    $stmt->close();
                    $con->close();                
                

                echo("
                    
                <a href='index.php'><h4>Login<h/4></a>
                ");         
                }
            
                
                else{
                    echo("<center><h1>Incorrect Password</h1></center>");
                    header("location:forgot3.php");
                    die();
                }
            ?>
        </fieldset>
    </form>
</body>
</html>