<!-- L'en-tete -->
<?php require('Head.php'); ?>
<title>Page d'acceuil</title>
<!-- Lecss -->
<style>
  .bouton1 {
    background-color: rgb(0, 125, 250) !important;
    width: 140px;
    border-color: transparent;
    padding: 8px;
    border-radius: 10px;
    font-weight: 500;
  }

  .lien {
    color: white;
    text-decoration: none;
  }

  .lien:hover {
    color: rgb(0, 125, 250);
  }

  .lien2:hover {
    color: white;
  }

  .lien2 {
    color: rgb(0, 125, 250);
    text-decoration: none;
  }


  .bouton2 {
    background-color: white !important;
    border-color: rgb(0, 125, 250);
    width: 190px;
    border-width: 1.5px;
    font-weight: 500;
    padding: 8px;
    border-radius: 10px;
  }

  .bouton1:hover {
    background-color: white !important;
    border-color: rgb(0, 125, 250);
    transition: 0.4s ease-out;
  }

  .bouton2:hover {
    background-color: rgb(0, 125, 250) !important;
    border-color: rgb(0, 125, 250);
    transition: 0.4s ease-out;

    .ml2 {
      font-weight: 900;
      font-size: 3.5em;
    }

    .ml2 .letter {
      display: inline-block;
      line-height: 1em;
    }
  }
</style>
<!-- Le coprs -->

<body>
  <!-- La barre de navigation -->

  <?php require('navbar.php'); ?>

  <!-- Milieu de la page  -->

  <section class="row" style="max-width: 1000px; margin: auto; margin-top: 100px; display: flex; justify-content: center; align-items: center;">

    <div class="col">
      <h1 style="font-weight: bolder;font-size:45px; color: black;" class="ml2">Calculez la moyenne en un clic</h1>
      <p class="Paragraphe" style="font-weight: 400;font-size:18px;">
        <b>MaMoyenne</b> est une application web simple mais efficace<br> concue pour faciliter le suivi des notes et le calcul
        de la <br>moyenne pondérée des étudiants. Que vous soyez au<br> lycée, à l'université ou dans une école professionnelle,<br>
        cette application vous permet de saisir vos notes pour<br> chaque matière et de visualiser instantanément votre<br> moyenne
        cumulative.
      </p>

      <div class="Bouton">
        <button class="bouton1"><a href="Ensavoirplus.php" class="lien">Ajouter un élève</a></button>

        <button class="bouton2"><a href="Calcul.php" class="lien2">Calculer la moyenne</a></button>
      </div>
    </div>

    <div class="col">
      <img src="Image/banniere.png" style="max-width:450px;">
    </div>

  </section>

  <!-- Footer -->

  <?php require('footer.php'); ?>
</body>

</html>