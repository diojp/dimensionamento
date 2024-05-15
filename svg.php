<?php

// Caminho para o arquivo SVG
$svgFile = 'img/figuras1.svg';
$modifiedSvgFile = 'img/figura1m.svg';

// Carrega o arquivo SVG
$doc = new DOMDocument();
$doc->load($svgFile);

echo $doc;
// Modificar as tags <text>
$tagCoroamento = $doc->getElementById('coroamento');
// $tagCoroamento->nodeValue = '5000';
echo $tagCoroamento->nodeValue;


// foreach ($textTags as $textTag) {
//     echo $textTag->nodeValue;
//     $textTag->nodeValue = 'Novo Texto';
    
// }

// // Modificar as tags <circle>
// $circleTags = $doc->getElementsByTagName('circle');
// foreach ($circleTags as $circleTag) {
//     $circleTag->setAttribute('fill', 'blue');
// }

// Salva as modificações de volta no arquivo SVG
$doc->save($modifiedSvgFile);

echo "<img class='rounded' src='img/figuras1m.svg' alt=''>";
