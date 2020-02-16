<!DOCTYPE html>
<html>
        <head>

                <title>Site CV</title>

                <meta charset="UTF-8">

                <meta name="viewport" content="width=device-width, initial-scale=1"/>

                <link href="assets\css\admin.css" rel="stylesheet">

                <script src="assets\js\admin.js" type="text/javascript"></script>

        </head>

        <body>
                <header></header>
                <main>
                        <section class="container row jc-center pa-top5">

                                <?php require ('assets\php\add_project.php') ?>

                                <form action="assets\php\add_project.php" method="POST" name="addProject" class="container column wrap w80 pa-top5 ai-center bg-blue" enctype="multipart/form-data">

                                        <label for="nom_client" class="c-gray">Nom du client:</label>
                                        <input type="text" name="nom_client" class="h8 w50 ma-bottom border0 c-white bg-black">

                                        <label for="nom_projet" class="c-gray">Nom du projet:</label>
                                        <input type="text" name="nom_projet" class="h8 w50 ma-bottom border0 c-white bg-black">

                                        <label for="description_projet" class="c-gray">Description du projet:</label>
                                        <input type="text" name="description_projet" class="h8 w50 ma-bottom border0 c-white bg-black">

                                        <label for="photo_projet" class="c-gray">Photo du projet:</label>
                                        <input type="text" name="photo_projet" class="h8 w50 ma-bottom border0 c-white bg-black">

                                        <input type="submit" value="Add project" class="h8 w15 ma-bottom border0 bg-darkblue pointer ft-size" onclick="AddProject();">

                                </form>

                        </section>

                </main>
                <footer></footer>
        </body>

</html>