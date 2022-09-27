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
    include __DIR__ . '/Movie.php';
    include __DIR__ . '/Actor.php';

    $actor1 = new Actor('Ryan', '32', 'M');
    $actor2 = new Actor('Morena', '22', 'F');
    $actor3 = new Actor('Ed', '29', 'M');
    $actor4 = new Actor('Robert', '42', 'M');
    $actor5 = new Actor('Guy', '22', 'M');
    $actor6 = new Actor('Gwynenth', '54', 'M');
    $actor01 = new Actor('Ryan', '32', 'M');
    $actor02 = new Actor('Blake', '22', 'M');
    $actor03 = new Actor('Peter', '29', 'M');
    $actor04 = new Actor('Keanue', '42', 'M');
    $actor05 = new Actor('Laurance', '22', 'M');
    $actor06 = new Actor('Carrie-Anne', '54', 'M');

    $movies = [
        $movie1 = new Movie('deadpool-poster', 'Dead Pool', '4'),
        $movie2 = new Movie('iron-man-3', 'Iron Man 3', '4.5'),
        $movie3 = new Movie('lanterna-verde', 'Lanterna Verde', '1'),
        $movie4 = new Movie('matrix', 'Matrix', '5'),
    ];

    $movie1->addActor($actor1);
    $movie1->addActor($actor2);
    $movie1->addActor($actor3);
    $movie2->addActor($actor4);
    $movie2->addActor($actor5);
    $movie2->addActor($actor6);
    $movie3->addActor($actor01);
    $movie3->addActor($actor02);
    $movie3->addActor($actor03);
    $movie4->addActor($actor04);
    $movie4->addActor($actor05);
    $movie4->addActor($actor06);

    // var_dump($movie1->actors);
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
                                    foreach($movie->actors as $actor){
                                    ?>
                                    <li class="list_item">
                                        <?= $actor->name ?>
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