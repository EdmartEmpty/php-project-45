<?php

namespace BrainGames\even;

use function BrainGames\startGame\startGame;
use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};


function getRightAnwer()
{
    $ruls ="Answer \"yes\" if the number is even, otherwise answer \"no\".";

    $gameDate = function() {
            $randcount = random_int(1, 10);
            $question = $randcount;
            $answer = '';
        switch (true) {
            case $randcount % 2 == 0:
                $answer = 'yes';
                break;
            case $randcount % 2 !== 0:
                $answer = 'no';
                break;
            default:
                throw new \Exception('Нужно использовать только Yes и No');
        }
        return [$question,$answer];
    };
    startGame($gameDate, $ruls);
}
