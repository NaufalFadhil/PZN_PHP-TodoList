<?php

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./View/ViewAddTodoList.php";
require_once "./View/ViewRemoveTodoList.php";
require_once "./Helper/Input.php";


/**
 * Menampilkan view show todo list
 */
function viewShowTodoList() 
{
  while (true) {
    echo "== TODO LIST ==" . PHP_EOL;
    showTodoList();

    echo "MENU" . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;

    $selectedMenu = input("Pilih menu: ");
    switch ($selectedMenu) {
      case '1':
        viewAddTodoList();
        break;
      case '2':
        viewRemoveTodoList();
        break;
      default:
        echo "Your input is not valid" . PHP_EOL;
        exit;
    }
  }
}
