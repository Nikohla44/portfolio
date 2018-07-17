<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no"/>
        <title>Page d'accueil</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">

        <!-- LINK -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300" rel="stylesheet">


    </head>

    <body>

        <?php
            include 'menu.php';
        ?>

        <div class="container">

            <div class="profileBox element">
                <img src="images/moi.jpg" class="photoProfile" alt="Ma photo">
                <h1>Nicolas Le Mellec</h1>
                <h2>Developpeur Web Junior</h2>
                <div class="line-break"></div>
                    <p>Jeune développeur mordu de code, je suis en pleine progression et j'acquiers de nouvelles compétences chaque jour suite à la formation "développeur web", labellisée "Grande école du Numérique", effectuée au centre Arinfo de la Roche sur Yon.</p>
                <div class="social-icons">
                        <a href="https://twitter.com/Nikoh_la" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/nicolas-le-mellec-943838147/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/Nikohla44" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://m.me/nicolas.lemellec" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                </div>

        </div>

        <?php
            include 'footer.php';
        ?>

    </body>

</html>
