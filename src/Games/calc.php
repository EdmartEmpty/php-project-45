<?php

namespace BrainGames\calc;

use function BrainGames\startGame\startGame;

use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};

/**
 * Функция generationDataCalcul() генерирует данные для игры Calcul - веселая игра в калькулятор
 **/
function generationDataCalcul()
{
    $rules = "What is the result of the expression?";

    $gameData = function () {
        $num1 = random_int(MIN_RANGE, MAX_RANGE);
        $num2 = random_int(MIN_RANGE, MAX_RANGE);
        $sing = ['+','-','*'];
        $randomsing = $sing[rand(0, 2)];
        $question = "{$num1} {$randomsing} {$num2}";
        $answer = '';
        switch ($randomsing) {
            case '+':
                $answer = $num1 + $num2;
                break;
            case '-':
                $answer = $num1 - $num2;
                break;
            case '*':
                $answer = $num1 * $num2;
                break;
            default:
                throw new \Exception('Нужно использовать только цифры');
        }
        return [$question, $answer];
    };
    startGame($gameData, $rules);
}
