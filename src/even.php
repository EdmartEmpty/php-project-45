<?php

namespace BrainGames\even;

use function BrainGames\startGame\startGame;

use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

function getRightAnwer()
{
    $ruls ="Answer \"yes\" if the number is even, otherwise answer \"no\".";

    $gameDate = function () {
        $question = random_int(MIN_RANGE, MAX_RANGE);
        $answer = '';
        switch (true){
        case $question % 2 == 0:
            $answer = 'yes';
            break;
        case $question % 2 !== 0:
            $answer = 'no';
            break;
        default:
            throw new \Exception('Нужно использовать только цифры');
        }
        return [$question, $answer];
    };
    startGame($gameDate, $ruls);
}
