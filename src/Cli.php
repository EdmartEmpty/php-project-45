<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

/**
 * Пробная функция welcome для теста подключенной библиотеки cli
 **/
function welcome()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
