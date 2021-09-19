<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/index.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GS</title>
	</head>
	<body>
		<div class="header"><?php include_once "header.php";?></div>
		<div class="body"><?php
			switch ($_SERVER["REQUEST_URI"]) {
				case '/body': include_once "body.php"; break;
				case '/truck': include_once "towTruck.php"; break;
				case '/cargo': include_once "cargo.php"; break;
				case '/cleaning': include_once "cleaning.php"; break;
				default: include_once "body.php"; break;
			}?>
		</div>
		<div class="footer"><?php include_once "footer.php" ?></div>
	</body>
</html>
