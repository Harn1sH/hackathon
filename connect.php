
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
        <?php
            $firstname = $_POST['Fname'];
            $lastname = $_POST['Lname'];
            $gender = $_POST['Gender'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $number = $_POST['number'];

            $conn = new mysqli('localhost','id20215437_root','I](NT5US42(^{R5a','id20215437_demo');
            if($conn->connect_error){
                die('Connection Failed: '.$conn->connect_error);    
            }
            else{
                $stmt = $conn->prepare("insert into onepiece(firstname,lastname,gender,email,password,number) values(?,?,?,?,?,?)");
                $stmt->bind_param("sssssi",$firstname,$lastname,$gender,$email,$password,$number);
                $stmt->execute();
                echo("<center>💕💕💕Registration Successful💕💕💕</center>");
            $stmt->close();
            $conn->close();
            }
        ?>
        <form action="connect1.php">
           <br> <center><input type="submit" value="Display Table"></center>
        </form>
        <script type="text/javascript">
            function disp(){
            window.location.href = './connect1.php';
            }
        </script>

</body>
</html>