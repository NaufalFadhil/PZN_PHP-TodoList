<?php

require_once "./Model/Todolist.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Database");

showTodoList();

$isRemoved = removeTodoList(2);
var_dump($isRemoved);

showTodoList();

/**
 * Output:
 * TODOLIST
 * 1. Belajar PHP Dasar
 * 2. Belajar PHP OOP
 * 3. Belajar PHP Database
 * bool(true)
 * TODOLIST
 * 1. Belajar PHP Dasar
 * 2. Belajar PHP Database
 */
