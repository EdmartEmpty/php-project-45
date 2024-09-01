<?php

namespace BrainGames\even;

use function cli\line;
use function cli\prompt;

function getRightAnwer()
{
    line('Добрый день!');
        $name = prompt("Как вас зовут?\n");
        line("Привет {$name}!");
        line("Угадайте четное ли число?");

    for ($i = 0; $i < 3; $i++) {
            $randcount = random_int(1, 10);
            line("{$randcount}\n");
            $useranswer = prompt("Ваш ответ\n");
            $useranswer = strtolower($useranswer);
            $rightanwem = '';
        switch (true) {
            case $randcount % 2 == 0:
                $rightanwem = 'yes';
                break;
            case $randcount % 2 !== 0:
                $rightanwem = 'no';
                break;
            default:
                throw new \Exception('Нужно использовать только Yes и No');
        }
        if ($useranswer === $rightanwem) {
                echo "Супер!\n";
        } else {
                echo "Попробуйте еще раз!\n";
        }
    }
         echo 'Конец игры!';
}
     getRightAnwer();
