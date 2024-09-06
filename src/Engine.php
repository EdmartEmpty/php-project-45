<?php

namespace BrainGames\startGame;
require_once (__DIR__ . '/calc.php');

use function BrainGames\calc\calcul;

function startGame(){
    echo "Добрый день!\n";
    $name = readline("Как вас зовут?\n");
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