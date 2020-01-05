<?php 
 require_once("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exercices</title>
 <link rel="stylesheet" href="../css/interface1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>>
  <script>
    $(document).ready(function(){
      $(".hamburger").click(function(){
        $(".wrapper").toggleClass("active")
      })
    });
    $(document).ready(function(){
    $("#Exercices").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".cours").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".cours").hide();
            }
        });
    }).change();
    var i=0;
     $("span.iconm").click(function(){
        
        $("div.idm").before('<div class="id"><label>'+i+' :</lablel> <input  class="form-control"style="width:250px"type="text" placeholder="Saisir réponse ici ..."><div>');
       
     i++;
    });

     var v=2;
     var j=0;
     var t=j.toString();
    $("span.iconk").click(function(){
        
        $("div.1").before('<span class="list">Question '+v+'</span> <input class="form-control" style="width:250px"type="text" placeholder="Saisire question içi ..."> <div class="id"><label>Reponse</label> <div class="m'+j+'"> <span class="icon'+t+'" style="left:15%;text-align: center;"><i class="fas fa-plus"></i> Add reponse</span> </div></div>');
   
     v++;
     j++;
    });
    
     var m=0;
     $("span.icon0").click(function(){

        
        $("div.m0").before('<div class="id"><label>'+m+' :</lablel> <input  class="form-control"style="width:250px"type="text" placeholder="Saisir réponse ici ..."><div>');
       
     m++;
    });
    });
  
  </script>
</head>
<body >

<section class="wrapper">
 
  <div class="top_navbar">
    <div class="logo">
      <a href="#">Generator Tp</a>
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
        <li  class="nav-item">
          <a class=" nav-link" href="#">CONTACT </a>
        </li>
      </ul>
      </div>

  </nav>
      </div>
          </div>
       
      

  </div>

  <div class="main_body">
    
    <div class="sidebar_menu">
          <div class="inner__sidebar_menu">
            <div class="center">
              <img src="../img/undraw_female_avatar_l3ey.png"  />
            </div><br>
            <h2 style="text-align:center;">Hello</h2><br>
              
            <ul>
              
              <li>
                <a href="Profile.php"  >
                  <span class="icon">
                    <i class="fas fa-home"></i></span>
                  <span class="list">Home</span>
                </a>
              </li>
              <li>
                <a href="Exercices.php" class="active" >
                  <span class="icon"><i class="fas fa-file"></i></span>
                  <span class="list">TPs</span>
                </a>
              </li>
              <li>
                <a href="exam.php">
                  <span class="icon"><i class="fas fa-pen"></i></span>
                  <span class="list">Exams</span>
                </a>
              </li>
              <li>
            
                <a href="#">
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
   </div>
</section>

       <section class="container toto " >
          <h2 style="text-align: center; color: #000 ;margin-top:100px;">ADD New Exercices. </h1><br>
       <form style="  position: relative;  left: 15%;font-size: 18px;"  method="post" action ="insertnewExercices.php">
          
       
         <h4>Info</h4>
      
      
      
       <div class="form-group col-md-4 align-items-center">
         <span class="list">Matiere</span>
         <span class="icon" style="float:right;"><i class="fas fa-plus"></i></span>
         
            <select id="inputState" class="form-control" name="mat">
            <option selected value="java">Java.</option>
            <option>Php</option>
            </select>
          
      </div> 
         <div class="form-group col-md-4 align-items-center">
         <span class="list">Chapiter</span>
         <span class="icon" style="float:right;"><i class="fas fa-plus"></i></span>
         
            <select id="inputState" class="form-control" name="chap">
            <option selected value="table">Table.</option>
            <option>Collection</option>
            </select>
          
      </div> 
         <div class="form-group col-md-4 align-items-center">
         <span class="list">Type of question </span>
       
         
            <select id="Exercices" class="form-control" name="qu">
            <option >Choose of type</option>
            <option  value="qcm">QCM</option>
            <option selected value="text">Question Subject</option>
            </select>
          
      </div> 
      <div class="form-group col-md-4 align-items-center">
         <span class="list">Diffuclty level </span>
       
         
            <select id="inputState" class="form-control" name="def">
            <option selected value="esay">easy</option>
            <option>Medieum</option>
            <option>Diffuclt</option>
          </select>
      </div>
      <div class=" item_wrap " >
         <h4>Exercices</h4>
            <div id="qcm" class="cours qcm" > 
              <div class="form-group">
               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="float:left;width: 500px;" name="exercices">
                 Saisir le text de Votre Exercices ....
               </textarea>
              </div>
            </div>
            <div id="text" class="cours text" >
             <form class="form-group" style="margin:10%;">
              <div class="form-group col-md-4 align-items-center">
               <span class="list">Question 1</span>
               <input class="form-control" style="width:250px"type="text" placeholder="Saisire question içi ...">
               <div class="id">
                <label>Reponse</label>
                <div class="idm">
                <span class="iconm" style="left:15%;text-align: center;"><i class="fas fa-plus"></i> Add reponse</span>
               
                </div>
              </div>
            </div>
             <div class="form-group col-md-4 align-items-center">
               <div class="1"></div>
              <span class="iconk" style="left:15%;text-align: center;"><i class="fas fa-plus"></i> Add Question</span>
            </div>
             </form>
            
           </div>
     
        <p></p><br>
      <div class="form-group" style="text-align: center;">
      
      
      </div>
          <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
           
        </form>
      
   

     


  </section>

</body>

</html>
