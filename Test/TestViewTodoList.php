<?php
require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Syarif");
addTodoList("taufik");
addTodoList("hidayat");

viewShowTodoList();
