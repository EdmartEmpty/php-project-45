<?php

namespace BrainGames\calc;

const MIN_RANGE = 1;
const MAX_RANGE = 10;
const ROUND_COUNT = 3;

     function calcul (){
    $ruls = "Сделайте правильное вычисление";
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
    return  $gameDate = ['ruls' =>$ruls,'question'=> $question, 'answer'=> $answer];
}

function startGame(){
    echo "Добрый день!\n";
    $name = readline("Как вас зовут?\n");
    //$name = 'Ed';
    echo "Привет {$name}!\n";
    $getDate = calcul();
    echo $getDate['ruls'];
    for ($i = 0; $i < ROUND_COUNT; $i++){
        $getDate = calcul();
        echo "Вопрос: {$getDate['question']}\n";
        $useranswer = readline("Ваш ответ\n");
        $useranswer = strtolower($useranswer);
        $answer = $getDate['answer'];
    if ($useranswer == $answer){
        echo "Супер!{$name} ты молодец!\n";
    } elseif ($useranswer !== $answer ){
        echo "Ваш ответ {$useranswer} не верный. Правильный ответ {$answer}";
        exit;
    }
    }
    echo 'Конец игры!';
}
startGame();