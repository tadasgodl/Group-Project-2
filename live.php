 <?php
$participant_names = [
    [
        'name' => 'Jonas Liudesys',
        'X' => rand(0,700),
        'Y' => rand(200,250),
        'bike_class' => 'race__participants-1'
    ],
    [
        'name' => 'Gintautas Berankis',
        'X' => rand(0,700),
        'Y' => rand(200,250),
        'bike_class' => 'race__participants-2'
    ],
    [
        'name' => 'Lukas Pamakstys',
        'X' => rand(0,700),
        'Y' => rand(200,250),
        'bike_class' => 'race__participants-3'
    ],
    [
        'name' => 'Gediminas Sudelynas',
        'X' => rand(0,700),
        'Y' => rand(200,250),
        'bike_class' => 'race__participants-4'
    ],
    [
        'name' => 'Aidas Gaidys',
        'X' => rand(0,700),
        'Y' => rand(200,250),
        'bike_class' => 'race__participants-5'
    ],
    [
        'name' => 'Antanas Lenkas',
        'X' => rand(0,700),
        'Y' => rand(200,250),
        'bike_class' => 'race__participants-6'
    ],
];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Live Results</title>
</head>
<body>
<header>
    <nav class="nav">
        <div class="nav__logo">
            <img class="nav__img" src="./images/bicycle.gif" alt="bicycle logo">
        </div>
        <ul class="nav__list">
            <li class="nav__item">
                <a href="./index.php" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
                <a href="./live.php" class="nav__link">LiveStream</a>
            </li>
            <li class="nav__item">
                <a href="./history.php" class="nav__link">History</a>
            </li>
            <li class="nav__item">
                <a href="./bloopers.php" class="nav__link">Bloopers</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <section class="race">
        <div class="race__container">
            <h1>Tour-de-pzdz</h1>
            <h2>Current Leader: </h2>
        </div>
        <?php foreach($participant_names as $racer): ?>
            <div  class="<?php print $racer['bike_class']; ?>"
                  style="left:<?php print $racer['X']; ?>px; bottom: <?php print $racer['Y']; ?>px;">
            </div>
        <?php endforeach; ?>
    </section>
</main>
</body>
</html>
