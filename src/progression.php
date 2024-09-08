<?php
/**
 * Игра прогрессия 
 **/
namespace BrainGames\Progression;

use function BrainGames\startGame\startGame;
use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

const MAX_LENGHT = 10;
/**
 * Функция создающая массив из чисел 
 **/
function getStep($start, $finish, $step)
{
    $result = [];
    for ($i = $start; $i <= $finish; $i += $step) {
        $result[] = $i;
    }   
    return $result;
}
/**
 * Данные игры , вопрос , ответ. 
 **/
function getProGression()
{
    $ruls = "What number is missing in the progression?";
    $gameDate = function () {
        $randStep = rand(MIN_RANGE, MAX_LENGHT);
        $arr = getStep(MIN_RANGE, MAX_RANGE, $randStep);
        $index = array_rand($arr, 1);
        $answer = $arr[$index];

        $arr[$index] = '..';
        $question = implode(" ", $arr);
        return [$question, $answer];
    };
        startGame($gameDate, $ruls);
}