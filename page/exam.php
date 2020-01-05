<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exams</title>
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
                <a href="Profile.php" >
                  <span class="icon">
                    <i class="fas fa-home"></i></span>
                  <span class="list">Home</span>
                </a>
              </li>
              <li>
                <a href="tp.php" >
                  <span class="icon"><i class="fas fa-file"></i></span>
                  <span class="list">TPs</span>
                </a>
              </li>
              <li>
                <a href="exam.php" class="active" >
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
<div class="container  " style="  position: relative;  left:9%;   margin-top: 9%;top:auto;
    margin-right: auto;"  >
	
	
	

   
            
    
        
           <div class="panel panel-primary ">
            <div class="panel-heading" style="font-size: 20px;text-align: center;">
               Wolcome ! this your Exams papers <br><br>Listes of Exams paper <br><br><br>
            </div>
            
        
            <div class="panel-body">
             <table class="table table-striped table-bordered">
               <thead>
                   <tr>
                       <th>
                           Date
                       </th>
                       <th>
                           Category
                       </th>
                        <th class="text-center">
                           Dowlonad
                       </th>
                       
                       
                   </tr>
               </thead> 
               <tbody>
						<!--%
					
					     Statement st =null;
					     ResultSet res =null;
					     Connection con = Connect.connexionBD();
					     st=con.createStatement();
					     String query=request.getParameter("q");
					     String data;
					     if(query!=null)
					     {
					    	 data= "select * from cours where nom like '%"+query+"%' or branche like '%"+query+"%' or id_cor like '%"+Integer.parseInt(query)+"%' or type like '%"+query+"%' ";
					     }else
					     {
					    	 data= "select *from cours where branche='"+Login.q+"' order by id_cor ";
					     }
					     res=st.executeQuery(data);
					     while(res.next()){ %>
					<tr>
					  <td><%=res.getString("id_cor")%></td>
					  <td><%=res.getString("nom")%></td>
					 
					  <td><%=res.getString("typ")%></td>
					  <td class="text-center">
					        <a href="AfficheCours1.jsp?d=<%=res.getString("id_cor")%>" class="pe-7s-look" ></a>
					    
					       
					  </td>
					</tr>
					<% } %-->	
				</tbody>
             
             </table>
             
            </div>
         </div>
            </div>
</div>

</div>
</body>
</html>