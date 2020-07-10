<?php


function connexionBase()
{
        /*
   // Paramètre de connexion serveur
   $host = "localhost";
   $login= "root";  // Votre loggin d'accès au serveur de BDD 
   $password="";    // Le Password pour vous identifier auprès du serveur
   $base = "jarditou";  // La bdd avec laquelle vous voulez travailler 
   $db = new PDO('mysql:host=' .$host. ';charset=utf8;dbname=' .$base'; port=3308', $login, $password);
   */

   try 

        {
// Connexion au serveur MySql via la variable $db
                $db = new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou;port=3308', 'root', '');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
        } 
        
    catch (Exception $e) 

        {
                echo 'Erreur : ' . $e->getMessage() . '<br>';
                echo 'N° : ' . $e->getCode() . '<br>';
                die('Connexion au serveur impossible.');
        } 
}


?>



