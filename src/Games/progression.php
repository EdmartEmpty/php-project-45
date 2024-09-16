<?php

/**
 * Игра прогрессия
 **/

namespace BrainGames\Progression;

use function BrainGames\startGame\startGame;

use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

const MAX_LENGHT = 10;
/**
 * Функция getFieldStep($start, $finish, $step) создающая массив из чисел c "шагом" арифмитической прогресии.
 **/
function getFieldStep(int $start, int $finish, int $step): array
{
    $result = [];
    for ($i = $start; $i <= $finish; $i += $step) {
        $result[] = $i;
    }
    return $result;
}
/**
 * Данные игры getProGression() : вопрос $question , ответ $answer.
 **/
function getProGression()
{
    $ruls = "What number is missing in the progression?";
    $gameDate = function () {
        $randStep = rand(MIN_RANGE, MAX_LENGHT);
        $fieldForGame = getFieldStep(MIN_RANGE, MAX_RANGE, $randStep);
        $index = array_rand($fieldForGame, 1);
        $answer = $fieldForGame[$index];

        $fieldForGame[$index] = '..';
        $question = implode(" ", $fieldForGame);
        return [$question, $answer];
    };
        startGame($gameDate, $ruls);
}
