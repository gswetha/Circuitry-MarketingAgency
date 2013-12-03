<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Circuitry | Crafting Quality Brands</title>
</head>
<?php include_once($this->config->item('base_path') .'application/views/_header_styles.php'); ?>
<body style="padding:0; margin:0; position: relative; width:100%; height:100%;">
	<section class="block" style="width:100%; height:100%;">

		<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%; height:100%;">
  		<!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		    <li data-target="#myCarousel" data-slide-to="4"></li>
		    <li data-target="#myCarousel" data-slide-to="5"></li>
		  </ol>
		  <?php include_once($this->config->item('base_path') . 'application/views/_header_top_bar.php'); ?>
	        <div class="carousel-inner" style="width:100%; height:100%;">
	            <div id='page1' class="item active"> <!-- home page -->
	            </div>
	            <div id='page2' class="item"> <!-- about page -->
	            	<div class="top-about top-process">
						<div class="first"><img src="/assets/img/page2_about/process_icon.png" /></div>
					    <div class="second"><img src="/assets/img/page2_about/process_icon_overlay.png" alt="Overlay Image" /></div>
					</div>
					<div class="top-about top-services">
						<div class="first"><img src="/assets/img/page2_about/services_icon.png" /></div>
					    <div class="second"><img src="/assets/img/page2_about/services_icon_overlay.png" alt="Overlay Image" /></div>
					</div>
					<div class="top-about top-values">
						<div class="first"><img src="/assets/img/page2_about/values_icon.png" /></div>
					    <div class="second"><img src="/assets/img/page2_about/values_icon_overlay.png" alt="Overlay Image" /></div>
					</div>
	            </div>
	            <div id='page3' class="item"> <!-- services page -->
					<div class="top top-strategy">
						<div class="first"><img src="/assets/img/page3_services/strategy_icon.png" /></div>
					    <div class="second"><a href="/app/welcome/services/strategy"><img src="/assets/img/page3_services/strategy_icon_overlay.png" alt="Overlay Image" /></a></div>
					</div>

					<div class="top top-creative">
						<div class="first"><img src="/assets/img/page3_services/creative_icon.png" /></div>
					    <div class="second"><a href="/app/welcome/services/creative"><img src="/assets/img/page3_services/creative_icon_overlay.png" alt="Overlay Image" /></a></div>
					</div>

					<div class="top top-development">
						<div class="first"><img src="/assets/img/page3_services/development_icon.png" /></div>
					    <div class="second"><a href="/app/welcome/services/development"><img src="/assets/img/page3_services/development_icon_overlay.png" alt="Overlay Image" /></a></div>
					</div>

					<div class="top top-experiential">
						<div class="first"><img src="/assets/img/page3_services/experimential_icon.png" /></div>
					    <div class="second"><a href="/app/welcome/services/experiential"><img src="/assets/img/page3_services/experimential_icon_overlay.png" alt="Overlay Image" /></a></div>
					</div>
	            </div>
	            <div id='page4' class="item"> <!-- approach page -->
	            </div>
	            <div id='page6' class="item"> <!-- pricing page -->
	            </div>
	            <div id='page5' class="item"> <!-- contact page -->
	            	<div class="top top-facebook">
						<div class="first"><img src="/assets/img/facebook_icon.png" /></div>
					    <div class="second"><a href="#"><img src="/assets/img/facebook_icon_overlay.png" alt="Overlay Image" /></a></div>
					</div>
					<div class="top top-twitter">
						<div class="first"><img src="/assets/img/twitter_icon.png" /></div>
					    <div class="second"><a href="#"><img src="/assets/img/twitter_icon_overlay.png" alt="Overlay Image" /></a></div>
					</div>
	            </div>
	        </div>
	        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="/assets/img/arrow_icon_left.png" id="arrow_icon"></a>
	        <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="/assets/img/arrow_icon_right.png" id="arrow_icon"></a>
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