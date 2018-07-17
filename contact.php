<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

    <!-- LINK -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300" rel="stylesheet">

</head>

<body>

    <?php
        include 'menu.php';
    ?>

    <div class="container">

        <div class="title">
            <h1>CONTACTEZ-MOI</h1>
        </div>

            <form id="contact-form" method="post" action="contact-envoi.php" role="form">
                
                <div class="form-row">
                    <div class="formElement">
                        <label for="firstname">Prénom<span class="star"> *</span></label>
                        <input class="form-control" id="firstname" type="text" name="firstname" placeholder="Votre prénom" value="">
                        <p class="comments"></p>
                    </div>

                    <div class="formElement">
                        <label for="name">Nom<span class="star"> *</span></label>
                        <input class="form-control" id="name" type="text" name="name" placeholder="Votre nom" value="">
                        <p class="comments"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="formElement">
                        <label for="email">Email<span class="star"> *</span></label>
                        <input class="form-control" id="email" type="email" name="email" placeholder="Votre email" value="">
                        <p class="comments"></p>
                    </div>

                    <div class="formElement">
                        <label for="phone">Téléphone</label>
                        <input class="form-control" id="phone" type="tel" name="phone" placeholder="Votre téléphone" value="">
                        <p class="comments"></p>
                    </div>
                </div>

                <div class="formElement message">
                    <label for="message">Message<span class="star"> *</span></label>
                    <textarea id="message" class="form-control" name="message" placeholder="Votre message"></textarea>
                    <p class="comments"></p>
                </div>

            
                <p class="star"><strong>* Ces informations sont requises</strong></p>
                       
                <input type="submit" class="button1" value="Envoyer">

            </form>
        
    </div>

    <?php
       include 'footer.php';
    ?>



    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    
</body>

</html>