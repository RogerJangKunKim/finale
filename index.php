<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
</head>
<body>
	<nav class="projectlink1">
		<ul class="projectlink2">
			<li class="projectlink3">
				<a class="projectlink4" href="#screen2"><strong>Game</strong></a>	
			</li>
			<li class="projectlink3">
				<a class="projectlink4" href="#screen3"><strong>Instagram</strong></a>	
			</li>
			<li class="projectlink3">
				<a class="projectlink4" href="#screen4"><strong>Blog</strong></a>	
			</li>
		</ul>
	</nav>
	<div id="opacity">
		<div id="header">
			<h2><strong>"Damn it Roger, you're so asian."</strong></h2>
			<h3><strong>- Dan</strong></h3>
			<!-- <br><h3><strong>The start of a legend.</strong></h4> -->
		</div>
	</div>
	<div id="screen2">
		<div id="body1">
			
		</div>
		<div id="body15">
		<a class="weblink" href="../AwesomenautsKnockOff/index.php">WHOO</a>
		</div>
	</div>
	<div id="screen3">
		<div id="body2">
			
		</div>
		<div id="body25">
			<a class="weblink" href="../appapi/index.php">WHOO</a>
		</div>
	</div>
	<div id="screen4">
		<div id="body3">
			
		</div>
		<div id="body35">
			<a class="weblink" href="../blog/index.php">WHOO</a>
		</div>
	</div>
	<?php 
	require_once(__DIR__."/model/config.php");
	?>
	<div id="screen5">
		<div id="body4">
			<h1 class="whitefont">Contact</h1>
			<form method="post" action="<?php echo $path.'controller/create-post.php'; ?>">
				<div>
					<label class="whitefont" for="username">Email: </label>
					<input type="text" name="username" placeholder ="Email"/>
				</div>
				<div class="whitefonts">
				<!-- text area lets you inpur more text than label.  -->
					<p><label class="whitefont" for="post">Message: </label>
					<textarea name="post"></textarea>
				</div>
				<div>
					<button type="submit">Submit</button>
				</div>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow59.js"></script>
</body>
</html>
