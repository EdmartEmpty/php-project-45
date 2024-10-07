<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\startGame\startGame;

use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

/**
 * Функция gcd() определяет наибольший общий делитель по теореме Евклида НОД
 **/
function gcd(mixed $a, mixed $b)
{
    if ($b != 0) {
        return gcd($b, $a % $b);
    } else {
        return $a;
    }
}

/**
 * Функция generationDataGcd() генерирует данные для игры Gcd
 **/
function generationDataGcd()
{
    $rules = 'Find the greatest common divisor of given numbers.';

    $gameData = function () {
        $num1 = random_int(MIN_RANGE, MAX_RANGE);
        $num2 = random_int(MIN_RANGE, MAX_RANGE);
        $question = "{$num1} {$num2}";
        $answer = (string) gcd($num1, $num2);
        return [$question, $answer];
    };
    startGame($gameData, $rules);
}
