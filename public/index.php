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
    Item::make(
        'Green iphone 11', 
        'iphone-11.webp',
        'A front facing green iphone 11'
    ),
    Item::make(
        'Nintendo Switch 2', 
        'nintendo-switch-2.webp',
        'A Nintendo Switch 2 with the game Mario Kart world'
    ),
    Item::make(
        'Green armchair', 
        'green-armchair.webp',
        'A bright green armchair from IKEA. It\'s rounded and plush with a metal feet'
    ),
    Item::make(
        'Red armchair', 
        'red-armchair.webp',
        'A bright red armchair from IKEA. It\'s got wooden armrests that extend as a base'
    ),
    Item::make(
        'Air pods 2', 
        'airpods-2.webp',
        'The charging box of air pods 2 seen from the back'
    ),
    Item::make(
        'Nike shoes with green swoosh', 
        'nike-green-swoosh.webp',
        'A pair of white Nike shoes with green swoosh and sole'
    ),
    Item::make(
        'Green Imac + keyboard and mouse', 
        'green-imac.webp',
        'A green 2021 apple Imac with the matching magic mouse and matching keyboard'
    ),
    Item::make(
        'Climax — Rage against the facism', 
        'climax-ratf.webp',
        'A orange magazine cover titled &quot;Climax Rage Against The Facism&quot;. The word fascism is breaking a Tesla Cyber Truck in half. There is some subtext under the Cyber Truck'
    ),
    Item::make(
        'DAK—Saint-Tropez', 
        'dak-saint-tropez.webp',
        'A yellow and white striped cardboard cofee box. On top is a white rectangular sticker that seals the box with Saint-Tropez written on it. On the front of the box is another sticker of a drawing of a person drinking a cup of coffee looking satisfied'
    ),
    Item::make(
        'La vie secrète des arbres—Peter Wohlleben', 
        'la-vie-secrete-des-arbres.webp',
        'The cover of the book &quot;La vie Secrète des Arbres&quot; by Peter Wohlleben. The background image is a fores. The name of the author is written in yellow above the title in white. At the bottom is a book banner with some text promoting the book and the amount of readers it got.'
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
        <p class="app__description">The place where I put pictures of stuff that I own and that I like. It's a bit like a digital inventory for my real life self.<br>Some of the stuff is consumable, so I might not have it anymore.</p>
        <div class="app__items">
            <?php foreach($items as $item): ?> 
                <?= $item->render() ?>
            <?php endforeach ?>
        </div>
    </body>
</html>
