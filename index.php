<?php session_start(); ?>

<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Great Number Game</title>
		<style type="text/css">
			body {
				text-align: center;
			}
			div {
				color: #fff;
				font-size: 20px;
				font-weight: bold;
				width: 200px;
				height: 150px;
				text-align: center;
				margin: 0 auto;
				padding-top: 50px;
			}
			.wrong {
				background-color: red;
			}
			#right {
				background-color: green;
			}
		</style>
	</head>
	<body>
		<h2>Welcome to the Great Number Game!</h2>
		<h4>I am thinking of a number between 1 and 100</h4>
		<h4>Take a guess!</h4>
		<?php 

			if (isset($_SESSION["number"]) && isset($_SESSION["guess"])) {
				if ($_SESSION["guess"] < $_SESSION["number"]) { ?>
					<div class="wrong">
						<p>Too low!</p> 
					</div>
				<?php }
				elseif ($_SESSION["guess"] > $_SESSION["number"]) { ?>
					<div class="wrong">
						<p>Too high!</p> 
					</div>
				<?php }
				else { ?>
					<div id="right">
						<p><?php echo $_SESSION["number"]?> was the number!</p>
						<form action="process.php" method="post">
							<input type ="submit" value="Play again!" name="play_again">
						</form> 
					</div>
					<?php unset($number, $guess);	
				}
			}; ?>	
		</div>
		<?php if (!isset($_SESSION["play_again"])) { ?>
				<form action="process.php" method="post">
					<input type="text" name="guess"><br>
					<input type="submit" name="submit">
				</form>
		<?php } ?>
		
	</body>
</html>