<?php 
 require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <link rel="stylesheet" href="../css/interface1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".hamburger").click(function(){
        $(".wrapper").toggleClass("active")
      })
    });
  </script>
</head>
<body >

<section class="wrapper">
 
  <div class="top_navbar">
    <div class="logo">
      <a href="#">Exam/Tp Generator</a>
    </div>
    <div class="top_menu">
      
      <div class="right_info">
        <div class="icon_wrap">
          <div class="icon">
            <i class="fas fa-bell"></i>
          </div>
        </div>
        <div class="icon_wrap">
          <div class="icon">
            <i class="fas fa-cog"></i>
          </div>
        </div>
        <div class="icon_wrap">
          <div class="icon">
            <i class="fas fa-envelope"></i>
          </div>
        </div>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar" >
   
    <!-list of header--->
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav ml-auto">
        <li  class="nav-item">
          <a class=" nav-link" href="#">HOME</a>
        </li>
        <li  class="nav-item">
          <a class=" nav-link" href="services">ABOUT US</a>
        </li>
        <li  class="nav-item">
          <a class="nav-link" href="Form">SERVICES</a>
        </li>
        <li  class="nav-item">
          <a class="nav-link" href="Form">TEAM</a>
        </li>
      </div>
    </div>
  </nav>
      </div>
          </div>
       <div class="container" style="text-align: center;margin-top: 100px; margin-right:  75px;">
                <div class="row">
                  <div class="col-md-12" >
                    <p class="promo-title"> WELCOME To Your </P>
                    <p>TP/EXAM Generator </p>
    
                     <br>
                     <a class="btn btn-primary" href="Exercices.php" role="button">ADD Exercices</a>
                    <a class="btn btn-second" href="Exercices.html" role="button">Generator New Question Paper</a>
                </div>   
       
        </div>

  </div>

  <div class="main_body">
    
    <div class="sidebar_menu">
          <div class="inner__sidebar_menu">
            <div class="center">
              <img src="../img/undraw_female_avatar_l3ey.png" />
            </div><br>
            <h2 style="text-align:center;">Hello</h2><br>
              
            <ul>
              
              <li>
                <a href="#" class="active" >
                  <span class="icon">
                    <i class="fas fa-home"></i></span>
                  <span class="list">Home</span>
                </a>
              </li>
              <li>
                <a href="tp.php" >
                  <span class="icon"><i class="fas fa-file"></i></span>
                  <span class="list" >TPs</span>
                </a>
              </li>
              <li>
                <a href="exam.php">
                  <span class="icon"><i class="fas fa-pen"></i></span>
                  <span class="list">Examen</span>
                </a>
              </li>
            
              <li>
                <a href="../page/login-form/LoginForm.php">
                  <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                  <span class="list">Sign Out</span>
                </a>
              </li>
             
            </ul>

            <div class="hamburger">
              <div class="inner_hamburger">
                  <span class="arrow">
                      <i class="fas fa-long-arrow-alt-left"></i>
                      <i class="fas fa-long-arrow-alt-right"></i>
                  </span>
              </div>
          </div>

          </div>
      </div>
    
      <section class="container toto " style="column-gap: 100px; float: left;margin-bottom:70px;margin-left: 350px;">
                   <h1 style="text-align: center;margin-right: 180px;">My Questions Paper</h1><br>
        <div class=" item_wrap " >
          
             

              
              
              <div class=" col-md-4 item" >
                <header>
                  <a href="tp.php" ><i class="fas fa-folder-open" style="color: #000;"></i></a>
                  <h3>TP</h3>
                </header>
                <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
               </div>
              <div class=" col-md-4 item" style="margin-left: 40px;" >
                <header>
                  <a href="exam.php" ><i class="fas fa-folder-open" style="color: #000;"></i></a>
                  <h3>Examen</h3>
                </header>
                <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
               </div>
           </div>
            </div>
        </div>
      
   

     

  </section>

</section>
  
</body>
</html>