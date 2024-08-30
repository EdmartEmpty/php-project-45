<?php

namespace BrainGames\games\even;

use function cli\line;
use function cli\prompt;

    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    print_r(line($name = '1'));
    echo 'Это сообщение из другого файла';
