<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
/* =====================here nav bar code  ===================*/



header{
  display: flex;
  justify-content: flex-start; /* Change this line */
  align-items: center;
  padding: 30px 10px;
}
.nav_links li{
  display: inline-block;
  padding: 0px 20px;
 

}
ul{
  display: flex;
  align-items: center;
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
.FFFF{
  padding-left: 0; /* Change this line */
}

.ssss{
  width: 50px;
}
.right{
  float: right;
  margin-left:50px ;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBooks</title>
</head>
<body>
<header>
   
   <nav>
       
       <ul class="nav_links">
         <li><img class="ssss" src="utility/icon/OL.png" alt=""></li>
         <li class="FFFF">ONLINE LIBRARY</li>
           <li><a href="dashboard.php">Home</a></li>
           <li><a href="display.php">My Book</a></li>
           <li><a href="contact.html">Contact</a></li>
       </ul>
   </nav>
</header>
    <div class="container">
        
    </div>
</body>
</html>