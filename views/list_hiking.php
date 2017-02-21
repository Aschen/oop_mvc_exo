<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <?php
      require("../models/hiking.php");

      $hiking_model = new Hiking();
      $hikings = $hiking_model->findAll();
     ?>
    <h1>Liste des randonnées</h1>
    <a href="/oop_mvc_exo/index.php">Retour à l'accueil</a>
    <br>
    <br>
    <table>
      <?php
        foreach ( $hikings as $hiking) {
          echo "Randonnée : " . $hiking->getName();
          echo '<a href="/oop_mvc_exo/controllers/index.php?controller=hikings&action=edit&id=' . $hiking->id() . '">Edit</a>';
          echo "<br>";
        }
      ?>
      <!-- Afficher la liste des randonnées -->
    </table>
  </body>
</html>
