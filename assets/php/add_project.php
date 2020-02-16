<?php
 
        try
        {
                $bdd = new PDO('mysql:host=localhost:3307;dbname=portfolio;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }

        if(count($_POST)>0) {

                $nomClient = $_POST["nom_client"];
                $nomProjet = $_POST["nom_projet"];
                $description = $_POST["description_projet"];
                $photo = $_POST["photo_projet"];

                $req = $bdd->prepare('INSERT INTO projets (nom_client, nom_projet, description_projet, photo_projet) VALUES(?, ?, ?, ?)');
                $req->execute(array($nomClient, $nomProjet, $description, $photo));

        }
        
?>