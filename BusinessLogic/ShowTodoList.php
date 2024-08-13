<?php

/**
 * Menampilkan todo list
 */
function showTodoList()
{
  // Mengambil todoList dari global scope
  global $todoList;

  if (count($todoList) == 0) {
    echo "X. TodoList Is Empty" . PHP_EOL;
  } else {
    foreach ($todoList as $number => $value) {
      echo "$number. $value" . PHP_EOL;
    } 
  }
}
