<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      body{
        background-color:#add8e6;
      }
        .card {
    align-items: center;
    display: flex;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    flex-wrap: wrap;
    flex-direction: column;
    padding-bottom: 20px;
    padding-top: 20px;
    margin: 10px;
    width: 20%;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  justify-content: center;
  display: flex;
  flex-wrap: wrap;
  padding: 2px 16px 20px 16px;
}
.saf{
  width: 100px;
}


/* =====================here nav bar code  ===================*/



header{
  display: flex;
  justify-content: flex-start; /* Change this line */
  align-items: center;
  padding: 30px 10px;
  /* border: 1px solid black; */
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
@media screen and (max-width: 592px) {
  body {
    background-color: blue;
  }
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
</head>
<body>
  <header>
   
    <nav>
        
        <ul class="nav_links">
          <li><img class="ssss" src="utility/icon/OL.png" alt=""></li>
          <li class="FFFF">ONLINE LIBRARY</li>
            <li><a href="dashboard.php">Home</a></li>
            <li><a href="display.php">My Book</a></li>
            <li><a href="feedback.php">feedback</a></li>
            <button  class="right"> <a href="login.php"> Log OUt</a></button>
        </ul>
    </nav>
 </header>
    <div class="container">
          <div class="card">
            <a href="mybook.php">
            <img  class="saf" src="utility/books/1.jpg" alt="Avatar" >
            <div class="ccontainer">
              <h4><b>Java</b></h4>
              <p>Computer science</p>
            </div>
          </a>
          </div>
          
          <div class="card">
            <a href="book2.php">
            <img class="saf" src="utility/books/2.jpg" alt="Avatar" >
            <div class="ccontainer">
              <h4><b>Java</b></h4>
              <p>COmputer Science</p>
            </div>
            </a>
          </div>
          <div class="card">
            <a href="book3.php">
            <img class="saf" src="utility/books/3.jpg" alt="Avatar" >
            <div class="ccontainer">
              <h4><b>Java</b></h4>
              <p>Computer Science</p>
            </div>
            </a>
          </div>
          <div class="card">
            <a href="book4.php">
            <img class="saf" src="utility/books/4.jpg"alt="Avatar" >
            <div class="ccontainer">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
            </a>
          </div>
          <div class="card">
            <a href="book4.php">
            <img class="saf" src="utility/books/4.jpg" alt="Avatar">
            <div class="ccontainer">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
            </a>
          </div>
          <div class="card">
            <a href="book5.php">
            <img class="saf" src="utility/books/6.jpg" alt="Avatar">
            <div class="ccontainer">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
            </a>
          </div>
          <div class="card">
            <a href="book6.php">
            <img class="saf" src="utility/books/3.jpg" alt="Avatar">
            <div class="ccontainer">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
            </a>
          </div>
          <div class="card">
            <a href="http://">
            <img class="saf" src="utility/books/1.jpg" alt="Avatar">
            <div class="ccontainer">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
            </a>
          </div>
          <div class="card">
            <a href="http://">
            <img class="saf" src="utility/books/2.jpg" alt="Avatar">
            <div class="ccontainer">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
            </a>
          </div>
          <div class="card">
            <a href="http://">
            <img class="saf" src="utility/books/1.jpg" alt="Avatar">
            <div class="ccontainer">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
            </a>
          </div>
          <div class="card">
            <a href="http://">
            <img class="saf" src="utility/books/4.jpg" alt="Avatar">
            <div class="ccontainer">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
            </a>
          </div>
          <div class="card">
            <a href="http://">
            <img class="saf" src="utility/books/4.jpg" alt="Avatar">
            <div class="ccontainer">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
            </a>
          </div>
    </div>
</body>
</html>