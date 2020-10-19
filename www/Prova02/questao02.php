<?php

require __DIR__ . '/../framework/config.php';




/*$inputString = "aabaa";


    if($inputString == "aabaa"){
        var_dump(true); 
        echo 'verdadeiro';
        
    }else {
        var_dump(false);
        echo 'falso';
    }*/

function chekPalindrome($inputString)
{

    if (strrev($inputString) == $inputString) {
        return 1;
    } else {
        return 0;
    }
}

// Driver Code 
$original = "zzzazzazz";
if (chekPalindrome($original)) {
    echo "Palindrome";
    var_dump(true);
} else {
    echo "Não é um Palindrome";
    var_dump(false);
}

//------------------------------------------------------------

// Questão 2
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

//Dada uma váriavel $inputString, verifique se é um palíndromo .

//Exemplo

//Para inputString = "aabaa", o valor de retorno deve ser true;

//Para inputString = "abac", o valor de retorno deve ser false;

//Resultado booleano
// true se inputString é um palíndromo,
// false se caso contrário.

function checkPalindrome($inputString)
{

    if ($inputString === strrev($inputString)) {
        return true;
    } else {
        return false;
    }
}