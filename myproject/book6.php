<!DOCTYPE html>
<html lang="en">
<head>
    <style>
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
.ssss{
  width: 50px;
}


        *{
  margin: 0;
  padding: 0;
  font-family: "Open Sans",sans-serif;
  box-sizing: border-box;
}

body{
  background: #7ed6df;
  transition: 0.6s linear;
}

.product-card{
box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  width: 400px;
  background: #ecedef;
  padding: 40px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  text-transform: uppercase;
  border-radius: 20px;
}
.product-card h1{
  font-size: 22px;
  margin-bottom: 4px;
}
.product-card p{
  font-size: 13px;
  color: #bbb;
}
.product-pic{
    display: flex;
    /* align-items: center; */
    justify-content: center;
  background-image: url(1.png);
  width: 100%;
  height: 200px;
  background-size: cover;
  background-position: center;
  transition: .6s linear;
}
.product-colors{
  margin-bottom: 40px;
  display: flex;
  justify-content: center;
}

.product-colors span{
  width: 14px;
  height: 14px;
  margin: 0 10px;
  border-radius: 50%;
  cursor: pointer;
  position: relative;
}
.blue{
  background: #7ed6df;
}
.green{
  background: #badc58;
}
.yellow{
  background: #f9ca24;
}
.rose{
  background: #ff7979;
}

.product-colors .active:after{
  content: "";
  width: 22px;
  height: 22px;
  border: 2px solid #8888;
  position: absolute;
  border-radius: 50%;
  box-sizing: border-box;
  left: -4px;
  top: -4px;
}
.product-info{
  display: flex;
  align-items: center;
}
.product-price{
  color: #7ed6df;
  font-size: 26px;
}
.product-button{
  margin-left: auto;
  color: #7ed6df;
  text-decoration: none;
  border: 2px solid;
  padding: 8px 24px;
  border-radius: 20px;
  transition: .4s linear;
}

.product-button:hover{
  transform: scale(1.06);
}
.dsa{
    width: 55%;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
   
        <nav>
            
            <ul class="nav_links">
              <li><img class="ssss" src="utility/icon/OL.png" alt=""></li>
              <li class="FFFF">ONLINE LIBRARY</li>
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="mybook.php">My Book</a></li>
                <li><a href="feedback.php">feedback</a></li>
            </ul>
        </nav>
     </header>
    <div class="bd">

   
    <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Product Page - FantacyDesigns</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script> -->
  </head>
  <body>
  
    <div class="product-card">
      <h1>java</h1>
      <p> Abhishek Prasoon</p>
      <div class="product-pic">
        <img class="dsa" src="utility/books/6.jpg" alt="">
      </div>
      <!-- -->
      <div class="product-info">
        <!-- <div class="product-price">$90</div> -->
        <a href="#" class="product-button">take now</a>
        
      </div>
    </div>

    <!-- <script>
      $(".product-colors span").click(function(){
        $(".product-colors span").removeClass("active");
        $(this).addClass("active");
        $("body").css("background",$(this).attr("data-color"));
        $(".product-price").css("color",$(this).attr("data-color"));
        $(".product-button").css("color",$(this).attr("data-color"));
        $(".product-pic").css("background-image",$(this).attr("data-pic"));
      });
    </script> -->

</div>
  </body>
</html>
</body>
</html>