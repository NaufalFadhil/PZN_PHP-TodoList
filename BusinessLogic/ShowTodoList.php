<?php

/**
 * Menampilkan todo list
 */
function showTodoList()
{
  // Mengambil todoList dari global scope
  global $todoList;

  echo "TODOLIST" . PHP_EOL;

  if (count($todoList) == 0) {
    echo "X. TodoList Is Empty" . PHP_EOL;
  } else {
    foreach ($todoList as $number => $value) {
      echo "$number. $value" . PHP_EOL;
    } 
  }
}
