<!DOCTYPE html>
<html>
<head>
	<title>PHP Menu Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include 'includes/menu.php'; ?>


		<?php
			
			if (isset($_GET['page'])) {
				include 'pages/' . $_GET['page'] . '.php';
			} else {
				echo "<p>home</p>";
			}
			
		?>

</body>
</html>
