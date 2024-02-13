<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8" />
    <title>Profil</title>
    <meta name="author" content=" " />
    <link rel=stylesheet href="../css/profil.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>

<body>


    <nav>
        <div class="container">
            <ul class="menu">
                <li><a class="bouton" href="#">CONCOURS</a></li>
                <li><a class="bouton" href="#">GAGNANTS</a></li>
                <li><a class="bouton" href="profil.php">PROFIL</a></li>
            </ul>
            <div class="logoicon">
                <img id="logo" src="../image/photoreine.png" alt="logo de la page web en couleur" />
                <a href="connexion-inscription.php"><img id="icon-nav" src="../image/icon-utilisateur.jpg"
                        alt="icon utilisateur en couleur" href="#" /></a>
            </div>
        </div>
        <br>
        <hr>
    </nav>

    <h1 id="profil"><b>Profil</b></h1>
    <h1 id="vousetesconnecte"><b>Vous êtes connectés</b></h1>
    <a id="deconnexion" href="Connexion-inscription.php" class="mon-bouton">Déconnexion</a>

    <div id="informationsperso">
        <h2>Informations personnelles</h2>
        <br>
        <div class="container">
            <p class="texte">Adresse email</p>
            <p class="encadré">pierre.jacques@gmail.com</p>
        </div>
        <br>
        <br>
        <div class="container">
            <p class="texte">Nom d'utilisateur </p>
            <p class="encadré">PierreJacques68</p>
        </div>
        <br>
        <br>
        <div class="container">
            <p class="texte">Date de naissance </p>
            <p class="encadré">18/12/93</p>
        </div>
        <br>
        <br>

        <button onclick="openPopup()" class="mon-bouton">Modifier mot de passe</button>

        <div id="myPopup" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup()">&times;</span>
                <p>
                <div id="informationsperso">
                    <h2>Modifier le mot de passe</h2>
                    <form>
                        <label for="ancienpassword">Ancien mot de passe : </label> <!--Faire une vérification-->
                        <input type="password" class="texte" id="ancienpassword" name="ancienpassword" required>
                        <br>
                        <br>
                        <label for="newpassword">Nouveau mot de passe : </label>
                        <input type="password" class="texte" id="newpassword" name="newpassword" required>
                        <br>
                        <br>
                        <label for="password">Confirmer mot de passe : </label>
                        <input type="password" class="texte" id="password" name="password" required>
                        <br><br>

                        <button onclick="submitForm()" class="mon-bouton">Modifier mot de passe</button>
                    </form>
                    <br>
                </div>
                </p>
            </div>
        </div>

        <script>
            function openPopup() {
                document.getElementById("myPopup").style.display = "flex";
            }

            function closePopup() {
                document.getElementById("myPopup").style.display = "none";
            }

            function submitForm() {
                // Vérifier que les champs sont remplis correctement
                var ancienpassword = document.getElementById("ancienpassword").value;
                var newpassword = document.getElementById("newpassword").value;
                var Password = document.getElementById("password").value;

                if (ancienpassword == "" || newpassword == "" || password == "") {
                    alert("Veuillez remplir tous les champs !");
                    return false;
                }

                if (newpassword != password) {
                    alert("Les deux nouveaux mots de passe ne correspondent pas !");
                    return false;
                }

                // Envoyer les données du formulaire à votre serveur pour traitement
                // ...

                // Fermer la fenêtre modale
                closePopup();
            }

        </script>


        <br>
        <br>
        <br>
    </div>

    <div id="administrateur">
        <h2>Administrateur</h2>
        <br>
        <button onclick="openPopup()" class="mon-bouton">Voir les photos signalées</button>
        <br><br>
        <button onclick="openPopup()" class="mon-bouton">Voir les statistiques</button>
    </div>


    <div id="mesphotospubliées">
        <h2 class="mesphotos">Mes Photos publiées</h2>
        <br>
        <div class="galerie-photos">
            <script>
                var nombreDePhotosPubliées = 7; //faire count(nb photo publiées pour tel utilisateur)
                for (var i = 1; i <= nombreDePhotosPubliées; i++) {
                    //document.write('<div class="photo">');
                    document.write('<img src="../image/nature.jpg" class="photo" style="width: 38%; margin-right: 0%; margin-left: 3%;" />');
                    document.write('<img src="../image/poubelle.png" class="photo" style="width: 5%; margin-right: 3%; margin-left: 1%;" />');

                    // Vérifier si deux photos ont été affichées sur la ligne actuelle
                    if (i % 4 == 0) {
                        document.write('<br />');
                    }
                }
            </script>
        </div>
        <!--<p id="categ">Nature</p>
         <img id="photo" src="nature.jpg">-->

    </div>
    <div id="mesphotosreines">
        <h2 class="mesphotos">Mes Photos Reines</h2>
        <br>
        <div class="galerie-photos">
            <script>
                var nombreDePhotosPubliées = 5; //faire count(nb photo publiées pour tel utilisateur)
                for (var i = 1; i <= nombreDePhotosPubliées; i++) {
                    //document.write('<div class="photo">');
                    document.write('<img src="../image/nature.jpg" class="photo" style="width: 38%; margin-right: 0%; margin-left: 3%;" />');
                    document.write('<img src="../image/poubelle.png" class="photo" style="width: 5%; margin-right: 3%; margin-left: 1%;" />');

                    // Vérifier si deux photos ont été affichées sur la ligne actuelle
                    if (i % 4 == 0) {
                        document.write('<br />');
                    }
                }
            </script>
        </div>
        <!--  <p id="categ">Nature</p>
        <img id="photo" src="nature.jpg">-->
    </div>


</body>

</html>
</doctype>