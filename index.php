<?php

include __DIR__.'/movie.php';

$movie1 = new Movie('Dead Pool', '2010', '1.2', '3');

echo $movie1->get_info();

$movie1->set_title('pablo');

echo $movie1->get_info();