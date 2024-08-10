<?php

/**
 * Menghapus todo list
 * 
 * @param int $number
 * @return bool
 */
function removeTodoList(int $number): bool
{
    // Mengambil data dari global scope
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }

    // Mengurutkan array dengan menggeser data ke index sebelumnya
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    // Menghapus data terakhir
    unset($todoList[sizeof($todoList)]);

    return true;
}
