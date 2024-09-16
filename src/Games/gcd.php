<?php

namespace BrainGames\Gcd;

use function BrainGames\startGame\startGame;

use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

// function gcd(mixed $a, mixed $b)
// {
//     if ($b != 0) {
//         return gcd($b, $a % $b);
//     } else {
//         return $a;
//     }
// }


function getGcdDate()
{
    $ruls = "Find the greatest common divisor of given numbers.";
    function gcd(mixed $a, mixed $b)
{
    if ($b != 0) {
        return gcd($b, $a % $b);
    } else {
        return $a;
    }
}
    $gameDate = function () {
        $num1 = random_int(MIN_RANGE, MAX_RANGE);
        $num2 = random_int(MIN_RANGE, MAX_RANGE);
        $question = "{$num1} {$num2}";
        $answer = gcd($num1, $num2);
        return [$question, $answer];
    };
    startGame($gameDate, $ruls);
}
