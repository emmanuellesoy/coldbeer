<!DOCTYPE html>
<html lang="esp">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  	<link href='https://fonts.googleapis.com/css?family=Calligraffitti|New+Rocker|Fugaz+One|Lobster|Trade+Winds|UnifrakturCook:700|Oregano|Ewert|Eagle+Lake|UnifrakturMaguntia' rel='stylesheet' type='text/css'>
  	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script>
		(function(a){a.fn.maxlength=function(b){var c=a(this);return c.each(function(){b=a.extend({},{counterContainer:!1,text:"%left caracteres restantes"},b);var c=a(this),d={options:b,field:c,counter:a('<div class="maxlength"></div>'),maxLength:parseInt(c.attr("maxlength"),10),lastLength:null,updateCounter:function(){var b=this.field.val().length,c=this.options.text.replace(/\B%(length|maxlength|left)\b/g,a.proxy(function(a,c){return"length"==c?b:"maxlength"==c?this.maxLength:this.maxLength-b},this));this.counter.html(c),b!=this.lastLength&&this.updateLength(b)},updateLength:function(a){this.field.trigger("update.maxlength",[this.field,this.lastLength,a,this.maxLength,this.maxLength-a]),this.lastLength=a}};d.maxLength&&(d.field.data("maxlength",d).bind({"keyup change":function(){a(this).data("maxlength").updateCounter()},"cut paste drop":function(){setTimeout(a.proxy(function(){a(this).data("maxlength").updateCounter()},this),1)}}),b.counterContainer?b.counterContainer.append(d.counter):d.field.after(d.counter),d.updateCounter())}),c}})(jQuery);
	</script>

	<script>
		$(document).ready(function(){
			$(".big-custome-text").draggable();

			$(".big-custome-text").bind("drag", function(){
			    var offset = $(this).offset();
			    $(".small-custome-text").css({ "margin-left" : offset.left-parseInt($(".small-custome-text").css("margin-left").replace("px","")), "margin-top": offset.top-parseInt($(".small-custome-text").css("margin-top").replace("px",""))-10});
			});			
			$("#beer_type_value").val("Ambar");
			$("#label_type_value").val("arco");
			$("#label_color_value").val("negro");
			$("#typography_type_value").val("'Calligraffitti', cursive;");
				
			$(".big-custome-text, .small-custome-text").css("font-family",$("#typography_type_value").val());
			$(".beer_type[beertype='Ambar']").addClass("selected");
			
			$(".beer_type").click(function(){
				console.log($(this).attr("beertype"));
				$(".beer_type").removeClass("selected");
				$(this).addClass("selected");
				$("#beer_type_value").val($(this).attr("beertype"));
			})
			$(".label_type").click(function(){
				console.log($(this).attr("labeltype"));
				$("#label_type_value").val($(this).attr("labeltype"));
				$("#label-big,#label-small").removeClass();
				$("#label-big-border, #label-small-border").removeClass();
				
				$("#label-small").addClass($(this).attr("labeltype"));
				$("#label-big").addClass($(this).attr("labeltype")+"-preview");
				
				$("#label-big-border").addClass($(this).attr("labeltype")+"-border-preview");					
				$("#label-small-border").addClass($(this).attr("labeltype")+"-border");
				
				if($("#label_color_value").val() != ""){
					$("#label-small, #label-big").addClass($(this).attr("labeltype")+"-"+$("#label_color_value").val());
				}else{
					$("#label-small, #label-big").addClass($(this).attr("labeltype")+"-negro");					
				}

				if($("#border_color_value").val() != ""){
					$("#label-big-border, #label-small-border").addClass($(this).attr("labeltype")+"-border-"+$("#border_color_value").val());
				}else{
					$("#label-big-border, #label-small-border").addClass($(this).attr("labeltype")+"-border-blanco");
				}	
			})			
			$(".color-block").click(function(){
				console.log($(this).attr("labelcolor"));
				$("#label_color_value").val($(this).attr("labelcolor"));
				$("#label-big").removeClass().removeAttr("style");;
				$("#label-small").removeClass().removeAttr("style");;
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
			$(".border-color-block").click(function(){
				console.log($(this).attr("bordercolor"));
				$("#border_color_value").val($(this).attr("bordercolor"));
				$("#label-big-border").removeClass().removeAttr("style");
				$("#label-small-border").removeClass().removeAttr("style");
				
				if($("#label_type_value").val() !=""){
					$("#label-small-border").addClass($("#label_type_value").val() +"-border");
					$("#label-big-border").addClass($("#label_type_value").val()+"-border-preview");
					$("#label-small-border, #label-big-border").addClass($("#label_type_value").val()+"-border-"+$(this).attr("bordercolor"));					
				}else{
					$("#label-small-border").addClass("arco-border");					
					$("#label-big-border").addClass("arco-border-preview");					
					$("#label-small-border, #label-big-border").addClass("arco-border-"+$(this).attr("bordercolor"));					
				}
			})
			$("#label_text").maxlength();
			$("#label_text").keyup(function(){
				$("#label_text_value").val($("#label_text").val());
				$(".big-custome-text, .small-custome-text").html($("#label_text").val());
			})				
			$(".typography_type").click(function(){
				console.log($(this).attr("typographytype"));				
				$("#typography_type_value").val($(this).attr("typographytype"));
				$(".big-custome-text, .small-custome-text").css("font-family",$(this).attr("typographytype"));
			})

		    $(".uploadimage").change(function(){
		    	console.log("nanoan");
		        readURL(this);
		    });	

		    $("#font-bigger").click(function(){
		    	var font_size_label_big = $(".big-custome-text").css("font-size").replace("px","");
				if(font_size_label_big<65){
					$(".big-custome-text").css("font-size", parseInt(parseInt(font_size_label_big)+1)+"px");
					$(".small-custome-text").css("font-size", parseInt(parseInt(parseInt(font_size_label_big)+1)/2)+"px");
				}
		    })	
		    $("#font-smaller").click(function(){
		    	var font_size_label_big = $(".big-custome-text").css("font-size").replace("px","");
				if(font_size_label_big>12){
					$(".big-custome-text").css("font-size", parseInt(parseInt(font_size_label_big)-1)+"px");
					$(".small-custome-text").css("font-size", parseInt(parseInt(parseInt(font_size_label_big)-1)/2)+"px");
				}
		    })

		})

	    function readURL(input) {
			$("#label-big").removeClass();
			$("#label-small").removeClass();
			if($("#label_type_value").val() !=""){
				$("#label-small").addClass($("#label_type_value").val());
				$("#label-big").addClass($("#label_type_value").val()+"-preview");
				$("#label-small, #label-big").addClass($("#label_type_value").val()+"-"+$(this).attr("labelcolor"));					
			}else{
				$("#label-small").addClass("arco");					
				$("#label-big").addClass("arco-preview");					
				$("#label-small, #label-big").addClass("arco-"+$(this).attr("labelcolor"));					
			}	            	


	        if(input.files && input.files[0]) {

	            var reader = new FileReader();
	            reader.onload = function (e) {
					$("#label-big").removeClass();
					$("#label-small").removeClass();	            	

					if($("#label_type_value").val() !=""){
						$("#label-small").addClass($("#label_type_value").val());
						$("#label-big").addClass($("#label_type_value").val()+"-preview");
					}else{
						$("#label-small").addClass("arco");					
						$("#label-big").addClass("arco-preview");					
					}		                
					$("#label-small, #label-big").css("background-image","url("+e.target.result+")");					
	            }
	            reader.readAsDataURL(input.files[0]);
	        }
	    }
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

		$borde_color = array(
			['id'=>'1', 'color'=>"#FFF", 'name'=>'blanco'],
			['id'=>'1', 'color'=>"#000", 'name'=>'negro'],
		);
	?>

	<style type="text/css">
		@import url("https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,300,400,600&subset=latin-ext,latin");

		body{ 
			background-color: rgba(40, 44, 35, 0.8);
		}
		.selected{
			text-decoration: underline;
		}
		.maxlength{
			font-size: 12px;
			font-style: italic;
			float: right;
		}
		#beer_preview{
			padding-top: 230px;
			padding-left: 103px;
			background-image: url(images/cerveza.svg);
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
		.color-block, .border-color-block{height: 30px;}
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
			cursor: move;
			width: 225px;
			text-align: center;
			padding: 50px;
			/*padding-top: 110px;*/
			font-size: 30px;
			color: #fff !important;
			margin-top: -200px;
		}	
		.small-custome-text{
			cursor: move;
			font-size: 15px;
			color: #fff !important;
			width: 62px;
			/*margin: -88px;*/
			margin-top: -70px;
			margin-left: 22px;
			text-align: center;
		}

		.arco-border{height: 138px; width: 138px;}
		.arco-border-preview{height: 300px; width: 300px;}
		.circulo-border{height: 138px; width: 138px;}
		.circulo-border-preview{height: 300px; width: 300px;}
		.escudo-border{height: 138px; width: 138px;}
		.escudo-border-preview{height: 300px; width: 300px;}		
		.rectangulo-border{height: 138px; width: 138px;}
		.rectangulo-border-preview{height: 300px; width: 300px;}
		.rombo-border{height: 138px; width: 138px;}
		.rombo-border-preview{height: 300px; width: 300px;}		

		.arco-border-blanco{background-image: url(images/contornos/arco_contorno_blanco.svg);}
		.arco-border-negro{background-image: url(images/contornos/arco_contorno_blanco.svg);}		
		.circulo-border-blanco{background-image: url(images/contornos/circulo_contorno_blanco.svg);}
		.circulo-border-negro{background-image: url(images/contornos/circulo_contorno_negro.svg);}
		.escudo-border-blanco{background-image: url(images/contornos/escudo_contorno_blanco.svg);}
		.escudo-border-negro{background-image: url(images/contornos/escudo_contorno_negro.svg);}
		.rectangulo-border-blanco{background-image: url(images/contornos/rectangulo_contorno_blanco.svg);}
		.rectangulo-border-negro{background-image: url(images/contornos/rectangulo_contorno_negro.svg);}
		.rombo-border-blanco{background-image: url(images/contornos/rombo_contorno_blanco.svg);}
		.rombo-border-negro{background-image: url(images/contornos/rombo_contorno_negro.svg);}

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
			height: 138px;
			width: 138px;
		}
		.arco-preview{			
			height: 300px;
			width: 300px;
		}
		.circulo{
			height: 138px;
			width: 138px;
		}
		.circulo-preview{			
			height: 300px;
			width: 300px;
		}
		.escudo{
			height: 138px;
			width: 138px;
		}
		.escudo-preview{			
			height: 300px;
			width: 300px;
		}		
		.rectangulo{
			height: 138px;
			width: 138px;
		}
		.rectangulo-preview{
			height: 300px;
			width: 300px;
		}		
		.rombo{
			height: 138px;
			width: 138px;
		}
		.rombo-preview{			
			height: 300px;
			width: 300px;
		}		

		#label-big, #label-big-border, #label-small-border{
			background-repeat: no-repeat;
		}		
		#label-small{
			padding-top:0px;
			padding-left: 0px;
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
		.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{background-color: transparent;}
		.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.open>a{background-image: none;}
	    .navbar-default .navbar-nav>li>a{color: #fff; font-family: 'Open Sans', Arial, serif; font-weight:700; font-size:16px;}
	    
	    @media only screen and (max-width : 320px) {
	        #label_preview{padding-left: 0px;}
	        #beer_preview{padding-left: 76px;}
	    }
	    @media only screen and (max-width : 768px) and (min-width: 768px) {
	    	#main-wrapper{margin-top: 61px;}
	    	#beer_preview{padding-left: 123px;}
	    }
	    @media only screen and (max-width : 360px) and (min-width: 360px) {
	    	#main-wrapper{margin-top: 61px;}
	    	#beer_preview{padding-left: 95px;}
	    }	  
	    @media only screen and (max-width : 414px) and (min-width: 414px) {
	    	#beer_preview{padding-left: 121px;}
	    }	    
	    @media only screen and (max-width : 480px) and (min-width: 480px) {
	    	#label_preview{padding-left:90px;}
	    	#beer_preview{padding-left: 156px;}
	    }	
	    @media only screen and (max-width : 568px) and (min-width: 568px) {
	    	#beer_preview{padding-left: 201px;}
	    	#label_preview{padding-left: 130px;}
	    }		    
	    @media only screen and (max-width : 600px) and (min-width: 600px) {
	    	#beer_preview{padding-left: 213px;}
	    	#label_preview{padding-left: 150px;}
	    }		    
	    @media only screen and (max-width : 640px) and (min-width: 640px) {
	    	#beer_preview{padding-left: 235px;}
	    	#label_preview{padding-left: 170px;}
	    }		    
	    @media only screen and (max-width : 667px) and (min-width: 667px) {
	    	#beer_preview{padding-left: 250px;}
	    	#label_preview{padding-left: 195px;}
	    }		  
	    @media only screen and (max-width : 736px) and (min-width: 736px) {
	    	#beer_preview{padding-left: 284px;}
	    	#label_preview{padding-left: 220px;}
	    }		          	      
	    @media only screen and (max-width : 1024px) and (min-width: 1024px) {
	    	#beer_preview{padding-left: 63px;}
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

	<div id="main-wrapper" class="container-fluid">
		<div class="col-md-6 col-md-offset-3">
			<div class="col-md-6 col-sm-6 col-xs-12" id="label_preview">
				<div id="label-big" class="arco-preview arco-negro">
					<div id="label-big-border" class="arco-border-preview arco-border-blanco"></div>
					<div class="big-custome-text wordwrap" style="font-family:'Calligraffitti', cursive;"></div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12" id="beer_preview">
				<div id="label-small" class="arco arco-negro">
					<div id="label-small-border" class="arco-border arco-border-blanco"></div>					
					<div class="small-custome-text small wordwrap" style="font-family:'Calligraffitti', cursive;"></div>
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
						<form runat="server">
							<input class="form-control uploadimage" type="file">
						</form>
					</div>
				</div>
			</div>	      	
			<div class="col-md-12 col-xs-12 visible-sm visible-lg">
				<div class="col-md-5">
					<span class="col-md-2">Color:</span>
					<div class="col-md-10">
						<?php foreach ($label_color as $key => $value) { ?>
							<div class="col-md-1 color-block pointer" labelcolor="<?php echo $value['name'] ?>" style="background-color:<?php echo $value['color']?>"></div>
						<?php }?>
					</div>
				</div>
				<div class="col-md-2">
					<span class="col-md-5">Borde:</span>
					<div class="col-md-7">
						<?php foreach ($borde_color as $key => $value) { ?>
							<div class="col-md-1 border-color-block pointer" bordercolor="<?php echo $value['name'] ?>" style="background-color:<?php echo $value['color']?>"></div>
						<?php }?>
					</div>
				</div>
				<div class="col-md-5 text-right">
					<span class="col-md-5">O también:</span>
					<div class="col-md-5 text-left">
						<form runat="server">						
							<input class="form-control uploadimage" type="file">
						</form>
					</div>
				</div>
			</div>
	      </div>
	      <div class="tab-pane fade" id="text">
			<div class="col-md-2 col-md-offset-1">Escribe un texto:</div>
			<div class="col-md-6">
				<input type="text" id="label_text" autofocus  maxlength="150"  class="form-control" placeholder="la información de tu cerveza...">
			</div>
			<div class="col-md-2">
				<button type="button" class="btn btn-default" aria-label="Left Align" id="font-bigger">
				  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-default" aria-label="Left Align" id="font-smaller">
				  <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
				</button>
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
			  	<a href="#text" role="tab" data-toggle="tab" id="write-text-click"><img src="images/texto.png"></a>
			  </li>
			  <li role="presentation">
			  	<a href="#text_typography" role="tab" data-toggle="tab"><img src="images/tipografia.png"></a>
			  </li>			  			  
			</ul>
		</div>
		<input type="hidden" id="beer_type_value" name="beer_type_value">		
		<input type="hidden" id="label_type_value" name="label_type_value">		
		<input type="hidden" id="label_color_value" name="label_color_value">		
		<input type="hidden" id="border_color_value" name="border_color_value">		
		<input type="hidden" id="label_text_value" name="label_text_value">		
		<input type="hidden" id="label_image_value" name="label_image_value">		
		<input type="hidden" id="typography_type_value" name="typography_type_value">		
	</div>
</body>
<footer></footer>