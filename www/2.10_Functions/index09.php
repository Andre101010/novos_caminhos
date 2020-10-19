<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 10 - Trabanhando');

require __DIR__ . '/functions.php';



PHPClassSession("functions", __LINE__);

var_dump(functionName("IFTO", "NOVOS CAMINHOS", "PROGRAMADOR WEB"));
var_dump(functionName("Jackie Chan", "NOVOS CAMINHOS", "PROGRAMADOR"));

/*var_dump(calcIMC(86, 1.72));
var_dump(calcIMC(90, 1.89));
var_dump(calcIMC(100, 2));
*/

PHPClassSession("global access", __LINE__);

$weigth = 91;
$heigth = 1.90;
var_dump(calcIMC_Global());


PHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);

var_dump($pay);

PHPClassSession("dinamic arguments", __LINE__);


var_dump(myTeam());
var_dump(myTeam("Jackie Chan"));
var_dump(myTeam("Joaquim", "Maria"));