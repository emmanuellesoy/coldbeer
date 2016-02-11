<!DOCTYPE html>
<html lang="esp">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  
  	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function(){
			console.log("ready");

		})
	</script>

	<?php 

		$beer_type = array(['id'=>'1','name'=>'Ambar'], ['id'=>'2','name'=>'Rubia'], ['id'=>'3', 'name'=>'Oscura'],['id'=>'4', 'name'=>'Trigo']);

		$label_type = array(['id'=>'1','name'=>'Circulo', 'img'=>'circulo.png'], ['id'=>'2','name'=>'rombo', 'img'=>'rombo.png'], ['id'=>'3','name'=>'escudo', 'img'=>'escudo.png'], ['id'=>'4','name'=>'rectangulo', 'img'=>'rectangulo.png'],['id'=>'5','name'=>'arco', 'img'=>'arco.png'] );		

		$typography_type = array(['id'=>'1','name'=>'Ambar'], ['id'=>'2','name'=>'Rubia'], ['id'=>'3', 'name'=>'Oscura'],['id'=>'4', 'name'=>'Trigo']);

		$label_color = array(['id'=>'1','color'=>'#d9ff04'], ['id'=>'2','color'=>'#bd10e0'], ['id'=>'3', 'color'=>'#7ed321'],['id'=>'4', 'color'=>'#645a66'], ['id'=>'5', 'color'=>'#ae9f7e'])
	?>

	<style type="text/css">
		#beer_preview{
			padding-top: 200px;
			background-color: rgba(40, 44, 35, 0.82);
			padding-left: 50px;
			background-image: url(images/cerveza.png);
			background-position: center;
			background-repeat: no-repeat;
			height: 550px;
		}
		#choose_section{
			background-color: #e8e8e8;
			padding: 20px 0px;			
		}
		#options{
			background-color: #cfcfa5;
			padding-bottom: 20px;			
		}
		.pointer{cursor: pointer;}	

		.btn-primary{
		  background:rgba(195, 216, 51, 0.2);
		  border-radius: 6px;
		  padding: 12px 24px;
		  color: #000;
		  border-color: #3a4033;
		  font-size: 24px;
		  font-family: 'Open Sans', Arial, serif;
		  font-weight: bold;
		}		
	</style>
  <title>Personaliza tu cerveza</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row" id="beer_preview">
			<div class="col-md-2 col-md-offset-1 col-xs-12">
				<button class="btn btn-primary">Hacer pedido</button>
			</div>
		</div>
	    <div class="tab-content row" id="choose_section">
	      <div class="tab-pane fade active in" id="beer_type">
			<div class="col-md-2 col-md-offset-1" id="choose_section_text">Estilo de cerveza:</div>
			<div class="col-md-8">
				<?php foreach ($beer_type as $key => $value) { ?>
					<div class="col-md-2 pointer"><?php echo $value['name'] ?></div>
				<?php }?>
			</div>
	      </div>
	      <div class="tab-pane fade" id="label_type">
			<div class="col-md-2 col-md-offset-1" id="choose_section_text">Escoge tu etiqueta:</div>
			<div class="col-md-8">
				<?php foreach ($label_type as $key => $value) { ?>
					<div class="col-md-2 pointer">
						<img src="<?php echo(strtolower('images/'.$value['name'].'.png'))?>">
					</div>
				<?php }?>
			</div>
	      </div>
	      <div class="tab-pane fade" id="text">
			<div class="col-md-2 col-md-offset-1" id="choose_section_text">Escribe un texto:</div>
			<div class="col-md-8">
				<input type="text" class="form-control" placeholder="la información de u cerveza...">
			</div>
	      </div>
	      <div class="tab-pane fade" id="settings">
	          <h2>Settings Content Goes Here</h2>
	          <img src="http://lorempixel.com/400/400/cats/4" alt="Cats"/>
	      </div>
	    </div>		
		<div class="row" id="options">
			<ul class="nav nav-tabs nav-justified" role="tablist">
			  <li role="presentation">
			  	<a href="#beer_type" role="tab" data-toggle="tab"><img src="images/cerveza_op.png"></a>
			  </li>
			  <li role="presentation">
			  	<a href="#label_type" role="tab" data-toggle="tab"><img src="images/etiquetas.png"></a>
			  </li>
			  <li role="presentation">
			  	<a href="#photo_upload" role="tab" data-toggle="tab"><img src="images/imagen.png"></a>
			  </li>
			  <li role="presentation">
			  	<a href="#text" role="tab" data-toggle="tab"><img src="images/texto.png"></a>
			  </li>
			  <li role="presentation">
			  	<a href="#text_typography" role="tab" data-toggle="tab"><img src="images/tipografia.png"></a>
			  </li>			  			  
			</ul>
		</div>		
	</div>
</body>
<footer></footer>