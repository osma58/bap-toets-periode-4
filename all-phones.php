<?php
$connect  = Dbconnect();
require __DIR__ . '/../private/functions.php';
require __DIR__ . '/../private/model.php';


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
    <h1>ALL our Fancy Phones</h1>
    <p class="sale-offer--all">
        Here are ALL of the phones for you to grab hold off.
    </p>

    <section class="phones">
        <a href="latest-phones.php" class="button">Back to the homepage</a>
		<?php
		$sql       = "SELECT * FROM `phones`";
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
        <a href="latest-phones.php" class="button">Back to the homepage</a>
    </section>
</div>
</body>
</html>