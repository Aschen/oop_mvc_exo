<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifier une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<?php
		require("../models/hiking.php");

		$hiking_model = new Hiking();
		$hiking_id = $_GET["hiking_id"];
		$hiking = $hiking_model->find($hiking_id);
	?>

	<a href="/controllers/index.php?controller=hikings&action=index">Liste des randonnées</a>
	<h1>Ajouter</h1>
	<form action="/controllers/index.php?controller=hikings&action=update" method="post">
		<input type="hidden" name="hiking[id]" value="<?php echo $hiking->id(); ?>">
		<div>
			<label for="name">Name</label>
			<input type="text" name="hiking[name]" value="<?php echo $hiking->getName(); ?>">
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
		<input type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>
