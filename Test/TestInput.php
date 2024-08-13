<?php

require_once "./Helper/Input.php";

$name = input("Masukkan nama: ");
echo "Hello $name" . PHP_EOL;

$npm = input("Masukkan NPM: ");
echo "NPM Anda $npm" . PHP_EOL;