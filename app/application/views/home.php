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
		    <li data-target="#myCarousel" data-slide-to="0"></li>
		    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		    <li data-target="#myCarousel" data-slide-to="4"></li>
		    <li data-target="#myCarousel" data-slide-to="5"></li>
		  </ol>
		  <?php include_once($this->config->item('base_path') . 'application/views/_header_top_bar.php'); ?>
	        <div class="carousel-inner" style="width:100%; height:100%;">
	            <div id='page1' class="item">
	            </div>
	            <div id='page2' class="item active">
<!-- 	            	<div class="profile-image">
					  <a href="#"><img src="/assets/img/page2/creative_icon.png" /></a>
					  <span class="overlay"> <img src="/assets/img/page2/creative_icon_overlay.png" /> </span>
					</div> -->
					<div class="top top-strategy">
						<div class="first"><img src="/assets/img/page2/strategy_icon.png" /></div>
					    <div class="second"><img src="/assets/img/page2/strategy_icon_overlay.png" alt="Overlay Image" /></div>
					</div>

					<div class="top top-creative">
						<div class="first"><img src="/assets/img/page2/creative_icon.png" /></div>
					    <div class="second"><img src="/assets/img/page2/creative_icon_overlay.png" alt="Overlay Image" /></div>
					</div>

					<div class="top top-development">
						<div class="first"><img src="/assets/img/page2/development_icon.png" /></div>
					    <div class="second"><img src="/assets/img/page2/development_icon_overlay.png" alt="Overlay Image" /></div>
					</div>

					<div class="top top-experimential">
						<div class="first"><img src="/assets/img/page2/experimential_icon.png" /></div>
					    <div class="second"><img src="/assets/img/page2/experimential_icon_overlay.png" alt="Overlay Image" /></div>
					</div>

	            </div>
	            <div id='page3' class="item">
	            </div>
	            <div id='page4' class="item">
	            </div>
	            <div id='page5' class="item">
	            </div>
	            <div id='page6' class="item">
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