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
<h1> Insertion d'un employe </h1>

<div class='form'>
	<div class="row">
	  	<div class="col-lg-12 margin-tb">
	  	  <div class="pull-left">
			  <?php echo validation_errors(); ?>
			  <?php  echo form_open('form');


				$data= array();
				$nom= array(
				'name'=>'nom',
				'id'=>'nom',
				'placeholder'=>'Nom',
				'rules' => 'required',
				'value'=>set_value('nom')
				);
				echo form_input($nom);

				$prenom= array(
				'name'=>'prenom',
				'id'=>'prenom',
				'placeholder'=>'prenom',
				'rules' => 'required',
				'value'=>set_value('prenom')
				);
				echo form_input($prenom);

				$adresse= array(
			   'name'=>'adresse',
			   'id'=>'adresse',
			   'placeholder'=>'adresse',
			   'rules' => 'required',
			   'value'=>set_value('adresse')
				);

				echo form_input($adresse);

				$numSecu= array(
				'name'=>'numSecu',
				'id'=>'numSecu',
				'placeholder'=>'numSecu',
				'rules' => 'required',
				'value'=>set_value('numSecu')
				);


			 $this->form_validation->set_rules($nom);
			 $this->form_validation->set_rules($prenom);
			 $this->form_validation->set_rules($adresse);
			 $this->form_validation->set_rules($numSecu);
			 $this->form_validation->set_data($data);

			  echo form_submit('envoi', 'Valider');
			  echo form_close();
			  
			  ?>
	  	  </div>
</div>
</div>
</body>
</html>
