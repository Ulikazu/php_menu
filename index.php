<!DOCTYPE html>
<html>
<head>
	<title>PHP Menu Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- we include the menu script -->
	<?php include 'includes/menu.php'; ?>


		<?php
			
			// we set the contents of the page based on the get paremeter.
			if (isset($_GET['page'])) {
				include 'pages/' . $_GET['page'] . '.php';
			} else {
				echo "<p>home</p>";
			}
			
		?>

</body>
</html>
