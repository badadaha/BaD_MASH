<html>
	
<?php
	
	if(isset($_REQUEST["hide"]) && !empty($_REQUEST["hide"])){
		$category = array();
		$category["1"] = $_REQUEST["cat1"];
		$category["2"] = $_REQUEST["cat2"];
		$category["3"] = $_REQUEST["cat3"];
		
		print $category["1"];
	}
	
?>
	
	<head>
		
		<link rel="stylesheet" href="style.css" />
		<style type="text/css">
			div.categories{
				width: 50%;
				height: auto;
				
				margin: 0 auto;
				padding: 0;
				float: none;
				clear: both;
				
				display: box;
			}
			form{
				width: 100%;
				
				margin: 0;
				padding: 0;
			}
			div.category{
				margin: 15px;
				padding: 0;
				float: left;
			}
			.category h2{
				font-family: Arial;
			}
			.category textarea{
				width: 15em;
				height: 10em;
				
				font-size: 0.8em;
				font-family: Arial;
			}
			.category input{
				margin: 0;
				padding: 0;
				float: none;
				clear: both;
			}
		</style>
		
	</head>
	
	<body>
		
		<div class="header-container">
			M.A.S.H
		</div>
		<div class="body-container">
			<form action="" method="POST">
				<input type="hidden" name="hide" value="1" />
				<div class="categories">
					<div class="category">
						<h2>SPOUSE</h2>
						<textarea name="cat1"></textarea>
					</div>
					<div class="category">
						<h2>KID #</h2>
						<textarea name="cat2"></textarea>
					</div>
					<div class="category">
						<h2>CAR</h2>
						<textarea name="cat3"></textarea>
					</div>
				</div>
				<input type="submit" value="SAVE" />
			</form>
		</div>
		
	</body>
	
</html>