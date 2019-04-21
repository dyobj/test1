<?php
 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=masterrt', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM users WHERE login=\''.$_GET["login"].'\'and password=\''.$_GET["password"].'\'');
$error=1;
while ($donnees = $reponse->fetch())
{
        //redirection
        // partie
  header('location:ok.html');
 $error=0;
}
if ($error==1) 
{ header('location:index2.php?error=1');}
$reponse->closeCursor();

?>