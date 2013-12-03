<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Circuitry | Crafting Quality Brands</title>
</head>
<?php include_once($this->config->item('base_path') .'application/views/_header_styles.php'); ?>
<body id="example-a-details" style="padding:0; margin:0; position: relative; width:100%; height:100%;">
	<section class="block" style="width:100%; height:100%;">
	  <?php include_once($this->config->item('base_path') . 'application/views/_header_top_bar_examples.php'); ?>
	       
	</section>
</body>
<?php include_once($this->config->item('base_path') . 'application/views/_footer_script.php'); ?>
<script>
	$('#menu_nav').on('click', function(){
	  if ($(this).find("ul").is(':visible')) {
	  	$(this).find("ul").slideUp();
	  } else {
	  	$(this).find("ul").slideDown();
	  }
	})
</script>
</html>
