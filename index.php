<?php
$participants = [
        [
            'name' => 'Jonas',
            'surname' => 'Liudesys',
            'image' => './images/wheelchair1.jpg',
            'wins' => rand(1, 20),
            'loss' => rand(1, 40)
        ],
        [
            'name' => 'Gintautas',
            'surname' => 'Gaidys',
            'image' => './images/wheelchair2.jpg',
            'wins' => rand(1, 20),
            'loss' => rand(1, 40)
        ],
        [
            'name' => 'Lukas',
            'surname' => 'Pakupstas',
            'image' => './images/wheelchair3.jpg',
            'wins' => rand(1, 20),
            'loss' => rand(1, 40)
        ],[
            'name' => 'Gediminas',
            'surname' => 'Pamakstys',
            'image' => './images/wheelchair4.jpg',
            'wins' => rand(1, 20),
            'loss' => rand(1, 40)
        ],[
            'name' => 'Aidas',
            'surname' => 'Berankis',
            'image' => './images/wheelchair5.jpg',
            'wins' => rand(1, 20),
            'loss' => rand(1, 40)
        ],[
            'name' => 'Antanas',
            'surname' => 'Lenkas',
            'image' => './images/wheelchair6.jpg',
            'wins' => rand(1, 20),
            'loss' => rand(1, 40)
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
    <title>Home Page</title>
    <link rel="stylesheet" href="./css/style.css">
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
    <main>
        <section class="participants">
            <h1 class="participants__title">Participants</h1>
            <div class="participants__positioning">
            <?php foreach ($participants as $participant): ?>
                <div class="section-div">
                    <img src="<?php print $participant['image']; ?>" alt="">
                    <p><?php print $participant['name'] . ' ' . $participant['surname']; ?></p>
                    <p>W/L: <?php print $participant['wins']; ?>/<?php print $participant['loss']; ?></p>
                </div>
            <?php endforeach; ?>
            </div>
        </section>
    </main>
</body>
</html>
