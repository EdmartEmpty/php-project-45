<?php

namespace BrainGames\Games\calc;

use function BrainGames\startGame\startGame;

use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

/**
 * Функция calculate($num1, $num2, $operator) совершает математическую операцию операцию над числами
 **/
function calculate(int $num1, int $num2, mixed $operator)
{
    switch ($operator) {
    case '+':
        return $num1 + $num2;
    case '-':
        return $num1 - $num2;
    case '*':
        return $num1 * $num2;
    default:
        throw new \Exception('Нужно использовать только цифры');
    }
}
/**
 * Функция generationDataCalc() генерирует данные для игры Calc - веселая игра в калькулятор
 **/
function generationDataCalc()
{
    $rules = 'What is the result of the expression?';

    $gameData = function () {
        $num1 = random_int(MIN_RANGE, MAX_RANGE);
        $num2 = random_int(MIN_RANGE, MAX_RANGE);
        $sing = ['+', '-', '*'];
        $randomsing = $sing[array_rand($sing)];
        $question = "{$num1} {$randomsing} {$num2}";
        $answer = (string)calculate($num1, $num2, $randomsing);
        return [$question, $answer];
    };

    startGame($gameData, $rules);
}
