<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        OOP PHP
    </title>
</head>

<body>
    <?php

    include __DIR__ . '/Movie.php';

    $movie1 = new Movie('Dead Pool', '2010', '1.2', '3');
    ?>

    <ul>
        <li>
            Originale: <br>
            <?= $movie1->get_info() ?>
        </li>
        <?php
        $movie1->set_title('Pablo');
        ?>
        <li>
            Modificato: <br>
            <?= $movie1->get_info() ?>
        </li>
    </ul>

</body>

</html>