<?php
$connect  = Dbconnect();
require __DIR__ . '/../private/functions.php';
require __DIR__ . '/../private/model.php';

try {
	$pdo = new PDO( 'mysql:host=localhost;dbname=bap-toets-p4;charset=utf8', 'root', 'root' );
	$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
} catch ( PDOException $e ) {
	echo $e->getFile() . ' on line ' . $e->getLine() . ': ' . $e->getMessage();
	exit();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>phones</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <h1>Latest Shiny Phones</h1>
    <p class="sale-offer">
        Here are our 4 latest coolest dopest finest limited edition phones for you to admire.
        Grab your purse and start buying. Limited stock. Act fast!
    </p>

    <section class="phones">
        <a href="all-phones.php" class="button">See all our phones</a>
		<?php
		$sql       = "SELECT * FROM `phones` LIMIT 4";
		$statement = $pdo->query( $sql );
		?>
		<?php foreach ( $statement as $phone ): ?>
            <article>
                <h2><?php echo $phone['brand'] ?></h2>
                <h3><?php echo $phone['model'] ?></h3>
                <figure>
                    <span class="color"><?php echo $phone['color'] ?></span>
                    <img src="images/<?php echo $phone['image'] ?>" alt="" class="fluid-img"/>
                </figure>
                <span class="price">$<?php echo $phone['price'] ?></span>
                <p>
					<?php echo $phone['description'] ?>
                </p>
            </article>
		<?php endforeach; ?>
        <a href="all-phones.php" class="button">See all our phones</a>
    </section>
</div>
</body>
</html>