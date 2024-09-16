<?php

namespace BrainGames\Gcd;

use function BrainGames\startGame\startGame;

use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

function gcd(mixed $a, mixed $b)
{
    return $b ? gcd($b, $a % $b) : $a;
}

function getGcdDate()
{
    $ruls = "Find the greatest common divisor of given numbers.";

    $gameDate = function () {
        $num1 = random_int(MIN_RANGE, MAX_RANGE);
        $num2 = random_int(MIN_RANGE, MAX_RANGE);
        $question = "{$num1} {$num2}";
        $answer = gcd($num1, $num2);
        return [$question, $answer];
    };
    startGame($gameDate, $ruls);
}
