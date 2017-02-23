<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ajouter une randonnée</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>


<a href="/oop_mvc_exo/controllers/index.php?controller=hikings&action=index">Liste des données</a>
<h1>Ajouter</h1>
<!--  on renvoie à l'index php controller avec une action create pour qu'il crée l'entrée dans la base de données  -->
<form action="/oop_mvc_exo/controllers/index.php?controller=hikings&action=create" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name="hiking[name]" value="">
    </div>

    <div>
        <label for="difficulty">Difficulté</label>
        <select name="hiking[difficulty]">
            <option value="très facile">Très facile</option>
            <option value="facile">Facile</option>
            <option value="moyen">Moyen</option>
            <option value="difficile">Difficile</option>
            <option value="très difficile">Très difficile</option>
        </select>
    </div>

    <div>
        <label for="distance">Distance</label>
        <input type="text" name="hiking[distance]" value="">
    </div>
    <div>
        <label for="duration">Durée</label>
        <input type="duration" name="hiking[duration]" value="">
    </div>
    <div>
        <label for="height_difference">Dénivelé</label>
        <input type="text" name="hiking[height_difference]" value="">
    </div>
    <button type="submit" name="button">Envoyer</button>
</form>
</body>
</html>
