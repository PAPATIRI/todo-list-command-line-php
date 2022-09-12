<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "---------------------" . PHP_EOL;
    echo "|   MENAMBAH TODO    |" . PHP_EOL;
    echo "---------------------" . PHP_EOL;
    $todo = input("Todo (tekan x untuk batal)");
    if ($todo == "x") {
        //batal
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
};
