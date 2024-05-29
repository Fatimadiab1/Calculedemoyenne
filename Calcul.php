<!-- L'en-tete -->
<?php require('Head.php'); ?>
<title>Page de Calcul</title>
<style>
    .Titre {
        color: rgba(0, 94, 235, 0.874);
        font-size: 55px;
        font-family: sans-serif;
        text-align: center;
        text-transform: uppercase;
    }

    .title {
        width: 82%;
        margin-top: 70px;
    }

    label {
        font-weight: 500;
    }

    .formulaire {
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .Form {
        display: flex;
        justify-content: space-around;
        margin: 0 20%;
    }

    .sous {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
    }

    .sous2 {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
    }

    .finalbtn {
        display: flex;
        justify-content: center;
    }

    .bouton {
        background-color: rgb(0, 125, 250) !important;
        width: 57%;
        border-color: transparent;
        padding: 8px;
        border-radius: 10px;
        font-weight: 500;
        color: white;
        margin-top: 20px;
    }


    .bouton:hover {
        background-color: white !important;
        color: rgb(0, 125, 250);
        border-color: rgb(0, 125, 250);
        transition: 0.4s ease-out;
    }

    .line {
        width: 56%;
        margin: auto;
        border-bottom: 1px rgb(169, 169, 169);
        opacity: 10%;
        margin-top: 20px;
    }

    @media screen and (max-width: 900px) {
        .title {
            width: 100%;
            margin-top: 20px;
        }

        .Form {
            flex-direction: column;
            margin: 0 5%;
        }

        .sous,
        .sous2 {
            width: 100%;
        }

        .bouton {
            width: 100%;
        }

        .line {
            width: 100%;
        }
    }
</style>
<!-- Le coprs -->

<body>
    <!-- La barre de navigation -->

    <?php require('navbar.php'); ?>

    <!-- Mileu de la page -->
    <div class="title">
        <h1 class="Titre">CALCUL DE MOYENNE</h1>
    </div>
    <form action="traitement2.php" method="post" class="formulaire">
        <div class="Form">
            <div class="sous">
                <label>Nom & Prénoms de l'étudiant</label>
                <input required class="responsive-input" name="name" id="name" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
            <div class="sous2">
                <label>Email de l'étudiant</label>
                <input required class="responsive-input" name="email" id="email" type="email" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
        </div>
        <hr class="line">
        <div class="Form">
            <div class="sous">
                <label for="protocol">Note PHP</label>
                <input required class="responsive-input" name="protocol" id="protocol" type="text" style="width:400px;opacity:20%;border-radius:5px;">

            </div>
            <div class="sous2">
                <label>Coefficient </label>
                <input required class="responsive-input" name="coef1" id="coef1" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
        </div>
        <hr class="line">
        <div class="Form">
            <div class="sous">
                <label>Note Merise</label>
                <input required class="responsive-input" name="merise" id="merise" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
            <div class="sous2">
                <label>Coefficient </label>
                <input class="responsive-input" name="coef2" id="coef2" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
        </div>
        <hr class="line">
        <div class="Form">
            <div class="sous">
                <label>Note Anglais</label>
                <input required class="responsive-input" name="angl" id="angl" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
            <div class="sous2">
                <label>Coefficient </label>
                <input class="responsive-input" name="coef3" id="coef3" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
        </div>
        <hr class="line">
        <div class="Form">
            <div class="sous">
                <label>Note Français</label>
                <input required class="responsive-input" name="fr" id="fr" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
            <div class="sous2">
                <label>Coefficient </label>
                <input class="responsive-input" name="coef4" id="coef4" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
        </div>
        <hr class="line">
        <div class="Form">
            <div class="sous">
                <label>Note Algorithmique</label>
                <input required class="responsive-input" name="algo" id="algo" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
            <div class="sous2">
                <label>Coefficient </label>
                <input class="responsive-input" name="coef5" id="coef5" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
        </div>
        <hr class="line">
        <div class="Form">
            <div class="sous">
                <label>Note Javascript</label>
                <input required class="responsive-input" name="jav" id="jav" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
            <div class="sous2">
                <label>Coefficient </label>
                <input class="responsive-input" name="coef6" id="coef6" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
        </div>
        <hr class="line">
        <div class="Form">
            <div class="sous">
                <label>Note Bootstrap</label>
                <input required class="responsive-input" name="boot" id="boot" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
            <div class="sous2">
                <label>Coefficient </label>
                <input class="responsive-input" name="coef7" id="coef7" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
        </div>
        <hr class="line">
        <div class="Form">
            <div class="sous">
                <label>Note HTML</label>
                <input required class="responsive-input" name="html" id="html" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
            <div class="sous2">
                <label>Coefficient </label>
                <input required class="responsive-input" name="coef8" id="coef8" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
        </div>
        <hr class="line">
        <div class="Form">
            <div class="sous">
                <label>Note CSS</label>
                <input required class="responsive-input" name="css" id="css" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
            <div class="sous2">
                <label>Coefficient </label>
                <input class="responsive-input" name="coef9" id="coef9" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
        </div>
        <hr class="line">
        <div class="Form">
            <div class="sous">
                <label>Note Wordpress</label>
                <input required class="responsive-input" name="wordpress" id="wordpress" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
            <div class="sous2">
                <label>Coefficient </label>
                <input required class="responsive-input" name="coef10" id="coef10" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
        </div>
        <hr class="line">
        <div class="Form">
            <div class="sous">
                <label>Note Laravel</label>
                <input required class="responsive-input" name="laravel" id="laravel" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
            <div class="sous2">
                <label>Coefficient </label>
                <input required class="responsive-input" name="coef11" id="coef11" type="text" style="width:400px;opacity:20%;border-radius:5px;">
            </div>
        </div>
        <div class="finalbtn">
            <button type="submit" class="bouton">Calculer</button>
        </div>
    </form>
    <!-- Footer -->

    <?php require('footer.php'); ?>
</body>

</html>