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
				if($("#label_color_value").val() != ""){
					$("#label-small, #label-big").addClass($(this).attr("labeltype")+"-"+$("#label_color_value").val());
				}else{
					$("#label-small, #label-big").addClass($(this).attr("labeltype")+"-negro");					
				}
			})			
			$(".color-block").click(function(){
				console.log($(this).attr("labelcolor"));
				$("#label_color_value").val($(this).attr("labelcolor"));
				$("#label-big").removeClass();
				$("#label-small").removeClass();
				if($("#label_type_value").val() !=""){
					$("#label-small").addClass($("#label_type_value").val());
					$("#label-big").addClass($("#label_type_value").val()+"-preview");
					$("#label-small, #label-big").addClass($("#label_type_value").val()+"-"+$(this).attr("labelcolor"));					
				}else{
					console.log("arco-"+$(this).attr("labelcolor"));
					$("#label-small").addClass("arco");					
					$("#label-big").addClass("arco-preview");					
					$("#label-small, #label-big").addClass("arco-"+$(this).attr("labelcolor"));					
				}

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
		$label_type = array(['id'=>'1','name'=>'arco', 'img'=>'arco.png'], ['id'=>'2','name'=>'circulo', 'img'=>'circulo.png'], ['id'=>'3','name'=>'escudo', 'img'=>'escudo.png'], ['id'=>'4','name'=>'rectangulo', 'img'=>'rectangulo.png'],['id'=>'5','name'=>'rombo', 'img'=>'rombo.png'] );		

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

		$label_color = array(
			['id'=>'1', 'color'=>'#1B1B1B', 'name'=>'negro'], 
			['id'=>'2', 'color'=>'#FFFFFF', 'name'=>'blanco'], 
			['id'=>'3', 'color'=>'#18A91C', 'name'=>'verde'],
			['id'=>'4', 'color'=>'#FEDC37', 'name'=>'amarillo'], 
			['id'=>'5', 'color'=>'#EA212D', 'name'=>'rojo'],
			['id'=>'5', 'color'=>'#0E68B3', 'name'=>'azul'],
			['id'=>'5', 'color'=>'#FD9326', 'name'=>'naranja'],
			['id'=>'5', 'color'=>'#DB529A', 'name'=>'rosa'],
			['id'=>'5', 'color'=>'#CCC5F8', 'name'=>'celeste'],
			['id'=>'5', 'color'=>'#D7B073', 'name'=>'cafe'],
		);		

	?>

	<style type="text/css">
		body{ 
			background-color: rgba(40, 44, 35, 0.8);
		}
		#beer_preview{
			padding-top: 230px;
			padding-left: 92px;
			background-image: url(images/cerveza.png);
			background-position: center;
			background-repeat: no-repeat;
			height: 550px;
		}		
		#label_preview{
			padding-top: 50px;
			padding-left: 50px;
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
		.big-custome-text{
			width: 225px;
			text-align: center;
			padding: 50px;
			padding-top: 110px;
			font-size: 30px;
			color: #fff !important;
		}	
		.small-custome-text{
			font-size: 20px;
			color: #fff !important;
			width: 100px;
			margin: -105px;
			margin-top: -195px;
			text-align: center;
		}

		.arco-negro{ background-image: url(images/etiquetas/arco_1.svg);}
		.arco-blanco{ background-image: url(images/etiquetas/arco_2.svg);}
		.arco-verde{ background-image: url(images/etiquetas/arco_3.svg);}
		.arco-amarillo{ background-image: url(images/etiquetas/arco_4.svg);}
		.arco-rojo{ background-image: url(images/etiquetas/arco_5.svg);}
		.arco-azul{ background-image: url(images/etiquetas/arco_6.svg);}
		.arco-naranja{ background-image: url(images/etiquetas/arco_7.svg);}
		.arco-rosa{ background-image: url(images/etiquetas/arco_8.svg);}
		.arco-celeste{ background-image: url(images/etiquetas/arco_9.svg);}
		.arco-cafe{ background-image: url(images/etiquetas/arco_10.svg);}


		.circulo-negro{ background-image: url(images/etiquetas/circulo_1.svg);}
		.circulo-blanco{ background-image: url(images/etiquetas/circulo_2.svg);}
		.circulo-verde{ background-image: url(images/etiquetas/circulo_3.svg);}
		.circulo-amarillo{ background-image: url(images/etiquetas/circulo_4.svg);}
		.circulo-rojo{ background-image: url(images/etiquetas/circulo_5.svg);}
		.circulo-azul{ background-image: url(images/etiquetas/circulo_6.svg);}
		.circulo-naranja{ background-image: url(images/etiquetas/circulo_7.svg);}
		.circulo-rosa{ background-image: url(images/etiquetas/circulo_8.svg);}
		.circulo-celeste{ background-image: url(images/etiquetas/circulo_9.svg);}
		.circulo-cafe{ background-image: url(images/etiquetas/circulo_10.svg);}


		.escudo-negro{ background-image: url(images/etiquetas/escudo_1.svg);}
		.escudo-blanco{ background-image: url(images/etiquetas/escudo_2.svg);}
		.escudo-verde{ background-image: url(images/etiquetas/escudo_3.svg);}
		.escudo-amarillo{ background-image: url(images/etiquetas/escudo_4.svg);}
		.escudo-rojo{ background-image: url(images/etiquetas/escudo_5.svg);}
		.escudo-azul{ background-image: url(images/etiquetas/escudo_6.svg);}
		.escudo-naranja{ background-image: url(images/etiquetas/escudo_7.svg);}
		.escudo-rosa{ background-image: url(images/etiquetas/escudo_8.svg);}
		.escudo-celeste{ background-image: url(images/etiquetas/escudo_9.svg);}
		.escudo-cafe{ background-image: url(images/etiquetas/escudo_10.svg);}


		.rectangulo-negro{ background-image: url(images/etiquetas/rectangulo_1.svg);}
		.rectangulo-blanco{ background-image: url(images/etiquetas/rectangulo_2.svg);}
		.rectangulo-verde{ background-image: url(images/etiquetas/rectangulo_3.svg);}
		.rectangulo-amarillo{ background-image: url(images/etiquetas/rectangulo_4.svg);}
		.rectangulo-rojo{ background-image: url(images/etiquetas/rectangulo_5.svg);}
		.rectangulo-azul{ background-image: url(images/etiquetas/rectangulo_6.svg);}
		.rectangulo-naranja{ background-image: url(images/etiquetas/rectangulo_7.svg);}
		.rectangulo-rosa{ background-image: url(images/etiquetas/rectangulo_8.svg);}
		.rectangulo-celeste{ background-image: url(images/etiquetas/rectangulo_9.svg);}
		.rectangulo-cafe{ background-image: url(images/etiquetas/rectangulo_10.svg);}


		.rombo-negro{ background-image: url(images/etiquetas/rombo_1.svg);}
		.rombo-blanco{ background-image: url(images/etiquetas/rombo_2.svg);}
		.rombo-verde{ background-image: url(images/etiquetas/rombo_3.svg);}
		.rombo-amarillo{ background-image: url(images/etiquetas/rombo_4.svg);}
		.rombo-rojo{ background-image: url(images/etiquetas/rombo_5.svg);}
		.rombo-azul{ background-image: url(images/etiquetas/rombo_6.svg);}
		.rombo-naranja{ background-image: url(images/etiquetas/rombo_7.svg);}
		.rombo-rosa{ background-image: url(images/etiquetas/rombo_8.svg);}
		.rombo-celeste{ background-image: url(images/etiquetas/rombo_9.svg);}
		.rombo-cafe{ background-image: url(images/etiquetas/rombo_10.svg);}
		
		.arco{
			height: 100px;
			width: 100px;
		}
		.arco-preview{			
			height: 300px;
			width: 300px;
		}
		.circulo{
			height: 100px;
			width: 100px;
		}
		.circulo-preview{			
			height: 300px;
			width: 300px;
		}
		.escudo{
			height: 100px;
			width: 100px;
		}
		.escudo-preview{			
			height: 300px;
			width: 300px;
		}		
		.rectangulo{
			height: 100px;
			width: 100px;
		}
		.rectangulo-preview{
			height: 300px;
			width: 300px;
		}		
		.rombo{
			height: 100px;
			width: 100px;
		}
		.rombo-preview{			
			height: 300px;
			width: 300px;
		}		

		#label-big{
			background-repeat: no-repeat;
		}		
		#label-small{
			padding-top:250px;
			padding-left: 110px;
			background-repeat: no-repeat;
		}

		.wordwrap { 
		   white-space: pre-wrap;      /* CSS3 */   
		   white-space: -moz-pre-wrap; /* Firefox */    
		   white-space: -pre-wrap;     /* Opera <7 */   
		   white-space: -o-pre-wrap;   /* Opera 7 */    
		   word-wrap: break-word;      /* IE */
		}		

		.navbar-default{
			background: rgba(40, 44, 35, 0.8);
			border-color: rgba(40, 44, 35, 0.8);
		}
	    @media only screen and (max-width : 320px) {
	        #label_preview{padding-left: 0px;}
	        #beer_preview{padding-left: 64px;}
	    }


	</style>
  <title>Personaliza tu cerveza</title>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="">
	        <img src="images/logo.svg" width="170" />
	      </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active">
	          <a href="">
	            <img src="images/logo_ellysium.svg" alt="" />
	          </a>
	        </li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="">Blog</a></li>
	        <li><a href="">Productos</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container-fluid">
		<div class="col-md-6 col-md-offset-3">
			<div class="col-md-6 col-xs-12" id="label_preview">
				<div id="label-big" class="arco-preview arco-negro">
					<div class="big-custome-text wordwrap"></div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12" id="beer_preview">
				<div id="label-small" class="arco arco-negro">
					<div class="small-custome-text small wordwrap"></div>
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
						<div class="col-md-1 col-xs-2 color-block pointer" labelcolor="<?php echo $value['name'] ?>" style="background-color:<?php echo $value['color']?>"></div>
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
				<div class="col-md-5 col-md-offset-1">
					<span class="col-md-2">Color:</span>
					<div class="col-md-10">
						<?php foreach ($label_color as $key => $value) { ?>
							<div class="col-md-1 color-block pointer" labelcolor="<?php echo $value['name'] ?>" style="background-color:<?php echo $value['color']?>"></div>
						<?php }?>
					</div>
				</div>
				<div class="col-md-6 text-right">
					<span class="col-md-3">O también:</span>
					<div class="col-md-4 text-left">
						<input class="form-control" type="file">
					</div>
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
			<div class="col-md-2 col-md-offset-1" id="choose_section_text">Escoge la tipografía:</div>
			<div class="col-md-8">
				<?php foreach ($typography_type as $key => $value) { ?>
					<div class="col-md-1 col-xs-2 pointer typography_type text-center" typographytype="<?php echo $value['name']?>">
						<h3 class="typography_type_style" style="font-family:<?php echo $value['name']?>;">Aa</h3>
					</div>
				<?php }?>
			</div>
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