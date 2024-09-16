<?php

namespace BrainGames\startGame;

const MIN_RANGE = 1;
const MAX_RANGE = 100;
const ROUND_COUNT = 3;
/**
 * Набор констан которые указывают диапазон чисел  от MIN_RANGE до MAX_RANGE учавствующих в игре и кол-во раундов ROUND_COUNT
 **/
use function cli\line;
use function cli\prompt;
/**
 * Функция startGame принимает два аргумента: данные игры $gameData [вопрос,ответ] и  $rules 'правила игры'.
 **/
function startGame(callable $gameData, string $rules)
{
    line('Welcome to the Brain Games!');
    $name = prompt("May I have your name?\n");
    line("Hello, {$name}!");
    line($rules);

    for ($i = 0; $i < ROUND_COUNT; $i++) {
        [$question,$answer] = $gameData();
        line("Question: {$question}\n");
        $userAnswer = prompt("Your answer:\n");

        if ($userAnswer == $answer) {
            line("Correct! {$name}\n");
        } elseif ($userAnswer !== $answer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let's try again, {$name}!\n");
            exit;
        }
    }
    return line("Congratulations, {$name}!");
}
