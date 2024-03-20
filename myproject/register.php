<?php
    
if(isset($_POST['save']))
{

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];

$connection = mysqli_connect("localhost","root","","student") or die("connection failed");
$sql= "insert into registration (id,username,email,password,repassword) values('','$username','$email','$password','$repassword')";

if(mysqli_query($connection,$sql))
{

echo "New record created successfully";
}
else
{

   echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}





}

// mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<main>
    <form action="register.php" method="post" enctype="mutlipart/form-data">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password2">Password Again:</label>
            <input type="password" name="repassword" id="repassword">
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
<input type="submit" name="save" value="Register" />
               <footer>Already a member? <a href="login.php">Login here</a></footer>
    </form>
</main>
</body>
</html>