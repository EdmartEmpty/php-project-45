<?php

/**
 * Игра прогрессия
 **/

namespace BrainGames\Games\Progression;

use function BrainGames\startGame\startGame;

use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

const MAX_LENGHT = 10;
/**
 * Функция generationProgression($start, $finish, $step) создающая массив из чисел c "шагом" арифмитической прогресии.
 **/
function generationProgression(int $start, int $finish, int $step): array
{
    $result = [];
    for ($i = $start; $i <= $finish; $i += $step) {
        $result[] = $i;
    }
    return $result;
}
/**
 * Функция generationDataProgression() генерирует данные для игры Progression
 **/
function generationDataProgression()
{
    $rules = 'What number is missing in the progression?';
    $gameData = function () {
        $randStep = rand(MIN_RANGE, MAX_LENGHT);
        $fieldForGame = generationProgression(MIN_RANGE, MAX_RANGE, $randStep);
        $index = array_rand($fieldForGame, 1);
        $answer = $fieldForGame[$index];
        $fieldForGame[$index] = '..';
        $question = implode(" ", $fieldForGame);
        return [$question, $answer];
    };
        startGame($gameData, $rules);
}
