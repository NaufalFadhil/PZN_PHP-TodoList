<?php

/**
 * Menambahkan todo list
 */
function addTodoList(string $todo): void
{
  // Mengambil data dari global scope
  global $todoList;

  // Menambah index number berdasarkan jumlah data todoList
  $number = sizeof($todoList) + 1;

  $todoList[$number] = $todo;
}
