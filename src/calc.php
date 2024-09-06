<?php
namespace BrainGames\calc;
require_once (__DIR__ . '/Engine.php');



use function BrainGames\startGame\startGame;
use const BrainGames\startGame\{MAX_RANGE,MIN_RANGE};


function calcul ()
{
    $ruls = "Сделайте правильное вычисление";

    $gameDate = function (){
    $num1 = random_int(MIN_RANGE, MAX_RANGE);
    $num2 = random_int(MIN_RANGE, MAX_RANGE);
    $sing = ['+' => '+','-' => '-','*' => '*'];
    $randomsing = array_rand($sing);
    $question = "{$num1}{$randomsing}{$num2}";
    $answer = '';
    switch ($randomsing){
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
            throw new \Exception ('Нужно использовать только цифры');
    }
    return [$question, $answer];
};
    startGame ($gameDate,$ruls);
}
     

