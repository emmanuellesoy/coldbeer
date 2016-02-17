<!DOCTYPE html>
<html lang="esp">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  	<link href='https://fonts.googleapis.com/css?family=Calligraffitti|New+Rocker|Fugaz+One|Lobster|Trade+Winds|UnifrakturCook:700|Oregano|Ewert|Eagle+Lake|UnifrakturMaguntia' rel='stylesheet' type='text/css'>
  	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function(){
			console.log("ready");
			$(".beer_type").click(function(){
				console.log($(this).attr("beertype"));
				$("#beer_type_value").val($(this).attr("beertype"));
			})
			$(".label_type").click(function(){
				console.log($(this).attr("labeltype"));
				$("#label_type_value").val($(this).attr("labeltype"));
				background_img = "url("+$(this).find("img").attr("src")+")";
				$("#beer_preview").css("background-image",background_img);
			})			
			$(".color-block").click(function(){
				console.log($(this).attr("labelcolor"));
				$("#label_color	_value").val($(this).attr("labelcolor"));
			})
			$("#label_text").change(function(){
				$("#label_text_value").val($("#label_text").val())
			})			

		})
	</script>

	<?php 

		$beer_type = array(['id'=>'1','name'=>'Ambar'], ['id'=>'2','name'=>'Rubia'], ['id'=>'3', 'name'=>'Oscura'],['id'=>'4', 'name'=>'Trigo']);

		$label_type = array(['id'=>'1','name'=>'circulo', 'img'=>'circulo.png'], ['id'=>'2','name'=>'rombo', 'img'=>'rombo.png'], ['id'=>'3','name'=>'escudo', 'img'=>'escudo.png'], ['id'=>'4','name'=>'rectangulo', 'img'=>'rectangulo.png'],['id'=>'5','name'=>'arco', 'img'=>'arco.png'] );		

		$typography_type = array(
			['id'=>'1','name'=>"'Calligraffitti', cursive"], 
			['id'=>'2','name'=>"'New Rocker', cursive"], 
			['id'=>'3', 'name'=>"'Fugaz One', cursive"],
			['id'=>'4', 'name'=>"'Lobster', cursive"], 
			['id'=>'4', 'name'=>"'Trade Winds', cursive"], 
			['id'=>'4', 'name'=>"'UnifrakturCook', cursive"], 
			['id'=>'4', 'name'=>"'Oregano', cursive"], 
			['id'=>'4', 'name'=>"'Ewert', cursive"], 
			['id'=>'4', 'name'=>"'Eagle Lake', cursive"], 
			['id'=>'4', 'name'=>"'UnifrakturMaguntia', cursive"], 
		);

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
			height: 100px;
			vertical-align: middle;
			background-color: #e8e8e8;
			padding: 20px 0px;			
		}
		#options{
			background-color: #cfcfa5;
			padding-bottom: 20px;			
		}
		.pointer{cursor: pointer;}	
		.color-block{height: 30px;}
		.tab-pane{ 
			font-family: 'Open Sans', Arial, serif;
			font-size: 20px;
			line-height: 30px;
			color: #4a4a4a;

		}
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
		input[type="text"]{
			font-family: 'Open Sans', Arial, serif;
			font-style: italic;
		}
		.typography_type_style{
			font-size: 40px;
			font-weight: bold;
			color: #333e40;
		}
		.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover,.nav>li>a:focus, .nav>li>a:hover{background-color: transparent; border:none;}
		.nav-tabs.nav-justified>.active>a, .nav-tabs.nav-justified>.active>a:focus, .nav-tabs.nav-justified>.active>a:hover{border:none;}
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
			<div class="col-md-2 col-md-offset-1 col-xs-12" id="choose_section_text">Estilo de cerveza:</div>
			<div class="col-md-9 col-xs-12">
				<?php foreach ($beer_type as $key => $value) { ?>
					<div class="col-md-3 col-xs-3 pointer beer_type" beertype="<?php echo $value['name']?>"><b><?php echo $value['name'] ?></b></div>
				<?php }?>
			</div>
	      </div>
	      <div class="tab-pane fade" id="label_type">
			<div class="col-md-2 col-md-offset-1 col-xs-12" id="choose_section_text">Escoge tu etiqueta:</div>
			<div class="col-md-8 col-xs-12">
				<?php foreach ($label_type as $key => $value) { ?>
					<div class="col-md-2 col-xs-2 pointer label_type" labeltype="<?php echo $value['name']?>">
						<img src="<?php echo(strtolower('images/'.$value['name'].'.png'))?>">
					</div>
				<?php }?>
			</div>
	      </div>	      
	      <div class="tab-pane fade" id="photo_upload">
			<div class="col-md-12 col-xs-12">
				<div class="col-md-2 col-xs-12 text-right">Color:</div>
				<?php foreach ($label_color as $key => $value) { ?>
					<div class="col-md-1 col-xs-2 color-block pointer" labelcolor="<?php echo $value['color'] ?>" style="background-color:<?php echo $value['color']?>"></div>
				<?php }?>
				<div class="col-md-2 col-xs-12 text-right">O también:</div>
				<div class="col-md-2 col-xs-12 text-left">
					<input class="form-control" type="file">
				</div>
			</div>
	      </div>
	      <div class="tab-pane fade" id="text">
			<div class="col-md-2 col-md-offset-1">Escribe un texto:</div>
			<div class="col-md-8">
				<input type="text" id="label_text" class="form-control" placeholder="la información de tu cerveza...">
			</div>
	      </div>	      
		<div class="tab-pane fade" id="text_typography">
			<div class="col-md-2" id="choose_section_text">Escoge la tipografía:</div>
				<?php foreach ($typography_type as $key => $value) { ?>
					<div class="col-md-1 pointer typography_type text-center" typographytype="<?php echo $value['name']?>">
						<h3 class="typography_type_style" style="font-family:<?php echo $value['name']?>;">Aa</h3>
					</div>
				<?php }?>
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
		<input type="hidden" id="beer_type_value" name="beer_type_value">		
		<input type="hidden" id="label_type_value" name="label_type_value">		
		<input type="hidden" id="label_color_value" name="label_color_value">		
		<input type="hidden" id="label_text_value" name="label_text_value">		
		<input type="hidden" id="label_image_value" name="label_image_value">		
	</div>
</body>
<footer></footer>