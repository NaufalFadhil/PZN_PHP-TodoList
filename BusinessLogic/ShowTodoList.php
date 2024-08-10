<?php

/**
 * Menampilkan todo list
 */
function showTodoList()
{
  // Mengambil todoList dari global scope
  global $todoList;

  echo "TODOLIST" . PHP_EOL;

  foreach ($todoList as $number => $value) {
    echo "$number. $value" . PHP_EOL;
  }
}
