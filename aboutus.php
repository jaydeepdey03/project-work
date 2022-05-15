<?php
session_start();
?>

<html>

  <head>
    <title> About | The Yellow Tree Cafe </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="background-color: orange;">
    <img src="images/arrow.png" alt="" >
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation" style="background-color: #5a342e;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="color: white;">The Yellow Tree Cafe</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
          <li class="active"><a href="index.php" style="background-color: #5a342e; color: #fff;">Home</a></li>
            <li><a href="aboutus.php" style="color: #fff;">About</a></li>
            <li><a href="contactus.php" style="color: #fff;">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color: #fff;"><span class=""></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php" style="color: #fff;">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php" style="color: #fff;"><span class=""></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color: #fff;"><span class=""></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php" style="color: #fff;"><span class=""></span> Food Zone </a></li>
            <li><a href="cart.php" style="color: #fff;"><span class=""></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php" style="color: #fff;"><span class=""></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color: #fff;" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class=""></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
            </ul>
            </li>

            <li><a href="#" style="color: #fff;" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class=""></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

    <div class="content">
      <div class="posts" style="display: flex; justify-content: space-around; margin: 50px; align-items: center; padding-bottom: 50px">
        <p style="font-size: 30px; font-family: 'Roboto Slab', serif;">Our coffee masters have distilled their years of tasting knowledge down to three simple questions to help you find a The Yellow Tree Cafe you’re sure to love.</p>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRddAPRdVlmcO9rm-IU5TeeKsGaZ374Dyim7g&usqp=CAU" alt="">
      </div>
      <div class="posts" style="display: flex; justify-content: space-around; margin: 50px; align-items: center; padding-bottom: 50px;">
        <img src="https://i.pinimg.com/originals/e5/73/07/e5730782da18ae8385ff7702e9bb4f1c.jpg" style="height: 300px; width: 300px;" alt="">
        <p style="font-size: 30px; font-family: 'Roboto Slab', serif;">We are not only a place to drop in and get your morning cup of coffee (although you are more than welcome to do that), we are a place where you can sit down and enjoy that tailor-made cup of coffee. If you need to work, we have a seating area created specifically for you</p>
      </div>
      
      <div class="footer" style="text-align: center;"><strong style="margin: 40px; padding: 40px; font-size: 30px">We look forward to serving you at The Yellow Tree Cafe</strong></div>
    </div>

         </body>
</html>