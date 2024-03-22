<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nicolas" />
    <meta name="description" content="Projet 1, Promo 2024, Wild code School" />


    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- Les pages CSS pour changer de style-->
    <link rel="stylesheet" href="./css/facebook.css">
    <link rel="stylesheet" href="./css/gitHub.css">
    <link rel="stylesheet" href="./css/instagram.css">
    <link rel="stylesheet" href="./css/x.css">
    
    <!--La page CSS principale -->
    <link rel="stylesheet" type="text/css" href="./css/contact.css" id="mycss" />
    
    <script type="text/javascript" src="./js/js.java"></script>
    <script src="./js/script.js"></script>

    <title>Contact</title>




</head>

<body>
    <header>


        <div class="navbar">

            <ul class="links">
                <li><a href="./index.html">Accueil</a></li>
                <li><a href="./wilders.html">Wilder's</a></li>
                <li><a href="./team.html">Team</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
            <div class="burger"> <a href="#" id="openButton"><img src="images/menu-open.png" class="buttonOpen">
                    <span class="menu-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a></div>
        </div>

        <nav>



            <div id="nav_principal" class="nav_principal">
                <a id="closeButton" href="#" class="close"><img src="images/menu-open.png" class="buttonClose"></a>
                <ul>
                    <li><img class="logo-main" src="./Logos/logo.svg"></li>
                    <li><a href="./index.html">Accueil</a></li>
                    <li><a href="./wilders.html">Wilder's</a></li>
                    <li><a href="./team.html">Team</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </div>



        </nav>



        <a href="https://www.wildcodeschool.com/fr-fr/formations-developpement-web/formation-developpeur-web-php-a-distance"><img
                class="logo" src="./Logos/logo.svg"></a>
    </header>
    <main>

        <h1>Rejoignez-nous</h1>


        <section>
            <div class="container">

                <div class="section_formulaire">
                    <form id="myForm" action="./validation.php" method="post">
                        <div class="firstName">
                            <label for="firstName">Prénom</label>
                            <input type="text" id="firstName" name="firstName">
                        </div>
                        <div class="email">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email">
                        </div>

                        <div class="telephone">
                            <label for="telephone">Téléphone</label>
                            <input type="text" id="telephone" name="telephone">
                        </div>

                        <div class="questionSelect">
                            <label class="questionSelectC" for="questionSelect" required>Que veut dire l'abréviation CCC
                                ?</label>
                            <select name="question" id="questionmSelect">
                                <option value="">-- Veuillez choisir une option --</option>
                                <option value="CCC1">Coctktail - Chivas - Chouffe </option>
                                <option value="CCC2">Cours - camelCase - Cyber </option>
                                <option value="CCC3">Café - Clope - Chiote </option>
                                <option value="CCC4">Chat - chien - chèvre</option>
                            </select>
                        </div>

                        <div class="message">
                            <label class="missing1" for="message">Votre message : </label>
                            <textarea name="message" id="message" cols="52" rows="8"></textarea>
                        </div>

                        <div class="envoyer">
                            <button form="myForm" type="submit"><img src="./"></button>
                        </div>
                    </form>
                </div>
                
                <div class="section_campus">
                    <h2 class="campus">Retrouvez nos campus : </h2>
                    <section class="chepas">
                        <div id=""><a href="#lille" onclick="visual_query('../campus/lille.html','visuelle');">Lille</a>
                        </div>
                        <div id=""><a href="#bordeau" onclick="visual_query('../campus/bordeau.html','visuelle');">Bordeaux</a></div>
                        <div id=""><a href="#paris" onclick="visual_query('../campus/paris.html','visuelle');">Paris</a>
                        </div>
                        <div id=""><a href="#nante" onclick="visual_query('../campus/nante.html','visuelle');">Nante</a>
                        </div>
                        <div id=""><a href="#toulouse" onclick="visual_query('../campus/toulouse.html','visuelle');">Toulouse</a></div>
                        <div id=""><a href="#lyon" onclick="visual_query('../campus/lyon.html','visuelle');">Lyon</a>
                        </div>
                    </section>

                    <div id="visuelle" class="chepas2"></div>


        </section>

    </main>
    <footer>
        <div class="socialNetwork">
            <ul>
                <li><a href="#"><img class="icoFaceBook" src="./Logos/FaceBook.png" alt="FaceBook"
                            onclick="switchStyle('./css/bleu.css')"></a></li>
                <li><a href="#"><img class="icoGitHub" src="./Logos/GitHub.png" alt="GitHub"
                            onclick="switchStyle('./css/blanc.css')"></a></li>
                <li><a href="#"><img class="icoInstagram" src="./Logos/Instagram.png" alt="Instagram"
                            onclick="switchStyle('./css/orange.css')"></a></li>
                <li><a href="#"><img class="icoLinkedIn" src="./Logos/LinkedIn.png" alt="LinkedIn"
                            onclick="switchStyle('./css/bleu-ciel.css')"></a></li>
                <li><a href="#"><img class="icoTwitter" src="./Logos/Twitter.png" alt="Twitter"
                            onclick="switchStyle('./css/noir.css')"></a></li>
            </ul>
        </div>

        <div class="menuFooter">
            <ul>
                <li><a href="./index.html">Accueil</a></li>
                <li><a href="./wilders.html">Wilders</a></li>
                <li><a href="./team.html">Team</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </div>

        <div class="footerWCS">
            <p class="by">Création By Matthieu, Anaé et Nicolas &copy;2024 Wild Code School</p>
        </div>


    </footer>

</body>

<script src="./js/script.js"></script>

</html>