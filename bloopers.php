<?php
    $images = [
        './images/giphy',
        './images/giphy2',
        './images/giphy3',
        './images/giphy4',
        './images/giphy5',
        './images/giphy6'
]
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloopers</title>
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
    <main class="main">
        <h1 class="bloopers__title">Bloopers</h1>
        <section class="bloopers">
        <?php foreach ($images as $image): ?>
            <img src="<?php print $image; ?>" alt="" class="gif">
        <?php endforeach; ?>
        </section>
    </main>
</body>
</html>