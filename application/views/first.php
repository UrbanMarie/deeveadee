<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Deeveadee</title>

	  <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<div id="container">
<h1> DEEVEADEE </h1>


<div id='laius'>

</div>

<div class="jumbotron">
  <h3>un site pas comme les autre </h3>
  <h6> A par que c'est bootrap et que du coup si il est comme les autres</h6>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	 Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">S'inscrire</a></p>
</div>


<div class="list-group">
  <a href="#" class="list-group-item active"> Menu </a>
  <a href="<?php echo site_url('admin'); ?>"class="list-group-item"> ADMIN</a>
  <a href="<?php echo site_url('dvd'); ?>"class="list-group-item"> Films</a>
    <a href="<?php echo site_url('session_view'); ?>"class="list-group-item"> test session</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>


<div class="container">
  <h2>Notre sélection du mois</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="assets/img/carroussel/LaHaine.jpg" alt="LaHaine" style="width:20%;">
      </div>

      <div class="item">
        <img src="assets/img/carroussel/kuzco.jpg" alt="kuzko" style="width:20%;">
      </div>

      <div class="item">
        <img src="assets/img/carroussel/adams.jpg" alt="adams" style="width:20%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


	<div class='article'>
		<h4> Nos societés : </h4>
		   <div class='societe'>
				<?php foreach($societes as $article): ?>
				<div>
				 <p><?php echo $article['nomS']; ?></p>
				</div>
				<?php endforeach ?>
			</div>
	</div>


	<div class="row">
	  <div class="col-sm-3 col-md-4">
	    <div class="thumbnail">
		<?php foreach($articles as $article): ?>
	      <a><img src="<?php echo $article['JaquetteD'] ;?>" width="20%"></a>
	      <div class="caption">
			<h3><?php echo $article['titreD']; ?></h3>
			<p><?php echo $article['auteurD']; ?></p>
			<p><?php echo $article['anneeD']; ?></p>
	        <p><a href="<?php echo site_url('admin'); ?>" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			<?php endforeach ?>
		 </div>

	    </div>

	  </div>

	</div>




</div>

<div id='footer'>
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
	  <div class="container">
		  <div class='row'>
			  <div class="col-sm-4">
	    <p class="logo"> Ici logo Twitter </p> </div>
			<div class="col-sm-4">
		<p class="logo"> Ici logo FB </p> </div>
			<div class="col-sm-4">
		<p class="logo"> Ici Logo Ta mère </p> </div>
		<div class='row'>
	  </div>
	</nav>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
