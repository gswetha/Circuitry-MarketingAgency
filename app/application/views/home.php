<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Circuitry | Marketing Agency</title>
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
	            	<p>hello page 1</p>
	            </div>
	            <div id='page2' class="item active">
	            	<p>hello page 2</p>
	            </div>
	            <div id='page3' class="item">
	            	<p>hello page 3</p>
	            </div>
	            <div id='page4' class="item">
	            	<p>hello page 4</p>
	            </div>
	            <div id='page5' class="item">
	            	<p>hello page 5</p>
	            </div>
	            <div id='page6' class="item">
	            	<p>hello page 6</p>
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
	$('#menu_nav ul')
	.css({cursor: "pointer"})
	.on('click', function(){
	  $(this).find('ul').toggle();
	})
// $(document).ready(function() {
//   $('.carousel').carousel();
//   $('.carousel').on('slid', function() {
//     var to_slide = $('.carousel-inner .item.active').attr('id');
//     $('.carousel-indicators').children().removeClass('active');
//     $('.carousel-indicators [data-slide-to=' + to_slide + ']').addClass('active');
//   });
// });
// </script>