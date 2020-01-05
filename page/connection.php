<?php 
try{
      $pdo = new PDO("mysql:host=localhost:3308;dbname=generator_cv","root","");
}
 catch(Exception $e)
 {
     die('Erreur de Connexion :'.$e->getMessage());
 }
   
?>