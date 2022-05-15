<?php
session_start();
?>

<html>

  <head>
    <title> Home | The Yellow Tree Cafe </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

  <body>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <img src="images/arrow.png" alt="">
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

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search navbar-dark bg-dark" role="navigation" style="background-color: #5a342e;">
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
            <li class="active"><a href="index.php" style="background-color: white; color: #c83535;">Home</a></li>
            <li><a href="aboutus.php" style="color: #fff;">About</a></li>
            <li><a href="contactus.php" style="color: #fff;">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" ><span class=""></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php" style="color: #fff;"><span class=""></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color: white;"><span class=""></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php" style="color: white;"><span class=""></span> Food Zone </a></li>
            <li><a href="cart.php" style="color: white;"><span class=""></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php" style="color: white;"><span class=""></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="customersignup.php" class="active" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff;"><span class=""></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="customerlogin.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff;"><span class=""></span> Login <span class="caret"></span></a>
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
  <div class="frontpage" style="background: url('https://wallpaperaccess.com/full/373982.jpg') no-repeat; background-size: 100%; height: 100vh;">
    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="https://pbs.twimg.com/profile_images/2260128600/logo_sticker.jpg"></div>
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline" style="color: #84654e; margin-top: 50px;">Another day, another cup of coffee</div>
    </div>
    <br>
    <div class="orderblock">
    <h2 style="color: #84654e; margin-top: 40px;">Feeling Hungry?</h2>
    <center><a class="btn btn-warning btn-lg" href="customerlogin.php" role="button"  > Order Now </a></center>
    </div>
    </div>
    
  
</body>
</html>