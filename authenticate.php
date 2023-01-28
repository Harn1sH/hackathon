<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loading</title>
</head>
<body>
    <?php
    $n = $_POST['email'];
    $p = $_POST['password'];

    $con = new mysqli('localhost','id20215437_root','I](NT5US42(^{R5a','id20215437_demo');
    $sql="SELECT * FROM onepiece WHERE Email='".$n."'AND Password='".$p."'LIMIT 1";
    $r = $con->query($sql);
    if(mysqli_num_rows($r)==1){
        echo("<center><h1>YOU HAVE LOGGED IN</h1></center>");
        header("Location:success.php");
        die();
        $con->close();
    }
    else{
        header("Location:failed.php");
        die();
        $con->close();
    }
    ?>
</body>
</html>