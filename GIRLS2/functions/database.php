<?php
try{
    
        $db_client = new PDO('mysql:host=localhost;dbname=Jmd','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $db_client->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Affichage détaillé des exeptions
        $db_client->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);//Fonctionnement en mode objet

    }catch (PDOException $e) {
        print "Erreur de connexion à la base de données !<br>" . $e->getMessage() . "<br/>";
        die();
    }


?>