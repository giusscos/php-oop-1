<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>
        OOP PHP
    </title>
</head>

<body>
    <?php
    include __DIR__ . '/movie.php';

    $movies = [
        $movie1 = new Movie('deadpool-poster', 'Dead Pool', '4', ['Ryan', 'Morena', 'Ed']),
        $movie2 = new Movie('iron-man-3', 'Iron Man 3', '4.5', ['Robert', 'Guy', 'Gwynenth']),
        $movie3 = new Movie('lanterna-verde', 'Lanterna Verde', '1', ['Ryan', 'Blake', 'Peter']),
        $movie4 = new Movie('matrix', 'Matrix', '5', ['Keanue', 'Laurence', 'Carrie-Anne']),
    ];
    ?>
    <main>
        <div class="container">
            <ul class="list_wrapper">
                <?php
                foreach ($movies as $key => $movie) {
                ?>
                    <li class="list_item">
                        <a href="#" class="item_link">
                            <div class="img_wrapper">
                                <img src="./assets/<?= $movie->get_poster() ?>.jpg" alt="poster <?= $movie->get_title() ?>">
                            </div>
                            <h3>
                                <?= $movie->get_title() ?>
                            </h3>
                            <p>
                                Valutazione: <?= $movie->get_vote() ?>/5
                            </p>
                            <span class="cast_wrapper ">
                                Top 3 Stars:
                                <ul class="list_cast">
                                    <?php
                                    foreach ($movie->get_cast() as $actor) {
                                    ?>
                                        <li class="list_item">
                                            <?= $actor ?>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </span>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </main>
</body>

</html>