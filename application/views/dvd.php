<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Deeveadee</title>

	  <!-- Latest compiled and minified CSS -->
<!--	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
-->      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<link href="<? echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>
  <body>

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
            <li><a href="">Bonjour</a></li>
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
<div id="container">
<h4> Liste des films </h4>

<!-- Old -->
<!--
<nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		    <li><p class="navbar-collapse"> rechercher par : </p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> categorie <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href=""><?php //foreach($societes as $article):; echo $article['nomS']; endforeach ?></a></li>
			<li role="separator" class="divider"></li>
            <li><a href="#">Another action</a></li>
			<li role="separator" class="divider"></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

    </div>
  </div>
</nav>-->
<!-- Fin old nav -->



<!-- View films -->
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

<!--
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script src="/js/item-ajax.js"></script> -->
</body>
</html>
