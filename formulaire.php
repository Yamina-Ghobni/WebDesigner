<?php
require('insert.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site web</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
</head>
<body>
    <header id="header-wrapper">
        <div class="container" id="header">
            <div id="logo"> 
                <h1><a href="#">Assembly</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="#" class="active">HomePage</a></li>
                    <li><a href="#">Our Clients</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contacts Us</a></li>
                </ul>
            </div>
            <div id="banner">
                <div>
                <h2>Consectetuer adipiscing elit</h2>
                <span>Donec pulvinar ullamcorper metus</span>
             </div>
             <div>
                 <ul><li><a href="#">Start Now</a></li></ul>
             </div>
            </div>
        </div>
    </header>
    <section id="Three-box">
    <div class="container" >
        <div class="box">
            <h2>Feugiat lorem ipsum dolor sed veroeros</h2>
            <span>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
        </div>
        <div class="boxA">
            <p>Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc. Praesent pellentesque facilisis elit. Class aptent taciti 
                sociosqu ad torquent per conubia nostra nunc nunc.</p>
         <ul><li><a href="#" class="button">More Info</a></li></ul>
        </div>
        <div class="boxB">
            <p>Etiam neque. Vivamus consequat lorem at nisl. Nullam wisi a sem semper eleifend. Donec mattis. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis
                 lorem mauris quis nunc.</p>
         <ul><li><a href="#" class="button">More Info</a></li></ul>
        </div>
        <div class="boxC">
            <p>Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis 
                lorem mauris quis nunc.</p>
         <ul><li><a href="#" class="button">More Info</a></li></ul>
        </div>
    </div>
</section>
<section id="about">
    <div class="container">
        <div>
            <h2>Fusce ultrices fringilla metus</h2>
            <span>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
        </div>
        <div>
            <p>This is Assembly, a free, fully standards-compliant CSS template designed by TEMPLATED. The photos in this template are from Moi. This free template is released under the Creative Commons Attribution license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :)</p>
            <ul><li><a href="#">More Info</a></li></ul>
        </div>
    </div>
</section>
<section id="wrapper">
  <div class="container">
    <form method="POST" action="insert.php" class="form" >
        <h2>Formulaire d'inscription</h2>
        <fieldset>
            <legend>Information personnelles</legend>
            <span class="error">*Champ obligatoire</span><br>
            <label>Nom:</label><input type="text" name="nom" placeholder="Ex:Ben ahmed"><br>
            <span><?php echo $nomerror ?></span>
            <label>Prénom :</label><input type="text" name="prenom"><br>
            <label>Genre:</label>
            <input type="radio" name="genre" value="Femme"><label>Femme</label>
           <input type="radio" name="genre" value="Homme"><label>Homme</label><br>
           <label>Date de naissance</label><input type="date" name="datenais"><br>
           <label>Adresse mail:</label><input type="email" name="email"><br>
           <label>Télephone portable :</label><input type="tel" name="tel"><br>
        </fieldset>
        <fieldset>
            <legend>Informations professionnelles</legend>
            <label>Niveau universitaire:</label>
            <input type="text" name="niveau"><br>
            <label>Connaissances :</label>
            <input type="checkbox" name=choix[] value="HTML"><label>html</label>
            <input type="checkbox" name=choix[] value="CSS"><label>CSS</label>
            <input type="checkbox" name=choix[] value="Javascript"><label>Javascript</label>
            <input type="checkbox" name=choix[] value="PHP"><label>PHP</label>
        </fieldset>
        <input type="submit" name="envoyer" value="Envoyer">
        <input type="reset" name="annuler" value="Annuler">
    </form>
    <div id="contact">
        <h2>Contactez-nous</h2>
        <p>Tél: +21624123456</p>
        <p>E-mail:polytechniquesousse@gmail.com</p>
        <p>Adresse:Sousse</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3234.9267271449635!2d10.586691714750428!3d35.82627342961213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd8b3a0237010f%3A0x4418fc1f1a3cb73f!2sPolytechnique%20Sousse!5e0!3m2!1sfr!2stn!4v1637777902401!5m2!1sfr!2stn" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
       </div>
    </div>
</section>
    <footer id="footer"> 
        <p>© Untitled. All rights reserved. | Photos by <a href="#">Moi</a> | Design by <a href="#">Moi</a> aussi.</p>

    </footer>
</body>
</html>
