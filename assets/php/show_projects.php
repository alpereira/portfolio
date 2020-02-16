<?php
        try
        {
                $bdd = new PDO('mysql:host=localhost:3307;dbname=portfolio;charset=utf8', 'root', '');
                $reponse = $bdd->query('SELECT * FROM projets');
                
                while ($projet = $reponse->fetch()) {
                        
                        
                        echo ('<div class="h60 w50 container wrap jc-center pa-top5 pa-bottom">'.
                                '<p class="w50 txt-center c-white ft-size">'.$projet['nom_projet'].'</p>'.
                                '<img class="w25 h40" src="'.$projet['photo_projet'].'" alt="'.$projet['photo_projet'].'">'.
                                '<p class="txt-center c-white w100">'.$projet['description_projet'].'<br>'.'<br>'.
                                $projet['nom_client'].'</p>'.
                        '</div>');
                }
                        
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
?>