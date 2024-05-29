<!-- L'en-tete -->
<?php require('Head.php'); ?>
<title>Page Fonctionnalités</title>
<!-- La partie css -->
<style>
  .Titre {
    color: rgba(0, 94, 235, 0.874);
    font-size: 60px;
    font-family: sans-serif;
    text-align: center;
    text-transform: uppercase;
  }

  .title {
    width: 62%;
    margin-top: 70px;
  }

  .sectionbase {
    display: flex;
    margin-top: 70px;
    justify-content: center;
  }

  .first {
    justify-content: center;
    display: flex;
    flex-direction: column;
    margin: 50px;
  }

  .second1 {
    display: flex;
  }

  .second2 {
    display: flex;
    margin-top: 40px;
  }

  .bouton {
    background-color: rgb(0, 125, 250) !important;
    width: 140px;
    border-color: transparent;
    padding: 8px;
    border-radius: 10px;
    font-weight: 500;
    color: white;
  }

  .bouton:hover {
    background-color: white !important;
    color: rgb(0, 125, 250);
    border-color: rgb(0, 125, 250);
    transition: 0.4s ease-out;
  }

  @media screen and (max-width:900px) {
    .Titre {
      font-size: 40px;
    }

    .title {
      width: 100%;
    }

    .sectionbase {
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
  }
</style>
<!-- Le coprs -->

<body>
  <!-- La barre de navigation -->

  <?php require('navbar.php'); ?>

  <!-- Mileu de la page -->
  <div class="title">
    <h1 class="Titre">Fonctionnalités</h1>
  </div>
  <section class="sectionbase">
    <div class="first">
      <h2 class="lotitle" style="font-weight:bold;color:black">Découvrez le meilleur d'une apllication <br>de calcul de moyenne</h2>
      <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur itaque quos<br>
        Aspernatur itaque quos, maxime provident ut consect.</p>
      <button class="bouton">En savoir plus </button>
    </div>
    <div class="second">
      <div class="second1">

        <div class="sec1" style="margin-right: 20px;">
          <img src="Image/font1.png" width="50px">
          <h4 style="font-weight:bold;color:black">Calcul des notes</h4>
          <p>Lorem impsum dolor sit amen consecteteur<br>adipisicing elit.</p>
        </div>

        <div class="sec2">
          <img src="Image/font2.png" width="50px">
          <h4 style="font-weight:bold;color:black">Coefficient</h4>
          <p>Lorem impsum dolor sit amen consecteteur<br>adipisicing elit.</p>
        </div>
      </div>
      <div class="second2">
        <div class="sec3" style="margin-right: 20px;">
          <img src="Image/FONT3.png" width="50px">
          <h4 style="font-weight:bold;color:black">Portabilité</h4>
          <p>Lorem impsum dolor sit amen consecteteur<br>adipisicing elit.</p>
        </div>
        <div class="sec4">
          <img src="Image/font4.png" width="50px">
          <h4 style="font-weight:bold;color:black">Accès parent d'élève</h4>
          <p>Lorem impsum dolor sit amen consecteteur<br>adipisicing elit.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- Footer -->

  <?php require('footer.php'); ?>
</body>

</html>