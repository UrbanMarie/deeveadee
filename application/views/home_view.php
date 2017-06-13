<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home Deeveadee</title>

    <link href="<? echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>


  <body>
      <h1> DEEVEADEE </h1>
<div class="container" style="margin-top:20px;">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


          <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo site_url('admin'); ?>"class="list-group-item"> ADMIN</a></li>
              <li><a href="<?php echo site_url('dvd'); ?>"class="list-group-item"> Films</a></li>
            <li><a href="">Bonjour <?php echo $fullname ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo site_url('home/logout') ?>">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<div class="container" style="margin-top:20px;">
    <div class="jumbotron">
      <h1>DEEVEADE !</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('home/logout') ?>" role="button">Log out</a></p>
    </div>
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

<div class="list-group">
  <a href="#" class="list-group-item active"> Menu </a>
  <a href="<?php echo site_url('admin'); ?>"class="list-group-item"> ADMIN</a>
  <a href="<?php echo site_url('dvd'); ?>"class="list-group-item"> Films</a>
    <a href="<?php echo site_url('session_view'); ?>"class="list-group-item"> test session</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>

</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<? echo base_url('assets/js/jquery.min.js')?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<? echo base_url('assets/js/bootstrap.min.js')?>"></script> </body>
</html>
