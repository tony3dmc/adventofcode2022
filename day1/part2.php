<?php

$input = explode("\n\n", trim(file_get_contents('input.txt')));

$elves = array_map(fn($e) => array_sum(explode("\n", $e)), $input);
rsort($elves);

printf("Top 3 elves with most food have %d calories\n", $elves[0] + $elves[1] + $elves[2]);
