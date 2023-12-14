<?php

function generator($n)
{
    for ($i = 1; $i <= $n; $i++) {
        $output = ($i % 3 == 0 ? "Hello" : "") . ($i % 5 == 0 ? "World" : "") . ($i % 10 == 0 ? 'Pel' : '');
        echo $output !== "" ? $output : $i;
        echo "\n";
    }
}

generator(15);
