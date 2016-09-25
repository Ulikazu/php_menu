<?php

// Get the current page by checking what the property "page" of what the get request is
$currentPage = isset($_GET['page']) ? $_GET['page'] : 'home';
$pages = scandir('pages/');
$pages = array_splice($pages, 2);

if (isset($_GET['page'])) {
	$currentPage = $_GET['page'];
} else {
	$currentPage = 'home';
}

?>

<header>
	<div class="container">
		<a class="logo" href="<?= 'http://' . $_SERVER['HTTP_HOST']; ?>">Panels<sup>&copy;</sup></a>
		<ul>
			<?php 

				foreach ($pages as $page) {
					$page = basename($page,".php");

					?>

						<li><a href="<?= '?page=' . $page ?>" class="<?= $currentPage == $page ? 'active' : '' ?>"><?= ucfirst($page) ?></a></li>

					<?php
				}

			 ?>
		</ul>
	</div>
</header>