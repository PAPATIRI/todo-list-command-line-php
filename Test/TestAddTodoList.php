<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Syarif");
addTodoList("taufik");
addTodoList("hidayat");

var_dump($todoList);
