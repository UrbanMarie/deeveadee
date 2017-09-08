<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home Deeveadee</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> </link>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>


  <body>

      <div class="container-fluid">
          <!-- row de la nav -->
      	<div class="row">
      		<div class="col-md-12">
      			<nav class="navbar navbar-default" role="navigation">
      				<div class="navbar-header">

      					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
      					</button> <a class="navbar-brand" href="#">Deeveadee</a>
      				</div>

      				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      					<ul class="nav navbar-nav ">
      						<li>
      							<a href="#">Bienvenu <?php // echo $fullname ?> </a>

                                <li class="dropdown right">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong class="glyphicon glyphicon-menu-hamburger"></strong></a>
                                    <ul class="dropdown-menu navbar-right">
                                        <li>
                                            <a href="#">Mon compte</a>
                                        </li>
                                        <li>
                                            <a href="#">Mes Abonnement</a>
                                        </li>
                                        <li>
                                            <a href="#">Mon historique</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('home/logout')?>"> Déconnexion </a>
                                        </li>
                                    </ul>
                                </li> <!-- fin list drop -->


                                <!-- modal -->
                                <li><a id="connexion" href="#modal-container-378121" role="button" class="btn" data-toggle="modal">Connexion2
                                <div class="modal fade" id="modal-container-378121" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">    ×  </button>
                                                <h4 class="modal-title" id="myModalLabel"> Connexion</h4>
                                            </div>

                                            <div class="modal-body">
                                                 <div class="row">
                                                     <div class="col-md-10">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <form>
                                                                <?php
                                                                if(validation_errors()){
                                                                    ?>
                                                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        <strong><?php echo validation_errors(); ?></strong>
                                                                    </div>
                                                                    <?php
                                                                 }
                                                                 echo form_open('login','class="myclass"');
                                                                 ?>

                                                                  <div class="form-group">
                                                                      <?php
                                                                      echo form_label('Username','username');
                                                                      echo form_input('username','','class="form-control" id="username" placeholder="Nana Pengunna"')
                                                                      ?>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <?php
                                                                        echo form_label('Password','password');
                                                                        echo form_input('password','','class="form-control" id="password" placeholder="Password"')
                                                                        ?>
                                                                  </div>
                                                                  <?php echo form_submit('login', 'Login', 'class="btn btn-primary"') ?>
                                                                      <a href="<?php echo site_url('login/register') ?>" class="btn btn-link">Sign Up </a>
                                                                  <?php echo form_close()?>
                                                                </form>
                                                            </div>
                                                        </div>
                                                     </div>
                                                 </div>
                                                </div>
                                              <!-- <div class="modal-footer">  </div>  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </a></li> <!-- fin modal -->
      					</li> <!-- fin list nav -->
      					</ul>
      				</div>
                    <?php

                    if(validation_errors()){
                        ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong><?php echo validation_errors(); ?></strong>
                        </div>
                        <?php
                     }
                     echo form_open('login','class="myclass"');
                     ?>

      			</nav>
            </div>
        </div>
<!-- fin nav -->

      	<div class="row">
      		<div class="col-md-12">
      			<div class="carousel slide" id="carousel-172402">
      				<ol class="carousel-indicators">
      					<li class="active" data-slide-to="0" data-target="#carousel-172402">
      					</li>
      					<li data-slide-to="1" data-target="#carousel-172402">
      					</li>
      					<li data-slide-to="2" data-target="#carousel-172402">
      					</li>
      				</ol>
      				<div class="carousel-inner">
      					<div class="item active">
      						<img alt="Carousel Bootstrap First" src="http://www.gastronogeek.com/wp-content/uploads/2017/05/naZeHic1Blu62_hssI-eOwkMVmg.jpg" />
      						<div class="carousel-caption">
      							<h4>
      							Notre selection de la semaine
      							</h4>
      							<p>
      								Selectionné avec amour et patience par nos amis les webmasters
      							</p>
      						</div>
      					</div>
      					<div class="item">
      						<img alt="Carousel Bootstrap Second" src="http://ekladata.com/_7k0G4TSBoSaChqUhZjXa6_Wqmo.jpg" />
      						<div class="carousel-caption">
      							<h4>
      								Second Thumbnail label
      							</h4>
      							<p>
      								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
      							</p>
      						</div>
      					</div>
      					<div class="item">
      						<img alt="Carousel Bootstrap Third" src="http://anotherwhiskyformisterbukowski.com/wp-content/uploads/2017/05/alien-covenant-banniere.jpg" />
      						<div class="carousel-caption">
      							<h4>
      								Third Thumbnail label
      							</h4>
      							<p>
      								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
      							</p>
      						</div>
      					</div>
      				</div> <a class="left carousel-control" href="#carousel-172402" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-172402" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      			</div>
      			<div class="jumbotron">
      				<h2>
      					Cher utilisateur
      				</h2>
      				<p>
      				Vous devez être inscrit pour pouvoir, louer et réserver des films, vous pouvez cependant regarder les films que nous avons en stock, bonne recherche !
      				</p>
      				<p>
      					<a class="btn btn-default btn-large" href="#">Learn more</a>
      				</p>
      			</div>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-12">
      			<ul class="nav nav-tabs">

                    <li class="dropdown right">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catégorie<strong class="dropdown-toggle"></strong></a>
                        <ul class="dropdown-menu navbar-right">
                            <li>
                                <a href="#">Fantastique</a>
                            </li>
                            <li>
                                <a href="#">Horreur</a>
                            </li>
                            <li>
                                <a href="#">Romance</a>
                            </li>
                        </li>


            </ul>

      				<li class="dropdown pull-right">
      					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<strong class="caret"></strong></a>
      					<ul class="dropdown-menu">
      						<li>
      							<a href="#">Action</a>
      						</li>
      						<li>
      							<a href="#">Another action</a>
      						</li>
      						<li>
      							<a href="#">Something else here</a>
      						</li>

      					</ul>
      				</li>
                    <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Auteur<strong class="dropdown-toggle"></strong></a>
                        <ul class="dropdown-menu navbar-right">
                            <li>
                                <a href="#">Benitio Del Toro</a>
                            </li>
                            <li>
                                <a href="#">Kubik</a>
                            </li>
                            <li>
                                <a href="#">?</a>
                            </li>
                        </li>

      			</ul>
                <li><form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
  </form></li>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-2">
      			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
      			 <a id="modal-874343" href="#modal-container-874343" role="button" class="btn" data-toggle="modal">Plus d'infos</a>

      			<div class="modal fade" id="modal-container-874343" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      				<div class="modal-dialog">
      					<div class="modal-content">
      						<div class="modal-header">

      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      								×
      							</button>
      							<h4 class="modal-title" id="myModalLabel">
      								Titre Du Dvd
      							</h4>
                                <div class="rating"><!--
   --><a href="#5" title="Donner 5 étoiles">☆</a><!--
   --><a href="#4" title="Donner 4 étoiles">☆</a><!--
   --><a href="#3" title="Donner 3 étoiles">☆</a><!--
   --><a href="#2" title="Donner 2 étoiles">☆</a><!--
   --><a href="#1" title="Donner 1 étoile">☆</a>
</div>
      						</div>
      						<div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                            <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
                                    </div>
                                    <div class="col-md-8">
      						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </div>
                                </div>
                            </div>
      						<div class="modal-footer">

      							<button type="button" class="btn btn-default" data-dismiss="modal">
      								Louer
      							</button>
      							<button type="button" class="btn btn-primary">
      								Save changes
      							</button>
      						</div>
      					</div>

      				</div>

      			</div>

      		</div>
      		<div class="col-md-2">
      			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
      			 <a id="modal-314238" href="#modal-container-314238" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

      			<div class="modal fade" id="modal-container-314238" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      				<div class="modal-dialog">
      					<div class="modal-content">
      						<div class="modal-header">

      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      								×
      							</button>
      							<h4 class="modal-title" id="myModalLabel">
      								Modal title
      							</h4>
      						</div>
      						<div class="modal-body">
      							...
      						</div>
      						<div class="modal-footer">

      							<button type="button" class="btn btn-default" data-dismiss="modal">
      								Close
      							</button>
      							<button type="button" class="btn btn-primary">
      								Save changes
      							</button>
      						</div>
      					</div>

      				</div>

      			</div>

      		</div>
      		<div class="col-md-2">
      			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
      			 <a id="modal-796313" href="#modal-container-796313" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

      			<div class="modal fade" id="modal-container-796313" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      				<div class="modal-dialog">
      					<div class="modal-content">
      						<div class="modal-header">

      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      								×
      							</button>
      							<h4 class="modal-title" id="myModalLabel">
      								Modal title
      							</h4>
      						</div>
      						<div class="modal-body">
      							...
      						</div>
      						<div class="modal-footer">

      							<button type="button" class="btn btn-default" data-dismiss="modal">
      								Close
      							</button>
      							<button type="button" class="btn btn-primary">
      								Save changes
      							</button>
      						</div>
      					</div>

      				</div>

      			</div>

      		</div>
      		<div class="col-md-2">
      			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
      			 <a id="modal-181707" href="#modal-container-181707" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

      			<div class="modal fade" id="modal-container-181707" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      				<div class="modal-dialog">
      					<div class="modal-content">
      						<div class="modal-header">

      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      								×
      							</button>
      							<h4 class="modal-title" id="myModalLabel">
      								Modal title
      							</h4>
      						</div>
      						<div class="modal-body">
      							...
      						</div>
      						<div class="modal-footer">

      							<button type="button" class="btn btn-default" data-dismiss="modal">
      								Close
      							</button>
      							<button type="button" class="btn btn-primary">
      								Save changes
      							</button>
      						</div>
      					</div>

      				</div>

      			</div>

      		</div>
      		<div class="col-md-2">
      			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
      			 <a id="modal-273314" href="#modal-container-273314" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

      			<div class="modal fade" id="modal-container-273314" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      				<div class="modal-dialog">
      					<div class="modal-content">
      						<div class="modal-header">

      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      								×
      							</button>
      							<h4 class="modal-title" id="myModalLabel">
      								Modal title
      							</h4>
      						</div>
      						<div class="modal-body">
      							...
      						</div>
      						<div class="modal-footer">

      							<button type="button" class="btn btn-default" data-dismiss="modal">
      								Close
      							</button>
      							<button type="button" class="btn btn-primary">
      								Save changes
      							</button>
      						</div>
      					</div>

      				</div>

      			</div>

      		</div>
      		<div class="col-md-2">
      			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
      			 <a id="modal-378121" href="#modal-container-378121" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

      			<div class="modal fade" id="modal-container-378121" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      				<div class="modal-dialog">
      					<div class="modal-content">
      						<div class="modal-header">

      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      								×
      							</button>
      							<h4 class="modal-title" id="myModalLabel">
      								Modal title
      							</h4>
      						</div>
      						<div class="modal-body">
      							...
      						</div>
      						<div class="modal-footer">

      							<button type="button" class="btn btn-default" data-dismiss="modal">
      								Close
      							</button>
      							<button type="button" class="btn btn-primary">
      								Save changes
      							</button>
      						</div>
      					</div>

      				</div>

      			</div>

      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-2">
      			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
      			 <a id="modal-305532" href="#modal-container-305532" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

      			<div class="modal fade" id="modal-container-305532" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      				<div class="modal-dialog">
      					<div class="modal-content">
      						<div class="modal-header">

      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      								×
      							</button>
      							<h4 class="modal-title" id="myModalLabel">
      								Modal title
      							</h4>
      						</div>
      						<div class="modal-body">
      							...
      						</div>
      						<div class="modal-footer">

      							<button type="button" class="btn btn-default" data-dismiss="modal">
      								Close
      							</button>
      							<button type="button" class="btn btn-primary">
      								Save changes
      							</button>
      						</div>
      					</div>

      				</div>

      			</div>

      		</div>
      		<div class="col-md-2">
      			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
      			 <a id="modal-971830" href="#modal-container-971830" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

      			<div class="modal fade" id="modal-container-971830" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      				<div class="modal-dialog">
      					<div class="modal-content">
      						<div class="modal-header">

      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      								×
      							</button>
      							<h4 class="modal-title" id="myModalLabel">
      								Modal title
      							</h4>
      						</div>
      						<div class="modal-body">
      							...
      						</div>
      						<div class="modal-footer">

      							<button type="button" class="btn btn-default" data-dismiss="modal">
      								Close
      							</button>
      							<button type="button" class="btn btn-primary">
      								Save changes
      							</button>
      						</div>
      					</div>

      				</div>

      			</div>

      		</div>
      		<div class="col-md-2">
      			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
      			 <a id="modal-370917" href="#modal-container-370917" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

      			<div class="modal fade" id="modal-container-370917" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      				<div class="modal-dialog">
      					<div class="modal-content">
      						<div class="modal-header">

      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      								×
      							</button>
      							<h4 class="modal-title" id="myModalLabel">
      								Modal title
      							</h4>
      						</div>
      						<div class="modal-body">
      							...
      						</div>
      						<div class="modal-footer">

      							<button type="button" class="btn btn-default" data-dismiss="modal">
      								Close
      							</button>
      							<button type="button" class="btn btn-primary">
      								Save changes
      							</button>
      						</div>
      					</div>

      				</div>

      			</div>

      		</div>
      		<div class="col-md-2">
      			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
      			 <a id="modal-835722" href="#modal-container-835722" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

      			<div class="modal fade" id="modal-container-835722" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      				<div class="modal-dialog">
      					<div class="modal-content">
      						<div class="modal-header">

      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      								×
      							</button>
      							<h4 class="modal-title" id="myModalLabel">
      								Modal title
      							</h4>
      						</div>
      						<div class="modal-body">
      							...
      						</div>
      						<div class="modal-footer">

      							<button type="button" class="btn btn-default" data-dismiss="modal">
      								Close
      							</button>
      							<button type="button" class="btn btn-primary">
      								Save changes
      							</button>
      						</div>
      					</div>

      				</div>

      			</div>

      		</div>
      		<div class="col-md-2">
      			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
      			 <a id="modal-196494" href="#modal-container-196494" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

      			<div class="modal fade" id="modal-container-196494" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      				<div class="modal-dialog">
      					<div class="modal-content">
      						<div class="modal-header">

      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      								×
      							</button>
      							<h4 class="modal-title" id="myModalLabel">
      								Modal title
      							</h4>
      						</div>
      						<div class="modal-body">
      							...
      						</div>
      						<div class="modal-footer">

      							<button type="button" class="btn btn-default" data-dismiss="modal">
      								Close
      							</button>
      							<button type="button" class="btn btn-primary">
      								Save changes
      							</button>
      						</div>
      					</div>

      				</div>

      			</div>

      		</div>
      		<div class="col-md-2">
      			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
      			 <a id="modal-523764" href="#modal-container-523764" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

      			<div class="modal fade" id="modal-container-523764" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      				<div class="modal-dialog">
      					<div class="modal-content">
      						<div class="modal-header">

      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      								×
      							</button>
      							<h4 class="modal-title" id="myModalLabel">
      								Modal title
      							</h4>
      						</div>
      						<div class="modal-body">
      							...
      						</div>
      						<div class="modal-footer">

      							<button type="button" class="btn btn-default" data-dismiss="modal">
      								Close
      							</button>
      							<button type="button" class="btn btn-primary">
      								Save changes
      							</button>
      						</div>
      					</div>

      				</div>

      			</div>

      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-12">
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-8">
      			<h3>Nos magasins</h3>
      		</div>
      		<div class="col-md-4">
      		</div>
      	</div>
      	<div class="row">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2901.602096800047!2d3.2167385506893855!3d43.34351477903084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b10e603d1a0e47%3A0x8e0c7acf2a83a351!2sX+DVD+Git+Michel!5e0!3m2!1sfr!2sfr!4v1497525961938" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      	</div>

        <div id='footer'>
        	<nav class="navbar navbar-inverse navbar-fixed-bottom">
        	  <div class="container">
        		  <div class='row'>
        			  <div class="col-sm-4">
                 <p> <i class="fa fa-facebook" aria-hidden="true"></i></p>
        	    <p class="logo"> Ici logo Twitter </p> </div>
        			<div class="col-sm-4">
        		<p class="logo"> Ici logo FB </p> </div>
        			<div class="col-sm-4">
        		<p class="logo"> Ici Logo Ta mère </p> </div>
        		<div class='row'>
        	  </div>
        	</nav>
        </div>
      </div>
</div>
</div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="<? echo base_url('assets/js/jquery.min.js')?>"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="<? echo base_url('assets/js/bootstrap.min.js')?>"></script> </body>
  </body>


<!--
              <li><a href="<?php// echo site_url('admin'); ?>"class="list-group-item"> ADMIN</a></li>
              <li><a href="<?php//echo site_url('dvd'); ?>"class="list-group-item"> Films</a></li>
            <li><a href="">Bonjour <?php// echo $fullname ?></a></li>

                <li><a href="<?php //echo site_url('home/logout') ?>">Logout</a></li> -->





<!--
	<div class='article'>
		<h4> Nos societés : </h4>
		   <div class='societe'>
				<?php //foreach($societes as $article): ?>
				<div>
				 <p><?php// echo $article['nomS']; ?></p>
				</div>
				<?php// endforeach ?>
			</div>
	</div> -->


<!--
	<div class="row">
	  <div class="col-sm-3 col-md-4">
	    <div class="thumbnail">
		<?php// foreach($articles as $article): ?>
	      <a><img src="<?php/// echo $article['JaquetteD'] ;?>" width="20%"></a>
	      <div class="caption">
			<h3><?php// echo $article['titreD']; ?></h3>
			<p><?php// echo $article['auteurD']; ?></p>
			<p><?php// echo $article['anneeD']; ?></p>
	        <p><a href="<?php// echo site_url('admin'); ?>" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			<?php// endforeach ?>
		 </div>

	    </div>

	  </div>

	</div>




</div>


 <div class="list-group">
  <a href="#" class="list-group-item active"> Menu </a>
  <a href="<?php// echo site_url('admin'); ?>"class="list-group-item"> ADMIN</a>
  <a href="<?php// echo site_url('dvd'); ?>"class="list-group-item"> Films</a>
    <a href="<?php// echo site_url('session_view'); ?>"class="list-group-item"> test session</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div> --> -->
