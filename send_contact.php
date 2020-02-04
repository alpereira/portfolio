<?php
 
        try
        {
                $bdd = new PDO('mysql:host=localhost:3307;dbname=portfolio;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }

        $name = $_POST["name"];
        $company = $_POST["company"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];

        $req = $bdd->prepare('INSERT INTO contact (name, company, phone, message) VALUES(?, ?, ?, ?)');
        $req->execute(array($name, $company, $phone, $message));
        
        header('Location: index.php');

?>