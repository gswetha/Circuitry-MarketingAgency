<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Circuitry | Crafting Quality Brands</title>
</head>
<?php include_once($this->config->item('base_path') .'application/views/_header_styles.php'); ?>
<body style="padding:0; margin:0; position: relative; width:100%; height:100%;">
	<section class="block" style="width:100%; height:100%;">

		<div id="myServicesCarousel" class="carousel slide" data-ride="carousel" style="width:100%; height:100%;">
  		<!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myServicesCarousel" data-slide-to="0"></li>
		    <li data-target="#myServicesCarousel" data-slide-to="1" class="active"></li>
		  </ol>
		  <?php include_once($this->config->item('base_path') . 'application/views/_header_top_bar_services.php'); ?>
	        <div class="carousel-inner" style="width:100%; height:100%;">
	            <div id='services-page' class="item"> <!-- examples page 1 -->
	            	<?php include($this->config->item('base_path') . 'application/views/_services_menu.php'); ?>
	            </div>
	            <div id='services-page' class="item active"> <!-- examples page 2 -->
		            <?php include($this->config->item('base_path') . 'application/views/_services_menu.php'); ?>
	            	<div class="example-overview-1">
		            	<div class="example-overview-2 all-work-portfolio strategy-portfolio">
		            		<a href="#"><img src="/assets/img/camel thorn trees namibia.jpg" class="img-polaroid"></a>
		            	</div>
		            	<div class="example-overview-2 development-portfolio">
		            		<a href="#"><img src="/assets/img/camel thorn trees namibia.jpg" class="img-polaroid"></a>
		            	</div>
		            	<div class="example-overview-2 all-work-portfolio experiential-portfolio">
		            		<a href="#"><img src="/assets/img/background5_contact.png" class="img-polaroid example-overview-3"></a>
		            	</div>
		            </div>
	            </div>
	        </div>
	        <a class="left carousel-control" href="#myServicesCarousel" data-slide="prev"><img src="/assets/img/arrow_icon_left.png" id="arrow_icon"></a>
	        <a class="right carousel-control" href="#myServicesCarousel" data-slide="next"><img src="/assets/img/arrow_icon_right.png" id="arrow_icon"></a>
	    </div>
	</section>
</body>
<?php include_once($this->config->item('base_path') . 'application/views/_footer_script.php'); ?>
</html>
<script>
	$('#menu_nav').on('click', function(){
	  if ($(this).find("ul").is(':visible')) {
	  	$(this).find("ul").slideUp();
	  } else {
	  	$(this).find("ul").slideDown();
	  }
	})
</script>