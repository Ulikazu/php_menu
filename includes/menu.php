<?php
// 
$currentPage = isset($_GET['page']) ? $_GET['page'] : 'home';
$pages = scandir('pages/');
$pages = array_splice($pages, 2);

?>

<header>
	<ul>
		<?php 

			foreach ($pages as $page) {
				$page = basename($page,".php");

				?>

					<li><a href="<?= '?page=' . $page ?>" class="<?= $currentPage == $page ? 'active' : '' ?>"><?= $page ?></a></li>

				<?php
			}

		 ?>
	</ul>
</header>