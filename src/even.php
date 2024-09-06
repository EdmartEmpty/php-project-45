<?php

namespace BrainGames\even;

use function BrainGames\startGame\startGame;

use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

function getRightAnwer()
{
    $ruls ="Answer \"yes\" if the number is even, otherwise answer \"no\".";

    $gameDate = function () {
        $question = random_int(MIN_RANGE, MAX_RANGE);
        $answer = $question % 2 == 0 ? "yes" : "no";
        return [$question, $answer];
    };
    startGame($gameDate, $ruls);
}
