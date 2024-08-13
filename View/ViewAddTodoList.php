<?php

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./Helper/Input.php";

/**
 * Menampilkan view add todo list
 */
function viewAddTodoList() {
  echo "Menambahkan Todo" . PHP_EOL;

  $todo = input("Masukkan todo (x untuk batal): ");
  
  if ($todo == "x") {
    echo "Batal menambahkan todo" . PHP_EOL;
  } else {
    addTodoList($todo);
  }
}
