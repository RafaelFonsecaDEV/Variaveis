<?php


$teste = "asd";

echo "$teste global 1 <br>";


if (5 > 2) {

    $teste = "dsa";

    echo "$teste if <br>";
}

echo "$teste global 2<br>";



function funcao()
{


    $teste  = "hdgh";

    echo "$teste local <br>";
}

funcao();


function testandoGlobal()
{


    global $teste; // escopo global  sendo chamda dentro da funçao , dentro de local

    echo "$teste  global funçao <br>";
}

testandoGlobal();
