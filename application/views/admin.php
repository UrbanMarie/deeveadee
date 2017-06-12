<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Deeveadee</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<div id="container">
<h1> Bienvenu sur la page admin </h1>

<form method = "" action = "">

   <?php
	  echo form_open('AdminG/add_categorie');

	  echo form_label('Catégorie');
	  echo form_input(array('nomCAT'=>'nomCAT'));
	   echo form_label('id');
	  echo form_input(array('idCAT'=>'idCAT'));
	  echo "<br/>";
	  echo form_submit(array('id'=>'submit','value'=>'Add'));
	  echo form_close();
   ?>

</form>

 <div class='article'>
	<h4> Categorie : </h4>
	   <div class='categorie'>
			<?php foreach($categorie as $article): ?>
			<div>
			 <p><?php echo $article['idCAT']; ?></p>
			 <p><?php echo $article['nomCAT']; ?></p>
			</div>
		<br/>
	<?php endforeach; ?>
		</div>

	 <a href="<?php //echo site_url('form_employe'); ?>"class="list-group-item"> Inserer un employe</a>
</div>



</div>


</div>


</body>
</html>
