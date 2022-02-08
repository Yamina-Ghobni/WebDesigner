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
    <section id="wrapper">
  <div class="container">
<?php
$servername="127.0.0.1";
$username="root";
$password="";
$data="polytec1";
//Etape 1
//création de connexion 
$conn= new mysqli($servername,$username,$password,$data);

//test de connexion
if($conn->connect_error){
die("Connection failed :".$conn->connect_error);
}
//Etape 2
//Récuperer les valeurs entrèes par l'utilisateur
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$genre=$_POST['genre'];
$datenais=$_POST['datenais'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$niveau=$_POST['niveau'];
$insert="";


if($_POST['choix']){
    foreach ($_POST['choix'] as $choix)
    $insert.="$choix +";
}
$nom=$email="";
$nomerror=$emailerror="";
if(isset($_POST['envoyer'])){
if($_SERVER["REQUEST_METHOD"]=="POST"){
     if(empty($nom)){
         $nomerror="Nom est obligatoire";
     }else {
         # code...
   

// création de la requête 

    $sql='INSERt INTO etudiants VALUES("","'.$nom.'","'.$prenom.'",
    "'.$genre.'","'.$datenais.'","'.$email.'","'.$tel.'",
    "'.$niveau.'","'.$insert.'")';

    if($conn->query($sql)===TRUE){
        echo"nouvel enregistrement créé avec succés";
    }else{
        echo"Erreur :".$sql."<br>".$conn->error;
    }
    $conn->close();

}

}
}


?>
</div>
</section>
<footer id="footer"> 
<p>© Untitled. All rights reserved. | Photos by <a href="#">Moi</a> | Design by <a href="#">Moi</a> aussi.</p>

</footer>
</body>
</html>


