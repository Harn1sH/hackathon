<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <style>
 form { 
            margin: 0 auto; 
            width:25%;
            margin-top: 12%;
            text-align: center;
            background-color: transparent;
            
        }
        body{
            background-image: url('164903.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover ;
            color: black;
        }

        table{
            margin-top: 10%;
            border-width: 100%;
            text-align: center;
            background-color: tan;
        }
    </style>
</head>
<body">
    <center><table border="10">   
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone Number</th>

        </tr>
        <?php
            $conn = new mysqli('localhost','id20215437_root','I](NT5US42(^{R5a','id20215437_demo');
            if($conn->connect_error){
                die("Error Occured".$conn->connect_error);
            }
            else{
                $sql="SELECT * FROM onepiece";
                $re= $conn->query($sql);
                if($re->num_rows>0)
                {
                    while($r = $re->fetch_assoc())
                    {
                        echo("
                            <tr>
                                <td>".$r["ID"]."</td>
                                <td>".$r["FirstName"]."</td>
                                <td>".$r["LastName"]."</td>
                                <td>".$r["Gender"]."</td>
                                <td>".$r["Email"]."</td>
                                <td>".$r["Password"]."</td>
                                <td>".$r["Number"]."</td>
                            </tr>
                        
                        ");
                    }
                
                }
            $conn->close();
            }
        ?>
    </table></center>
    <form action="index.php">
            <input type="submit" value="Logout">
        </form>
</body>
</html>
