<?php
/*
    menampilkan todo di list
*/

function showTodoList()
{
    global $todoList;

    echo "=====================" . PHP_EOL;
    echo "=     TODO LIST     =" . PHP_EOL;
    echo "=====================" . PHP_EOL;
    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
