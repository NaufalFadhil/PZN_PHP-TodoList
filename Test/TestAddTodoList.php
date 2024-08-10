<?php

require_once "./Model/Todolist.php";
require_once "./BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Database");

var_dump($todoList);

/**
 * Output:
 * array(3) {
 *  [1]=>
 *  string(18) "Belajar PHP Dasar"
 *  [2]=>
 *  string(16) "Belajar PHP OOP"
 *  [3]=>
 *  string(21) "Belajar PHP Database"
 * }
 */
