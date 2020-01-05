
<?php

   require_once('connection.php');

	
	$nom=$_POST['mat'];
	$niveau=$_POST['chap'];	
	$niveau2=$_POST['qu'];
    $niv=$_POST['def'];
    $ni3=$_POST['exercices'];
	$requete="insert into exrecice(mat,chap,qu,def, exercices) values(?,?,?,?,?)";	
			
	$param=array($nom,$niveau,$niveau2, $niv, $ni3);	
	
	$resultat =$pdo->prepare($requete);
	
	$resultat->execute($param);	
		
	header("location:tp.php");
?>