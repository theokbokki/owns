<?php

require __DIR__.'/../vendor/autoload.php';

use Theokbokki\Owns\Components\Item;

$items = [
    Item::make(
        'Orange miffy book', 
        'le-monde-de-miffy.webp',
        'An orange Miffy book with at the center, Miffy playing with a beach ball in her blue dress and at the top the title &quot;Le monde de miffy&quot; written in orange'
    ),
    Item::make(
        'Clear casio watch', 
        'clear-casio.webp',
        'A casio digital watch with a clear bracelet and a white watch face'
    ),
];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Owns</title>

        <link rel="stylesheet" href="<?= asset('css/app.css') ?>">
    </head>
    <body class="app">
        <h1 class="app__title">Owns</h1>
        <p class="app__description">The place where I put pictures of stuff that I own and that I like. It's a bit like a digital inventory for my real life self.</p>
        <div class="app__items">
            <?php foreach($items as $item): ?> 
                <?= $item->render() ?>
            <?php endforeach ?>
        </div>
    </body>
</html>
