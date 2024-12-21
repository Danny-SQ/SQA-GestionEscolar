<?php
try{
$conn = new PDO('mysql:host=localhost; dbname=gestionescolar', 'root', '');
} catch(PDOException $e){
   echo "Error: ". $e->getMessage();
   die();
}
?>