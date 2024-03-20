<?php
 require('db.php');
session_start();
    
if(isset($_POST['save']))
{

$username=$_POST['username'];
$password=$_POST['password'];
$sql = "select * from registration where username='$username' AND password='$password'";
$result = mysqli_query($connection,$sql) or die("database error");
$count=mysqli_fetch_array($result,MYSQLI_ASSOC);
$rows= mysqli_num_rows($result);
if($rows==1)
{

header("Location:dashboard.php");
}

else
{

    echo '<script>
    window.location.href="login.php";
    alert("login failed... invalid  username or password ");
    </script>';

}

}

mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body >
<main class="containme" >
    <form action="login.php" method="post" enctype="mutlipart/form-data">
        <h1>Login Page</h1>
        <div class="sagr">
            <label  for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="sagr">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        
         <input class="btnsag" type="submit" name="save" value="Login" />
               <footer>New Member Sign Up? <a href="register.php">Sign Up here</a></footer>
    </form>
</main>
</body>
</html>