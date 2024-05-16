<?php

function rendimentoPluvialBacia($precipitacao)
{
    $p = (float)$precipitacao;
    if ($p <= 1000) {
        return round(($p ** 2 - (400 * $p) + 230000) / 55000, 4, PHP_ROUND_HALF_UP);
    } else {
        $h = $p / 1000;
        return round((((28.53 * $h) - (112.95 * $h * 2) + (351.91 * $h * 3) - (118.74 * $h ** 4)) / (10 * $h)) / 100, 4, PHP_ROUND_HALF_UP);
    }
}

function volumeAfluente($rendimento, $precipitacao, $constu, $area)
{
    $r = (float)$rendimento;
    $p = (float)$precipitacao;
    $cu = (float)$constu;
    $a = (float)$area;
    if ($p <= 1000) {
        return round(((float)$r / 100) * ($p / 1000) * $cu * ($a * 1000000), 2, PHP_ROUND_HALF_UP);
    } else {
        return round(((float)$r) * $cu * $a * 1000000, 2, PHP_ROUND_HALF_UP);
    }
}

function volumeC($volumeAfluente)
{
    $vA = (float)$volumeAfluente;
    return $vA * 2;
}

function descargaMaximaSecular($area, $comprimento, $constk, $constc)
{
    $a = (float)$area;
    $c = (float)$comprimento;
    $ck = (float)$constk;
    $cc = (float)$constc;

    return round((1150 * $a) / (sqrt($c * $cc) * (120 + ($ck * $c * $cc))), 2, PHP_ROUND_HALF_UP);
}

function folgaBarragem($fetch)
{
    $f = (float)$fetch;
    return round((0.36 * sqrt($f) + 0.76 - (0.27 * pow($f, 1 / 4))), 2, PHP_ROUND_HALF_UP) ;
}

function calculoRevanche($folga, $sangria)
{
    $f = (float)$folga;
    $s = (float)$sangria;
    return round($f + $s, 2, PHP_ROUND_HALF_UP) ;
}

function calculoLarguraCoroamento($altura)
{
    $a = (float)$altura;
    return round(1.1 * sqrt($a) + 1, 2, PHP_ROUND_HALF_UP);
}

function calculoLarguraSangradouro($descarga, $sangria)
{
    $d = (float)$descarga;
    $s = (float)$sangria;
    return round($d / (1.77 * $s * sqrt($s)), 2, PHP_ROUND_HALF_UP);
}
