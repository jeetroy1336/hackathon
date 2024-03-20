<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
}

body{
    background: rgb(255, 255, 255);
}
header{
  display: flex;
  justify-content: flex-start;
  align-items: center;
  padding: 30px 10px;
  /* position: fixed; */
  
}
.nav_links li{
  display: inline-block;
  padding: 0px 20px;
 

}
.nav_links li a{
  transition: 0px ;
  color: rgb(0, 0, 0);
  text-decoration: none;
}
.nav_links li a:before{
 position: absolute;
 content: '';
 left: 0;
 bottom: 0;
 height: 3;
 width: 100%;
 background: rgb(255, 0, 0);
 transform: scaleX(0);
 transform-origin: right;
}
.nav ul li a:hover:before{
  transform: scaleX(1);
  transform-origin: left;
}

  .logo{
    cursor: pointer;
    margin-right: auto;
    padding: 0px 25px;
    text-decoration: none;
    font-size: xx-large;
  }

.containme{
    width: 100%;
    height: 100vh;
    background: rgb(255, 255, 255);
    display: flex;
    align-items: center;
    justify-content: center;
}
form{
    background-color: rgb(228, 242, 255);
    display: flex;
    flex-direction: column;
    padding: 2vw 4vw;
    width: 50%;
    max-width: 600vh;
    border-radius: 10px;
}
form h3{
    color: #555;
    font-weight: 800;
    margin-bottom: 20px;
}
form input,form textarea{
    border: 0;
    margin: 10px 0;
    padding: 20px;
    outline: none;
    background: #9fd9ff;
    font-size: 16px;
}
form button{
    padding: 15px;
    background: red;
    color: white;
    font-size: 18px;
    border: 0;
    outline: none;
    cursor: pointer;
    width: 150px;
    margin: 20px auto 0;
    border-radius: 30px;

}
@media only screen and (min-width:179px) {
form{
  width: 90%;
}

}
@media only screen and (min-width:509px) {
  form{
    width: 70%;
  }
}
@media only screen and (min-width:809px) {
  form{
    width: 50%;
  }
}


    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" href="items/favicon_io/favicon.ico">
</head>
<body>
    <header>
   
        <nav>
            
            <ul class="nav_links">
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="display.php">About</a></li>
                <li><a href="feedback.php">feedback</a></li>
            </ul>
        </nav>
     </header>
      
    <div class="containme" id="containme">
        <form action="https://524a1c4a05dc92fee87bfdf84aa63231" method="POST" />
            <h3>GET IN TOUCH </h3>
            <input type="text" id="namme"placeholder="Your Name" name="Name" required>
            <input type="email" id="email" placeholder="Email id" name="Email"required>
            <input type="text" id="phone-" placeholder="Phone No" name="Mobile no" required>
            <textarea  id="message"  rows="4" name="Message" placeholder="HOW CAN I HELP YOU " required></textarea>
            <button type="submit">Submit</button>

        </form>
    </div>
</body>
</html>