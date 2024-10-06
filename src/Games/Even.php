<?php

namespace BrainGames\Games\even;

use function BrainGames\startGame\startGame;

use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

/**
 * Функция isPrimeNumber($num) проверяет является ли число четным или не четным
 **/
function isEvenNumber(int $num)
{
    return $num % 2 === 0 ? true : false;
}

/**
 * Функция generationDataEvenOdd() генерирует данные для игры Even or Odd
 **/
function generationDataEvenEven()
{
    $rules = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

    $gameData = function () {
        $question = random_int(MIN_RANGE, MAX_RANGE);
        $answer = isEvenNumber($question) ? 'yes' : 'no';
        return [$question, $answer];
    };
    startGame($gameData, $rules);
}
