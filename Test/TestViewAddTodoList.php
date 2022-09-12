<?php
require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("belajar php oop");
addTodoList("belajar php dasar");
addTodoList("belajar php database");

viewAddTodoList();
showTodoList();
viewAddTodoList();
showTodoList();
