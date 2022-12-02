<?php

$input = explode("\n\n", trim(file_get_contents('input.txt')));

$elves = array_map(fn($e) => array_sum(explode("\n", $e)), $input);
rsort($elves);

printf("Elf with most food has %d calories\n", $elves[0]);
