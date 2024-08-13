<?php

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./View/ViewRemoveTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP MVC");

showTodoList();

viewRemoveTodoList();

showTodoList();
