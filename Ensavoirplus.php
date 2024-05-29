<!-- L'en-tete -->
<?php require('Head.php'); ?>
<title>Page d'ajout</title>
<style>
  .Titre {
    color: rgba(0, 94, 235, 0.874);
    font-size: 50px;
    font-family: sans-serif;
    text-align: center;
    text-transform: uppercase;
  }

  .title {
    width: 100%;
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
    display: flex;
    justify-content: center;
  }

  .bouton {
    background-color: rgb(0, 125, 250) !important;
    width: 120px;
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
    <h1 class="Titre">Enregistrez un élève</h1>
  </div>
  <form action="traitement3.php" method="post">
    <div class="sousform">
      <label for="nom">Nom:</label>
      <input type="text" name="nom" id="nom" required style="width:450px;opacity:20%;border-radius:5px;">
    </div>
    <div class="sousform">
      <label for="prenom">Prénom:</label>
      <input type="text" name="prenom" id="prenom" required style="width:450px;opacity:20%;border-radius:5px;">
    </div>
    <div class="sousform">
      <label for="prenom">Email:</label>
      <input type="text" name="email" id="email" required style="width:450px;opacity:20%;border-radius:5px;">
    </div>
    <div class="sousform">
      <label for="classe">Classe:</label>
      <input type="text" name="classe" id="classe" required style="width:450px;opacity:20%;border-radius:5px;">
    </div>
    <div class="btn">
      <button class="bouton" type="submit">Ajouter élève</button>
    </div>
  </form>
  <!-- Footer -->

  <?php require('footer.php'); ?>
</body>

</html>