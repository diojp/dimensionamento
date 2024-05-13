<?php

$exibirImagem = true;
$acude = $_POST["acude"];
$municipio = $_POST["municipio"];
$proprietario = $_POST["proprietario"];
$local = $_POST["local"];
$area = str_replace(',', '.', $_POST["area"]);
$comprimento = str_replace(',', '.', $_POST["comprimento"]);
$precipitacao = str_replace(',', '.', $_POST["precipitacao"]);
$fetch = str_replace(',', '.', $_POST["fetch"]);
$sangria = str_replace(',', '.', $_POST["sangria"]);
$altura = str_replace(',', '.', $_POST["altura"]);

$constk = str_replace(',', '.',  $_POST["constk"]);
$constc = str_replace(',', '.',  $_POST["constc"]);
$constu = str_replace(',', '.', $_POST["constu"]);




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
    return (0.36 * sqrt($f) + 0.76 - (0.27 * pow($f, 1 / 4)));
}

function calculoRevanche($folga, $sangria)
{
    $f = (float)$folga;
    $s = (float)$sangria;
    return $f + $s;
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



$rendimento = rendimentoPluvialBacia($precipitacao);
$rendimentoV = str_replace('.', ',', $rendimento);

$vA = volumeAfluente($rendimento, $precipitacao, $constu, $area);
$vAV = str_replace('.', ',', $vA);

$vC = volumeC($vA);
$vCV = str_replace('.', ',', $vC);

$descarga = descargaMaximaSecular($area, $comprimento, $constk, $constc);
$descargaV = str_replace('.', ',', $descarga);

$folga = folgaBarragem($fetch);
$folgaV = str_replace('.', ',', $folga);

$revanche = calculoRevanche($folga, $sangria);
$revancheV = str_replace('.', ',', $revanche);

$coroamento = calculoLarguraCoroamento($altura);
$coroamentoV = str_replace('.', ',', $coroamento);

$sangradouro = calculoLarguraSangradouro($descarga, $sangria);
$sangradouroV = str_replace('.', ',', $sangradouro);
