<?php

function f($x)
{
    return ($x*$x);//встроенная функция
}

function S()
{
    $a = 5; // начальное значение интервала
    $b = 25; // конечное значение интервала
    $n = 256; //число разбиений интервала
    $h=($b-$a)/$n;//шаг
    $rez=0;
    $xi=2;

    for ($i=1;$i<=$n;$i++)
    {
        $rez=$rez+(f($xi)-$h/2);
        $xi=$xi+$h;
    }
    return $h*$rez;
}
$summa=S();
echo $summa;
