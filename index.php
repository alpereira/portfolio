<!DOCTYPE html>
<html>
        <head>

                <title>Site CV</title>

                <meta charset="UTF-8">

                <meta name="viewport" content="width=device-width, initial-scale=1"/>

                <link href="assets\css\main.css" rel="stylesheet">
    
                <script src="assets\js\index.js" type="text/javascript"></script>

        </head>


    
        <body>

                <header class="container row wrap ai-center jc-around fixed h8 w100 bg-black">

                        <div class="brand">
                                <a href="#accueil"><p>Alexandre Pereira</p></a>
                        </div>

                        <nav class="toggle-wrapper">

                                <div class= "toggle-button">
                                        <input type="button" value="Menu" id="open-button" onclick="ToggleMenu();">
                                </div>
                                
                                <div class="toggle-menu" id = "toggle-menu">
                                        <ul>
                                                <a href="#profil"><li>Profil</li></a>
                                                <a href="#compétences"><li>Compétences</li></a>
                                                <a href="#portfolio"><li>Portfolio</li></a>
                                                <a href="#contacts"><li>Contact</li></a>
                                        </ul>        
                                </div>
                        </nav>
                </header>

                <main>
                        <section id = "accueil" class="container column wrap ai-center jc-center min-h100 w100">

                                <h1 class="w100 txt-center text-focus-in">ALEXANDRE PEREIRA</h1>
                                
                                <div class="button">

                                        <a href="#profil"><img src="assets\img\various\down-arrow.png" class="w8 h8"></a>
                                
                                </div>
                        
                        </section>

                        <section id = "profil" class="container row wrap ai-center jc-around min-h60 w100 bg-gray">

                                <h2 class="w100 txt-center pa-top40">Présentation</h2>

                                <img class="h50 w20 slide-in-left pa-bottom" src="assets\img\various\photo-profil.jpg" alt="">
                                
                                <div class="w70 slide-in-right">
                                        
                                        <p class="padding">Bienvenue,
                                                Je m'appelle Alexandre, je suis un web développeur junior et me passionne 
                                                pour le développement front-end.Cependant, je porte aussi un intérêt à 
                                                développer des applications back-end.
                                                <br><br>
                                                Je suis depuis toujours passionné par l’outil informatique,
                                                souvent en recherche sur mon ordinateur et en veille technologique.
                                                <br><br>
                                                Je suis capable d'utiliser différentes technologies comme HTML5 & CSS3 et 
                                                JavaScript. Vous trouverez sur mon site des projets réalisés 
                                                durant mes études.
                                        </p>
                                </div>
                
                        </section>

                        <section id="compétences" class="min-h100 w100 container row wrap ai-center jc-around bg-lightblue">

                                <h2 class="w100 txt-center pa-top40"> Mes Compétences</h2>
                                
                                <section class=" h50 w33 container wrap ai-center jc-around pa-top5">

                                        <img class="fit-logo h20 w10" src="assets\img\logos\logo-HTML.png" alt="">
                                        
                                        <p class="padding txt-center">Je suis capable de structurer et donner sens 
                                                au contenu web. 
                                                Par exemple : définir des paragraphes, en-têtes et tables de données 
                                                ou intégrer des images ou des vidéos.
                                        </p>

                                </section>

                                <section class=" h50 w33 container wrap ai-center jc-around pa-top5">

                                        <img class="fit-logo h20 w10" src="assets\img\logos\logo-CSS.png" alt="">
                                        
                                        <p class="padding txt-center">Je peux appliquer un style au contenu HTML. 
                                                Par exemple : en modifiant la couleur d’arrière-plan ou les polices, 
                                                ou en disposant le contenu en plusieurs colonnes.
                                        </p>

                                </section> 
                                
                                <section class=" h50 w33 container wrap ai-center jc-around pa-top5">

                                        <img class="fit-logo h20 w10" src="assets\img\logos\logo-JS.png" alt="">
                                        
                                        <p class="padding txt-center">Il met possible de créer du contenu mis à jour 
                                                de façon dynamique, de contrôler le contenu multimédia, 
                                                d’animer des images, à peu près tout.
                                        </p>

                                </section>

                                <section class=" h50 w50 container wrap ai-center jc-around pa-top5">

                                        <img class="fit-picture h20 w10" src="assets\img\logos\logo-Opquast.png" alt="">
                                        
                                        <p class="padding txt-center">Opquast évoque les connaissances globales 
                                                des bonnes pratiques du web, le vocabulaire technique, 
                                                les connaissances des étapes d’un projet web, 
                                                mais aussi les risques auxquels peuvent être confrontés 
                                                les différents métiers.
                                        </p>

                                </section>

                                <section class="h50 w50 container wrap ai-center jc-around pa-top5">

                                        <img class="fit-picture h20 w10" src="assets\img\logos\logo-agile.png" alt="">
                                        
                                        <p class="padding txt-center">Une méthode Agile est 
                                                une approche itérative et collaborative, capable de prendre en compte 
                                                les besoins initiaux du client et ceux liés aux évolutions.
                                        </p>

                                </section>
                                
                        </section>

                        <section id = "portfolio" class="container row wrap ai-center jc-around min-h100 w100 bg-darkgray">

                                <h2 class="w100 txt-center c-white pa-top40">Mes Réalisations</h2>
                                
                                <?php require ('assets\php\show_projects.php') ?>

                        </section>

                        <section id = "contacts" class="min-h90 w100 container row wrap ai-center jc-around bg-blue">

                                <h2 class="w100 txt-center c-white">Me Contacter</h2>  

                                <?php require ('assets\php\send_contact.php') ?>   

                                <form method="POST" name="form" class="container row wrap w100 jc-center" enctype="multipart/form-data">

                                        <div class="h50 w50 container column ai-center">

                                                <input type="text" name="name" class="h8 w25 ma-bottom border0 c-white bg-black" placeholder="Votre nom">

                                                <input type="text" name="company" class="h8 w25 ma-bottom border0 c-white bg-black" placeholder="Votre entreprise">

                                                <input type="text" name="phone" class="h8 w25 ma-bottom border0 c-white bg-black" placeholder="Votre numéro de téléphone">

                                        </div>

                                        <div class="container column ai-center w50">

                                                <textarea name="message" placeholder="Message" class="h40 w40 border0 c-white bg-black"></textarea>

                                        </div>

                                        <div class="submit">

                                                <input type="submit" value="Submit" class="h8 w8 border0 bg-darkblue pointer" onclick="Submit();">
                                                        
                                        </div>

                                </form>

                        </section>
                </main>

                <footer class="h8 w100 txt-center">
                        <p>Copyright Alexandre Pereira-Tous droits réservés</p>
                </footer>

        </body>

</html>
