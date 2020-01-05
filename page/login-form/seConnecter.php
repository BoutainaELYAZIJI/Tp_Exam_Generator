<?php
   require_once('connection.php');
	session_start();
	
	$LOGIN=$_POST['nom'];
	$PWD=$_POST['password'];
	

	$requete="select *from user where nom=? and password=?";
		
	$param=array($LOGIN,$PWD);	
	$resultat = $pdo->prepare($requete);		
	$resultat->execute($param);	
	
	if($user=$resultat->fetch()){
		
				header("Location:../page/Profile.php");}
   else
    {
         header("Location:../LoginForm.php");
    } 
	?>