<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        form { 
            margin: 0 auto; 
            width:25%;
            margin-top: 9%;
            text-align: center;
            background-color:transparent;
            color: white;
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
    <center> <h1>STRAW HATS REGISTRATION</h1>
    <form action="connect.php" method="post">
        <fieldset>
            <div>
                FirstName: <input type="text" name="Fname" id="Fname"><br>
               <br> LastName: <input type="text" name="Lname" id="Lname"><br>
               <br> Gender: <input type="radio" name="Gender" id="Gender" value="M">Male <input type="radio" name="Gender" id="FGender" value="F" >Female <input type="radio" name="Gender" id="OGender" value="O">Other <br>
                <br> Email: <input type="email" name="email" id="email"><br>
                <br> Password <input type="password" name="password" id="password"><br>
                <br> Mobile Number: <input type="text" name="number" id="number"><br>
                <br> <input type="submit" value="Submit"></strong>
    </div>
        </fieldset>
    </form>
</center>
</body>
</html> 