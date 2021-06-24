<!DOCTYPE html>
<html>
<head>
    <title>BATMAN</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link rel="shortcut icon" href="img/favicon.png" />
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<style>
		.intro h1:before {
			/* Edit this with your name or anything else */
			content: 'BATMAN';
		}
	</style>
</head>
<body>
	<!-- Navigation -->
	<div class="main-nav">
		<?php include 'menu.inc.php' ?>
	</div>
	<!-- Introduction -->
	<div class="intro section" id="about">
		<div class="container">
			<p>Hi, I’m <?php echo $name, ' ',$surname ?></p>
			<div class="units-row units-split wrap">
				<div class="unit-20">
					 <?php  echo '<img src="img/batava.jpeg" alt="Avatar">'; ?>					
				</div>
				<div class="unit-80">
					<h1>I live in<br><span id="typed"></span></h1>
				</div>
				<p>
					<?php echo $intro ?>
				</p>
			</div>
		</div>
	</div>


	<!-- Knowledge -->
	<div class="skills section second" id="knowledge">
		<div class="container">
			<?php  include 'knowledge.inc.php'; ?>
            <h1>Knowledge</h1>
            
            <?php foreach ($skills as $key => $value) { ?>
			<ul class="skill-list list-flat">
				<li><?php echo $key; ?></li>
				<li>
					<?php 
						$last = end($value);
						foreach ($value as $v) {
							if($last == $v) {
								echo $v;
							} else {
								echo $v, ' / ';	
							}							
						} 
					?>
				</li>
			</ul>
			<?php } ?>
		</div>
	</div>
	
	<?php include 'footer.inc.php' ?>

	<!-- Javascript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/typed.min.js"></script>
    <script src="js/kube.min.js"></script>
    <script src="js/site.js"></script>
    <script>
		function newTyped(){}$(function(){$("#typed").typed({
		// Change to edit type effect
		strings: ["Gotham City", "everywhere"],

		typeSpeed:90,backDelay:700,contentType:"html",loop:!0,resetCallback:function(){newTyped()}}),$(".reset").click(function(){$("#typed").typed("reset")})});
    </script>
</body>
</html>
