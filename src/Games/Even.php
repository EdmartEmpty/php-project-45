<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\{MAX_RANGE,MIN_RANGE};

/**
 * Функция isPrimeNumber($num) проверяет является ли число четным или не четным
 **/
function isEvenNumber(int $num)
{
    return $num % 2 === 0;
}

/**
 * Функция generationDataEvenOdd() генерирует данные для игры Even or Odd
 **/
function generationDataEven()
{
    $rules = 'Answer \"yes\" if the number is even, otherwise answer \"no\".';

    $gameData = function () {
        $question = random_int(MIN_RANGE, MAX_RANGE);
        $answer = isEvenNumber($question) ? 'yes' : 'no';
        return [$question, $answer];
    };
    startGame($gameData, $rules);
}
