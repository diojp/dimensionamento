<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimensionamento Açude</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container text-center">
        <div class="topo">
            <p>
            <h1>Dimensionamento de Açudes</h1>
            </p>
            <p>
            <h2>Método Eng. Aguiar</h2>
            </p>
        </div>
        <div class="row">

            <div class="col">
                <h3 class="text-center">Dados do Empreendimento</h3>
                <form class="row g-3" action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">
                    <div class="col-md-6">
                        <div class="input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Açude</span>
                            <input type="text" class="form-control" name="acude" value="<?php echo isset($_GET['acude']) ? htmlspecialchars($_GET['acude']) : ''; ?>" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Municipio</span>
                            <input type="text" class="form-control" value="<?php echo isset($_GET['municipio']) ? htmlspecialchars($_GET['municipio']) : ''; ?>" name="municipio" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Proprietário</span>
                            <input type="text" class="form-control" value="<?php echo isset($_GET['municipio']) ? htmlspecialchars($_GET['proprietario']) : ''; ?>" name="proprietario" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Local</span>
                            <input type="text" class="form-control" value="<?php echo isset($_GET['municipio']) ? htmlspecialchars($_GET['local']) : ''; ?>" name="local" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Área da B. Hidrográfica (km²) - A</span>
                            <input type="text" class="form-control" value="<?php echo isset($_GET['municipio']) ? htmlspecialchars($_GET['area']) : ''; ?>" name="area" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Comprimento do riacho (km) - L</span>
                            <input type="text" class="form-control" value="<?php echo isset($_GET['municipio']) ? htmlspecialchars($_GET['comprimento']) : ''; ?>" name="comprimento" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Precipitação (Média Anual - mm) - H</span>
                            <input type="text" class="form-control" value="<?php echo isset($_GET['municipio']) ? htmlspecialchars($_GET['precipitacao']) : ''; ?>" name="precipitacao" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Fetch (km) - F</span>
                            <input type="text" class="form-control" value="<?php echo isset($_GET['municipio']) ? htmlspecialchars($_GET['fetch']) : ''; ?>" name="fetch" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Lamina de Sangria (m) - Hsang</span>
                            <input type="text" class="form-control" value="<?php echo isset($_GET['municipio']) ? htmlspecialchars($_GET['sangria']) : ''; ?>" name="sangria" v aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Altura da Barragem </span>
                            <input type="text" class="form-control" value="<?php echo isset($_GET['municipio']) ? htmlspecialchars($_GET['altura']) : ''; ?>" name="altura" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Tipo Bacia</span>
                            <select id="inputState" class="form-select">
                                <option value="1">Tipo 1</option>
                                <option selected value="2">Tipo 2</option>
                                <option value="3">Tipo 3</option>
                                <option value="4">Tipo 4</option>
                                <option value="5">Tipo 5</option>
                                <option value="6">Tipo 6</option>
                                <option value="7">Tipo 7</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">K</span>
                            <input type="text" class="form-control" id="k" name="k" aria-describedby="addon-wrapping" value="0,156" disabled>
                            <input type="hidden" id="constk" name="constk">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">C</span>
                            <input type="text" class="form-control" id="c" name="c" aria-describedby="addon-wrapping" value="0,950" disabled>
                            <input type="hidden" id="constc" name="constc">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">U</span>
                            <input type="text" class="form-control" id="u" name="u" aria-describedby="addon-wrapping" value="1,200" disabled>
                            <input type="hidden" id="constu" name="constu">
                        </div>
                    </div>

                    <div class="col-12">

                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="submit">Calcular</button>
                    </div>
                </form>
            </div>
            <div class="col">
                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["submit"])) {
                    echo "<h3 class='text-center'>Cálculo do Dimensionamento</h3>";

                    $acude = $_GET["acude"];
                    $municipio = $_GET["municipio"];
                    $proprietario = $_GET["proprietario"];
                    $local = $_GET["local"];
                    $area = str_replace(',', '.', $_GET["area"]);
                    $comprimento = str_replace(',', '.', $_GET["comprimento"]);
                    $precipitacao = str_replace(',', '.', $_GET["precipitacao"]);
                    $fetch = str_replace(',', '.', $_GET["fetch"]);
                    $sangria = str_replace(',', '.', $_GET["sangria"]);
                    $altura = str_replace(',', '.', $_GET["altura"]);

                    $constk = str_replace(',', '.',  $_GET["constk"]);
                    $constc = str_replace(',', '.',  $_GET["constc"]);
                    $constu = str_replace(',', '.', $_GET["constu"]);

                    function rendimentoPluvialBacia($precipitacao)
                    {
                        if ($precipitacao <= 1000) {
                            return round(($precipitacao ** 2 - (400 * $precipitacao) + 230000) / 55000, 4, PHP_ROUND_HALF_UP);
                        } else {
                            $h = $precipitacao / 1000;
                            return round((((28.53 * $h) - (112.95 * $h ** 2) + (351.91 * $h ** 3) - (118.74 * $h ** 4)) / (10 * $h)) / 100, 4, PHP_ROUND_HALF_UP);
                        }
                    }

                    function volumeAfluente($rendimento, $precipitacao, $constu, $area)
                    {
                        if ($precipitacao <= 1000) {
                            return round(((float)$rendimento / 100) * ($precipitacao / 1000) * $constu * ($area * 1000000), 2, PHP_ROUND_HALF_UP);
                        } else {
                            return round(((float)$rendimento) * $constu * $area * 1000000, 2, PHP_ROUND_HALF_UP);
                        }
                    }

                    function volumeC($volumeAfluente)
                    {
                        return $volumeAfluente * 2;
                    }

                    function descargaMaximaSecular($area, $comprimento, $constk, $constc)
                    {
                        return round((1150 * $area) / (sqrt($comprimento * $constc) * (120 + ($constk * $comprimento * $constc))), 2, PHP_ROUND_HALF_UP);
                    }

                    function folgaBarragem($fetch)
                    {
                        return (0.36 * sqrt($fetch) + 0.76 - (0.27 * pow($fetch, 1 / 4)));
                    }

                    function calculoRevanche($folga, $sangria)
                    {
                        return $folga + $sangria;
                    }

                    function calculoLarguraCoroamento($altura)
                    {
                        return round(1.1 * sqrt($altura) + 1, 2, PHP_ROUND_HALF_UP);
                    }

                    function calculoLarguraSangradouro($descarga, $sangria)
                    {
                        return round($descarga / (1.77 * $sangria * sqrt($sangria)), 2, PHP_ROUND_HALF_UP);
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



                    // echo "area: $area <br/> comprimento: $comprimento <br/> precipitacao: $precipitacao <br/> fetch: $fetch <br/>
                    //     sangria: $sangria <br/> altura: $altura <br/> const k: $constk <br/> const c: $constc <br/> const u: $constu
                    //     <br/> Rendimento: $rendimento <br/> volume Afluente: $vA <br/> Volume C: $vC <br/> descarga: $descarga";

                    echo "
                        <div class='table-responsive'>
                            <table class='table align-left'>
                                <thead>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope='col'>Açude</th>
                                        <td >$acude</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope='row'>Município</th>
                                        <td>$municipio</td>
                                    </tr>
                                
                                    <tr>
                                        <th scope='row'>Propietário</th>
                                        <td>$proprietario</td>                                                                
                                    </tr>

                                    <tr>
                                        <th scope='row'>Local</th>
                                        <td colspan='2'>$local</td>
                                    </tr>
                                    
                                    <tr>
                                        <th scope='row'>Rendimento Pluvial da Bacia</th>
                                        <td colspan='2'>$rendimentoV</td>                                                           
                                    </tr>

                                    <tr>
                                        <th scope='row'>Volume do Afluente (m³/ano)</th>
                                        <td colspan='2'>$vAV</td>
                                    </tr>

                                    <tr>
                                        <th scope='row'>Volume C (m³)</th>
                                        <td colspan='2'>$vCV</td>   
                                    </tr>
                                    <tr>
                                        <th scope='row'>Descarga Máxima Secular (m³/s)</th>
                                        <td colspan='2'>$descargaV</td>
                                    </tr>
                                    <tr>
                                        <th scope='row'>Folga da Barragem</th>
                                        <td colspan='2'>$folgaV</td>
                                    </tr>
                                    <tr>
                                        <th scope='row'>Cálculo da Revanche (m)</th>
                                        <td colspan='2'>$revancheV</td>
                                    </tr>
                                    <tr>
                                        <th scope='row'>Determinação da Largura do Coroamento (m)</th>
                                        <td colspan='2'>$coroamentoV</td>
                                    </tr>
                                    <tr>
                                        <th scope='row'>Determinação da Largura do Sangradouro (m)</th>
                                        <td colspan='2'>$sangradouroV</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        ";
                };
                ?>

            </div>
        </div>
    </div>
    <script>
        const selectTipoBacia = document.getElementById('inputState');

        const constkValue = document.getElementById('k').value;
        document.getElementById('constk').value = constkValue;

        const constcValue = document.getElementById('c').value;
        document.getElementById('constc').value = constcValue;

        const constuValue = document.getElementById('u').value;
        document.getElementById('constu').value = constuValue;

        selectTipoBacia.addEventListener('change', function() {
            let value = selectTipoBacia.options[selectTipoBacia.selectedIndex].value;

            switch (value) {
                case "1":
                    document.getElementById("k").value = "0,123";
                    document.getElementById("c").value = "0,850";
                    document.getElementById("u").value = "1,300";

                    document.getElementById("constk").value = 0.123;
                    document.getElementById("constc").value = 0.850;
                    document.getElementById("constu").value = 1.300;
                    break;
                case "2":
                    document.getElementById("k").value = "0,156";
                    document.getElementById("c").value = "0,950";
                    document.getElementById("u").value = "1,200";

                    document.getElementById("constk").value = 0.156;
                    document.getElementById("constc").value = 0.950;
                    document.getElementById("constu").value = 1.200;
                    break;
                case "3":
                    document.getElementById("k").value = "0,204";
                    document.getElementById("c").value = "1";
                    document.getElementById("u").value = "1";

                    document.getElementById("constk").value = 0.204;
                    document.getElementById("constc").value = 1;
                    document.getElementById("constu").value = 1;
                    break;
                case "4":
                    document.getElementById("k").value = "0,278";
                    document.getElementById("c").value = "1,05";
                    document.getElementById("u").value = "0,8";

                    document.getElementById("constk").value = 0.278;
                    document.getElementById("constc").value = 1.05;
                    document.getElementById("constu").value = 0.8;
                    break;
                case "5":
                    document.getElementById("k").value = "0,4";
                    document.getElementById("c").value = "1,15";
                    document.getElementById("u").value = "0,7";

                    document.getElementById("constk").value = 0.4;
                    document.getElementById("constc").value = 1.15;
                    document.getElementById("constu").value = 0.7;
                    break;
                case "6":
                    document.getElementById("k").value = "0,625";
                    document.getElementById("c").value = "1,3";
                    document.getElementById("u").value = "0,650";

                    document.getElementById("constk").value = 0.625;
                    document.getElementById("constc").value = 1.3;
                    document.getElementById("constu").value = 0.650;
                    break;
                case "7":
                    document.getElementById("k").value = "1,111";
                    document.getElementById("c").value = "1,45";
                    document.getElementById("u").value = "0,6";

                    document.getElementById("constk").value = 1.111;
                    document.getElementById("constc").value = 1.45;
                    document.getElementById("constu").value = 0.6;
                    break;
            }

            console.log(value, k.value, c.value, u.value);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>