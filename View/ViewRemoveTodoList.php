<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewRemoveTodoList()
{
    echo "-------------------" . PHP_EOL;
    echo "|  MENGHAPUS TODO  |" . PHP_EOL;
    echo "-------------------" . PHP_EOL;

    $pilihan = input("Nomor (tekan x untuk batal)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);
        if ($success) {
            echo "Sukses menghapus todo no $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo no $pilihan" . PHP_EOL;
        }
    }
};
