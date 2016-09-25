<?php 



?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Menu Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
		
		a.active {
			font-size: 25px;
		}
	</style>
</head>
<body>
	<?php 
		include 'includes/menu.php';
		
		if (isset($_GET['page'])) {
			include 'pages/' . $_GET['page'] . '.php';
		} else {
			echo "<p>home</p>";
		}
		
	?>

</body>
</html>
