<?php

/**
 * Игра простое число
 **/

namespace Braingames\Games\Prime;

use function BrainGames\startGame\startGame;

use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

/**
 * Функция getPrime проверяющая является ли число $num простым.
 **/
function isPrime(int $num): bool
{
    if ($num <= 1) {
        return false;
    } else {
        for ($i = 2; $i <= $num / 2; ++$i) {
            if ($num % $i === 0) {
                return false;
            }
        }
    }
        return true;
}
/**
 * Функция generationDataPrimeInt() генерирует данные для игры PrimeInt
 **/
function generationDataPrime()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $gameData = function () {

        $question = random_int(MIN_RANGE, MAX_RANGE);
        $answer = (isPrime($question) === true) ? "yes" : "no";
        return [$question, $answer];
    };
    startGame($gameData, $rules);
}
