<?php

namespace BrainGames\even;

use function cli\line;
use function cli\prompt;

function getRightAnwer()
{
    line('Welcome to the Brain Games!');
        $name = prompt("May I have your name?\n");
        line("Hello, {$name}!");
        line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

    for ($i = 0; $i < 3; $i++) {
            $randcount = random_int(1, 10);
            line("Question: {$randcount}");
            $useranswer = prompt("Your answer:\n");
            $useranswer = strtolower($useranswer);
            $rightanwem = '';
        switch (true) {
            case $randcount % 2 == 0:
                $rightanwem = 'yes';
                break;
            case $randcount % 2 !== 0:
                $rightanwem = 'no';
                break;
            default:
                throw new \Exception('Нужно использовать только Yes и No');
        }
        if ($useranswer === $rightanwem) {
                echo "Correct!\n";
        } else {
                 line("'{$useranswer}' is wrong answer ;(. Correct answer was '{$rightanwem}'.");
                 line("Let's try again, {$name}!\n");
                 exit;
        }
    }
         echo "Congratulations, {$name}!";
}
     //getRightAnwer();
