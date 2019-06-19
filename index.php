<?php
require __DIR__ . '/../private/functions.php';
require __DIR__ . '/../private/model.php';
require __DIR__ . '/../private/controllers.php';


$page = '404';

if (isset( $_GET['page'] ) ) {
	$page = $_GET['page'];
}

switch ( $page ) {
	case 'latest':
		latest_phones();
		break;
	case 'all':
		all_phones();
		break;
	case '404':
		?>
		Lees het bestand <em>Toets.md</em> om de code werkend te maken.<br/>Daarna kun je naar <a href="index.php?page=latest">index.php?page=latest</a> of <a href="index.php?page=all">index.php?page=all</a>
		<?php
		break;
}