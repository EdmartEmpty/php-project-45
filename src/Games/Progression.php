<?php

/**
 * Игра прогрессия
 **/

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\{MAX_RANGE,MIN_RANGE};

const MAX_LENGTH = 10;
/**
 * Функция generationDataProgression() генерирует данные для игры Progression
 **/
function generationDataProgression()
{
    $rules = 'What number is missing in the progression?';
    $gameData = function () {
        $randStep = rand(MIN_RANGE, MAX_LENGTH);
        $progression = range(MIN_RANGE, MAX_RANGE, $randStep);
        $index = array_rand($progression);
        $answer = (string) $progression[$index];
        $progression[$index] = '..';
        $question = implode(" ", $progression);
        return [$question, $answer];
    };
        startGame($gameData, $rules);
}
