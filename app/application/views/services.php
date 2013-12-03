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
		    <li data-target="#myServicesCarousel" data-slide-to="0" class="active"></li>
<!-- 		    <li data-target="#myServicesCarousel" data-slide-to="1" class="active"></li> -->
		  </ol>
		  <?php include_once($this->config->item('base_path') . 'application/views/_header_top_bar_services.php'); ?>
	        <div class="carousel-inner" style="width:100%; height:100%;">
	            <div id='services-page' class="item active"> <!-- examples page 1 -->
	            	<?php include($this->config->item('base_path') . 'application/views/_services_menu.php'); ?>
	            	<div class="example-overview-1">
		            	<div class="example-overview-2 all-work-portfolio creative-portfolio experiential-portfolio">
		            		<a href="/app/welcome/example_details/example_a"><img src="/assets/img/page3a_examples/example_a.png" class="img-polaroid"></a>
		            	</div>
		            	<div class="example-overview-2 all-work-portfolio strategy-portfolio development-portfolio">
		            		<a href="#"><img src="/assets/img/page3a_examples/example_b.png" class="img-polaroid"></a>
		            	</div>
		            	<div class="example-overview-2 all-work-portfolio experiential-portfolio">
		            		<a href="#"><img src="/assets/img/page3a_examples/example_c.png" class="img-polaroid example-overview-3"></a>
		            	</div>
		            </div>
	            </div>
	            <!-- <div id='services-page' class="item"> --> <!-- examples page 2 -->
		            <?php //include($this->config->item('base_path') . 'application/views/_services_menu.php'); ?>
<!-- 	            	<div class="example-overview-1">
		            	<div class="example-overview-2 all-work-portfolio strategy-portfolio">
		            		<a href="#"><img src="/assets/img/page3a_examples/example_d.png" class="img-polaroid"></a>
		            	</div>
		            	<div class="example-overview-2 all-work-portfolio development-portfolio">
		            		<a href="#"><img src="/assets/img/page3a_examples/example_e.png" class="img-polaroid"></a>
		            	</div>
		            	<div class="example-overview-2 all-work-portfolio experiential-portfolio">
		            		<a href="#"><img src="/assets/img/page3a_examples/example_f.png" class="img-polaroid example-overview-3"></a>
		            	</div>
		            </div>
	            </div> -->
	        </div>
<!-- 	        <a class="left carousel-control" href="#myServicesCarousel" data-slide="prev"><img src="/assets/img/arrow_icon_left.png" id="arrow_icon"></a>
	        <a class="right carousel-control" href="#myServicesCarousel" data-slide="next"><img src="/assets/img/arrow_icon_right.png" id="arrow_icon"></a> -->
	    	<a class="left carousel-control" href="#myServicesCarousel" data-slide="prev"></a>
	        <a class="right carousel-control" href="#myServicesCarousel" data-slide="next"></a>
	    </div>
	</section>
</body>
<?php include_once($this->config->item('base_path') . 'application/views/_footer_script.php'); ?>
</html>
<script>
	$(document).ready(function(){
		var elementID = '<?php echo $load_type; ?>';
		//alert(elementID);
		switch (elementID) 
    	{
    		case 'all':
    			$("#all-work-example").trigger('click');
    			break;
    		case 'strategy':
    			$("#strategy-example").trigger('click');
    			break;
    		case 'creative':
    			$("#creative-example").trigger('click');
    			break;
    		case 'development':
    			$("#development-example").trigger('click');
    			break;
    		case 'experiential':
    			$("#experiential-example").trigger('click');
    			break;

    	}
	});

	$('#menu_nav').on('click', function(){
	  if ($(this).find("ul").is(':visible')) {
	  	$(this).find("ul").slideUp();
	  } else {
	  	$(this).find("ul").slideDown();
	  }
	})
</script>