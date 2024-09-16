<?php

/**
 * Игра простое число
 **/

namespace Braingames\Prime;

use function BrainGames\startGame\startGame;

use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

/**
 * Функция getPrime проверяющая является ли число $num простым.
 **/
function getPrime($num)
{
    if ($num <= 1) {
        return false;
    } elseif ($num === 2) {
        return true;
    } else {
        for ($i = 2; $i <= $num / 2; ++$i) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    }
}
/**
 * Функция getPrimeInt() данные игры  : вопрос $question , ответ $answer.
 **/
function getPrimeInt()
{
    $ruls = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $gameDate = function () {

        $question = random_int(MIN_RANGE, MAX_RANGE);
        $answer = (getPrime($question) === true) ? "yes" : "no";
        return [$question, $answer];
    };
    startGame($gameDate, $ruls);
}
