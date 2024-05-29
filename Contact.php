<!-- L'en-tete -->
<?php require('Head.php'); ?>
<title>Page de Calcul</title>
<style>
  .Titre {
    color: rgba(0, 94, 235, 0.874);
    font-size: 60px;
    font-family: sans-serif;
    text-align: center;
    text-transform: uppercase;
  }

  .title {
    width: 80%;
    margin-top: 70px;
  }

  form {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
  }

  .sousform {
    display: flex;
    flex-direction: column;
    margin-top: 20px;
  }

  .btn {
    margin-right: 450px;
  }

  .bouton {
    background-color: rgb(0, 125, 250) !important;
    width: 100px;
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

  @media screen and (max-width:900px) {
    .btn {
      margin: auto;
    }

    .sousform {
      width: 100%;
    }

    .title {
      width: 100%;
      margin-top: 70px;
    }

    .responsive-input {
      max-width: 100%;
    }
  }
</style>

<body>
  <!-- La barre de navigation -->

  <?php require('navbar.php'); ?>

  <!-- Mileu de la page -->
  <div class="title">
    <h1 class="Titre">CONTACT</h1>
  </div>
  <form action="traitement.php" method="post">
    <div class="sousform">
      <label style="font-weight: 500;margin-bottom:10px;">Nom</label>
      <input required class="responsive-input" type="text" name="nom" id="nom" style="width:550px;opacity:20%;border-radius:5px;">
    </div>
    <div class="sousform">
      <label style="font-weight: 500;margin-bottom:10px;">Email</label>
      <input required class="responsive-input" type="email" name="mail" id="mail" style="width:550px;opacity:20%;border-radius:5px;">
    </div>
    <div class="sousform">
      <label style="font-weight: 500;margin-bottom:10px;" for="tel">Téléphone</label>
      <input required="responsive-input" type="text" name="tel" id="tel" style="width:550px;opacity:20%;border-radius:5px;">
    </div>
    <div class="sousform">
      <label style="font-weight: 500;margin-bottom:10px;">Message</label>
      <input required="responsive-input" type="text" name="mess" id="mess" style="width:550px;height:80px;opacity:20%;border-radius:5px;">
    </div>
    <div class="btn">
      <button class="bouton">Envoyez</button>
    </div>
  </form>

  <!-- Footer -->

  <?php require('footer.php'); ?>

</body>

</html>