<?php

require_once "./Model/TodoList.php";
require_once "./Helper/Input.php";
require_once "./BusinessLogic/RemoveTodoList.php";

/**
 * Menampilkan view remove todo list
 */
function viewRemoveTodoList() {
  echo "Menhapus Todo" . PHP_EOL;

  $selectedNumber = input("Nomor todo yang akan dihapus (x untuk batal): ");

  if ($selectedNumber == "x") {
    echo "Batal menghapus todo" . PHP_EOL;
  } else {
    $isDeleted = removeTodoList($selectedNumber);
    if ($isDeleted) {
      echo "Berhasil menghapus todo nomor $selectedNumber" . PHP_EOL;
    } else {
      echo "Gagal menghapus todo nomor $selectedNumber" . PHP_EOL;
    }
  }
}
