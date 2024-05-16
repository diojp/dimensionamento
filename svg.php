<?php

function atualizaSVG($svg, $campos)
{
    // Carrega o conteúdo SVG em um objeto DOMDocument
    $svgFile = $svg;
    $dom = new DOMDocument();
    $dom->load($svgFile);

    // Cria um objeto DOMXPath
    $xpath = new DOMXPath($dom);

    foreach ($campos as $chave => $valor) {

        // Encontra o elemento <text> com id="coroamento" usando XPath
        $textElement = $xpath->query('//*[@id="'.$chave.'"]')->item(0);

        if ($textElement) {
            // Altera o valor do texto
            $textElement->nodeValue = $valor;
        } else {
            echo "Elemento com id $chave não encontrado.";
        }
    }
    // Salva o resultado de volta em um arquivo
    $dom->save($svg);

    // Ou exibe o SVG modificado diretamente
    // header('Content-Type: image/svg+xml');
    // echo $dom->saveXML();
}
