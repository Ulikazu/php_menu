<?php

// Get the current page by checking what the property "page" of what the get request is
$currentPage = isset($_GET['page']) ? $_GET['page'] : 'home';

// scan the pages directory for pages
$pages = scandir('pages/');

// we remove the first to items in the pages array that consist of references to the current directory and the parent directory
$pages = array_splice($pages, 2);

?>

<header>
	<div class="container">
		<!-- we set the hyperlink reference to be equal to the hostname and subdirectory php_menu. the downside is that it assumes the index.php of the site is placed in exactly this path, and doesn't respect the use of subdomains -->
		<a class="logo" href="<?= 'http://' . $_SERVER['HTTP_HOST'] . '/php_menu' ?>">Panels<sup>&copy;</sup></a>
		<ul>
			<?php 
				// we initiate a foreach loop where we loop over our array of pages
				foreach ($pages as $page) {

					// we start by stripping out the file extension on the item
					$page = basename($page,".php");

					?>
						<!-- then, we set the reference to be a get paremeter followed by the title of the page. the class name is an if statement which sets the active class if the condition of the current page being equal to the page we are looping over evaluates to true. -->

						<!-- afterwards, we capitalize the first letter of the page name and put that as the menu item name -->
						<li><a href="<?= '?page=' . $page ?>" <?= $currentPage == $page ? 'class="active"' : '' ?>><?= ucfirst($page) ?></a></li>

					<?php
				}

			 ?>
		</ul>
	</div>
</header>