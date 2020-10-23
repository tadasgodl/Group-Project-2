<?php
$racers_names = [
    'Jonas',
    'Gintautas',
    'Lukas',
    'Gediminas',
    'Aidas',
    'Antanas'
];

$racers_surnames = [
    'Liudesys',
    'Gaidys',
    'Pakupstas',
    'Pamakstys',
    'Berankis',
    'Lenkas'
];

$name = array_rand($racers_names);
$first_name = $racers_names[$name];

$surname = array_rand($racers_surnames);
$last_name = $racers_surnames[$surname];

$full_name = "$first_name $last_name";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Merriweather+Sans&display=swap" rel="stylesheet">
    <title>TOUR DE PZDC</title>
    <style>
        .history__background {
            background-image: url("https://cyclingtips.com/wp-content/uploads/2019/10/85C_6110.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 800px;
        }
        .racer {
            font-size: 35px;
            font-family: 'Anton', sans-serif;
        }
        .leaderboard {
            padding-left: 400px;
        }
        .title {
            color: red;
            font-size: 45px;
            font-family: 'Merriweather Sans', sans-serif;
        }
        .medal {

        }
    </style>
</head>
<body >
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
                <a href="./live.php" class="nav__link">Live Stream</a>
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
<section class="history__background">
    <section class="leaderboard">
        <h1 class="title">History of champions</h1>
        <ul class="list">
            <?php foreach ($racers_names as $first_name): ?>
                <?php foreach ($racers_surnames as $last_name): ?>
                    <li class="racer"><?php print $full_name ?></li>
                    <?php break;?>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
    </section>
</section>
</body>
</html>