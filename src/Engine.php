<?php

namespace BrainGames\startGame;

const MIN_RANGE = 1;
const MAX_RANGE = 100;
const ROUND_COUNT = 3;

use function cli\line;
use function cli\prompt;

function startGame($gameDate, $ruls)
{
    line('Welcome to the Brain Games!');
    $name = prompt("May I have your name?\n");
    line("Hello, {$name}!");
    line($ruls);

    for ($i = 0; $i < ROUND_COUNT; $i++) {
        [$question,$answer] = $gameDate();
        line("Question: {$question}\n");
        $useranswer = prompt("Your answer:\n");

        if ($useranswer === $answer) {
            line("Correct! {$name}\n");
        } elseif ($useranswer !== $answer) {
            line("'{$useranswer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let's try again, {$name}!\n");
            exit;
        }
    }
    return line("Congratulations, {$name}!");
}
