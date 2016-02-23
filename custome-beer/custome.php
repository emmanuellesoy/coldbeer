<!DOCTYPE html>
<html lang="esp">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  	<link href='https://fonts.googleapis.com/css?family=Calligraffitti|New+Rocker|Fugaz+One|Lobster|Trade+Winds|UnifrakturCook:700|Oregano|Ewert|Eagle+Lake|UnifrakturMaguntia' rel='stylesheet' type='text/css'>
  	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src=	"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function(){
			$(".beer_type").click(function(){
				console.log($(this).attr("beertype"));
				$("#beer_type_value").val($(this).attr("beertype"));
			})
			$(".label_type").click(function(){
				console.log($(this).attr("labeltype"));
				$("#label_type_value").val($(this).attr("labeltype"));
				$("#label-big").removeClass();
				$("#label-small").removeClass();
				$("#label-small").addClass($(this).attr("labeltype"));
				$("#label-big").addClass($(this).attr("labeltype")+"-preview");
				// background_img = "url("+$(this).find("img").attr("src")+"), url(images/cerveza.png)";
				// $("#beer_preview").css("background-image",background_img);
			})			
			$(".color-block").click(function(){
				console.log($(this).attr("labelcolor"));
				$("#label_color_value").val($(this).attr("labelcolor"));
				$("#label-big").css("background-color",$(this).attr("labelcolor"));
				$("#label-small").css("background-color",$(this).attr("labelcolor"));

			})
			$("#label_text").change(function(){
				$("#label_text_value").val($("#label_text").val());
				$(".big-custome-text, .small-custome-text").html($("#label_text").val());
			})				
			$(".typography_type").click(function(){
				console.log($(this).attr("typographytype"));				
				$("#typography_type_value").val($(this).attr("typographytype"));
				$(".big-custome-text, .small-custome-text").css("font-family",$(this).attr("typographytype"));
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
		body{ 
			background-color: rgba(40, 44, 35, 0.8);
		}
		#beer_preview{
			padding-top: 200px;
			padding-left: 50px;
			background-image: url(images/cerveza.png);
			background-position: center;
			background-repeat: no-repeat;
			height: 550px;
		}		
		#label_preview{
			padding-top: 50px;
			padding-left: 50px;
			/*background-image: url(images/cerveza.png);*/
			/*background-position: center;*/
			/*background-repeat: no-repeat;*/
			height: 550px;
		}
		#checkout_btn{ 
			background-color: rgba(40, 44, 35, 0.82);
		}
		#checkout_btn button{ 
			border:none;
			background-color: rgba(195, 216, 51, 0.2) !important;
			border-radius: 0px;
			background-color: rgba(40, 44, 35, 0.82);
		}
		#choose_section{
			height: auto;
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
		.circulo{
			margin-left: 50px;
			margin-top: 50px;
			width: 95px;
			height: 146px;
			background: #FFF;
			-moz-border-radius: 65px / 100px;
			-webkit-border-radius: 65px / 100px;
			border-radius: 65px / 100px;
			border:5px solid #000;
			border-style: double;
			border-radius:  65px/100px;			
		}		
		.circulo-preview{
			width: 249.3px;
			height: 375px;
			background: #FFF;
			-moz-border-radius: 120px / 185px;
			-webkit-border-radius: 120px / 185px;
			border-radius: 120px / 185px;
			border:5px solid #000;
			border-style: double;
			border-radius:  120px / 185px;				
		}
		.rectangulo {
			border:5px solid #000;
			border-style: double;
		    width: 95px;
		    height: 150px;
		    background: #fff;
		    margin-top: 60px;
		    margin-left: 50px;
		}	
		.rectangulo-preview {
			border:5px solid #000;
			border-style: double;
		    width: 220px;
		    height: 350px;
		    background: #fff;
		}
		.rombo {
		    width: 80px;
		    height: 80px;
		    background: #fff;
		    border: 5px solid #000;
		    border-style: double;	
		/* Rotate */
		    -webkit-transform: rotate(-45deg);
		    -moz-transform: rotate(-45deg);
		    -ms-transform: rotate(-45deg);
		    -o-transform: rotate(-45deg);
		    transform: rotate(-45deg);
		/* Rotate Origin */
		    -webkit-transform-origin: 0 100%;
		    -moz-transform-origin: 0 100%;
		    -ms-transform-origin: 0 100%;
		    -o-transform-origin: 0 100%;
		    transform-origin: 0 100%;
		    margin: 85px 0 10px 98px;
		}		
		.rombo-preview {
		    width: 250px;
		    height: 250px;
		    background: #fff;
		    border: 5px solid #000;
		    border-style: double;	
		/* Rotate */
		    -webkit-transform: rotate(-45deg);
		    -moz-transform: rotate(-45deg);
		    -ms-transform: rotate(-45deg);
		    -o-transform: rotate(-45deg);
		    transform: rotate(-45deg);
		/* Rotate Origin */
		    -webkit-transform-origin: 0 100%;
		    -moz-transform-origin: 0 100%;
		    -ms-transform-origin: 0 100%;
		    -o-transform-origin: 0 100%;
		    transform-origin: 0 100%;
		    margin-top: 100px;
		}

		.big-custome-text{
			width: 250px;
			padding: 30px;
		}	
		.small-custome-text{
			width: 100px;
			padding: 15px;
		}	
	</style>
  <title>Personaliza tu cerveza</title>
</head>
<body>
	<div class="container-fluid">
		<div class="col-md-6 col-md-offset-3">
			<div class="col-md-6" id="label_preview">
				<div id="label-big" class="diamond-preview">
					<span class="big-custome-text"></span>
				</div>
			</div>
			<div class="col-md-6 text-center" id="beer_preview">
				<div id="label-small" class="diamond">
					<span class="small-custome-text small"></span>
				</div>
			</div>
		</div>
		<div class="row text-center" id="checkout_btn">
			<button class="btn btn-primary col-md-6 col-md-offset-3 col-xs-12">¡Haz click para hacer tu pedido!</button>
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
			<div class="col-md-12 col-xs-12 visible-xs">
				<div class="row">
					<div class="col-xs-12 text-left">Color:</div>
					<div class="col-xs-1"></div>
					<?php foreach ($label_color as $key => $value) { ?>
						<div class="col-md-1 col-xs-2 color-block pointer" labelcolor="<?php echo $value['color'] ?>" style="background-color:<?php echo $value['color']?>"></div>
					<?php }?>
				</div>
				<div class="row">
					<div class="col-md-2 col-xs-12 text-left">O también:</div>
					<div class="col-md-2 col-xs-12 text-left">
						<input class="form-control" type="file">
					</div>
				</div>
			</div>	      	
			<div class="col-md-12 col-xs-12 visible-sm visible-lg">
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
			<div class="col-md-2 col-xs-12" id="choose_section_text">Escoge la tipografía:</div>
			<?php foreach ($typography_type as $key => $value) { ?>
				<div class="col-md-1 col-xs-2 pointer typography_type text-center" typographytype="<?php echo $value['name']?>">
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
		<input type="hidden" id="typography_type_value" name="typography_type_value">		
	</div>
</body>
<footer></footer>