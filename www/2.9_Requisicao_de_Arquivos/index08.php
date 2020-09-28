<?php
//echo "<h1 class='code'> User Profile</h1>";
require __DIR__ . '/../framework/config.php';
PHPClassName('2.9 - Requisição de Arquivos');



PHPClassSession('include, include_once', __LINE__);

//include "file.php";
//echo "<p>CONTINUE</p>";
//include "header.php"; //tem que está na mesma pasta do index.php

include __DIR__ . "/header.php";

var_dump(__DIR__); //DIR - localiza o caminho das pastas ou arquivos

$profile = new stdClass();
$profile->name = "Jackie Chan";
$profile->company = "IFTO";
$profile->email = "jackiechan@ifto.edu.br";
var_dump($profile);

include __DIR__ . "/profile.php";
var_dump(include_once __DIR__ . "/header.php");




$profile = new stdClass();
$profile->name = "Shrek";
$profile->company = "IFTO";
$profile->email = "shrek@ifto.edu.br";
var_dump($profile);

include __DIR__ . "/profile.php";


PHPClassSession('require, require_once', __LINE__);

//require "file.php";
//echo "<p>CONTINUE</p>"