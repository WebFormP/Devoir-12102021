<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Comme le titre de la page est chaque fois différent,
        il est nécessaire de connaître le nom du fichier demandé pour
        savoir quel texte afficher dans la balise TITLE.
        La variable $_SERVER['PHP_SELF'] permet de connaître le fichier lu actuellement
        La fonction PHP basename() permet d'extraire le nom du fichier
        -->
        <?php
            $title="";  /* cette variable contient le texte à placer dans <title> */
            switch(basename($_SERVER['PHP_SELF'])) {
                case "index.php" : $title = "Bruxelles - Accueil"; break;
                case "geographie.php" : $title = "Bruxelles - Géographie"; break;
                case "histoire.php" : $title = "Bruxelles - Histoire"; break;
                case "culture.php" : $title = "Bruxelles - Culture"; break;
                case "galerie.php" : $title = "Bruxelles - Galerie"; break;
                case "contact.php" : $title = "Bruxelles - Contact"; break;
                case "liens.php" : $title = "Bruxelles - Liens"; break;
                default : $title = "Bruxelles";
            }
            echo "<title>".$title."</title>";
        ?>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Styles de base -->
        <link rel="stylesheet" type="text/css" href="style.css" />
        <!-- Styles spécifiques pour le menu hamburger -->
        <link href="menu.css" type="text/css" rel="stylesheet" />
        <!-- 1. Lien vers la CSS du module LightBox 
        A ajouter dans chacune des pages qui utilisent LightBox
        -->
        <link href="lightbox/css/lightbox.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="global">
            <header>
                <h1>Bruxelles</h1>
            </header>
            <nav id="menu">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="geographie.php">Géographie</a></li>
                    <li><a href="histoire.php">Histoire</a></li>
                    <li><a href="culture.php">Culture</a></li>
                    <li><a href="galerie.php">Galerie</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="liens.php">Liens</a></li>
                </ul>
            </nav>
            <!-- menu spécifique pour les écrans < 800px -->
            <nav class="menu_hamburger" onclick="toggle();">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="geographie.php">Géographie</a></li>
                    <li><a href="histoire.php">Histoire</a></li>
                    <li><a href="culture.php">Culture</a></li>
                    <li><a href="galerie.php">Galerie</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="liens.php">Liens</a></li>
                </ul>
            </nav>
            <img id="hamburger" src="images/hamburger.png" onclick="toggle();" />