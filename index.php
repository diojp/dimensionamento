<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimensionamento Açude</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <form class="row g-3" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="col-md-6">
                        <div class="input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Açude</span>
                            <input type="text" class="form-control" name="acude" value="<?php echo isset($_POST['acude']) ? htmlspecialchars($_POST['acude']) : ''; ?>" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Municipio</span>
                            <input type="text" class="form-control" value="<?php echo isset($_POST['municipio']) ? htmlspecialchars($_POST['municipio']) : ''; ?>" name="municipio" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Proprietário</span>
                            <input type="text" class="form-control" value="<?php echo isset($_POST['proprietario']) ? htmlspecialchars($_POST['proprietario']) : ''; ?>" name="proprietario" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Local</span>
                            <input type="text" class="form-control" value="<?php echo isset($_POST['local']) ? htmlspecialchars($_POST['local']) : ''; ?>" name="local" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Área da B. Hidrográfica (km²) - A</span>
                            <input type="text" class="form-control" value="<?php echo isset($_POST['area']) ? htmlspecialchars($_POST['area']) : ''; ?>" name="area" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Comprimento do riacho (km) - L</span>
                            <input type="text" class="form-control" value="<?php echo isset($_POST['comprimento']) ? htmlspecialchars($_POST['comprimento']) : ''; ?>" name="comprimento" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Precipitação (Média Anual - mm) - H</span>
                            <input type="text" class="form-control" value="<?php echo isset($_POST['precipitacao']) ? htmlspecialchars($_POST['precipitacao']) : ''; ?>" name="precipitacao" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Fetch (km) - F</span>
                            <input type="text" class="form-control" value="<?php echo isset($_POST['fetch']) ? htmlspecialchars($_POST['fetch']) : ''; ?>" name="fetch" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Lamina de Sangria (m) - Hsang</span>
                            <input type="text" class="form-control" value="<?php echo isset($_POST['sangria']) ? htmlspecialchars($_POST['sangria']) : ''; ?>" name="sangria" v aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Altura da Barragem </span>
                            <input type="text" class="form-control" value="<?php echo isset($_POST['altura']) ? htmlspecialchars($_POST['altura']) : ''; ?>" name="altura" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-5">
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
                    <div class="col-md-1">
                        <button type="button" class="btn btn-lg btn-danger btn-sm" data-bs-toggle="popover" title="Tipos de Barragens" data-bs-placement="right" data-bs-content="SADFSDFSDF">?</button>
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
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
                    $erros = [];

                    // Função para verificar se um valor é numérico
                    function isNumeric($value)
                    {
                        return is_numeric(str_replace(',', '.', $value));
                    }

                    // Verifica se os campos foram preenchidos e são numéricos
                    $campos = [
                        'area' => 'Área da B. Hidrográfica (km²) - A',
                        'comprimento' => 'Comprimento do riacho (km) - L',
                        'precipitacao' => 'Precipitação (Média Anual - mm) - H',
                        'fetch' => 'Fetch (km) - F',
                        'sangria' => 'Lamina de Sangria (m) - Hsang',
                        'altura' => 'Altura da Barragem'
                    ];

                    foreach ($campos as $campo => $label) {
                        if (empty($_POST[$campo])) {
                            $erros[] = "O campo $label é obrigatório.";
                        } elseif (!isNumeric($_POST[$campo])) {
                            $erros[] = "O campo $label deve conter apenas números.";
                        }
                    }

                    // Se houver erros, exibe-os; caso contrário, continue com o processamento
                    if (!empty($erros)) {
                        foreach ($erros as $erro) {
                            echo "<p style='color: red;'>$erro</p>";
                        }
                    } else {
                        echo "<h3 class='text-center'>Cálculo do Dimensionamento</h3>";

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

                        echo "Const K: $constk, Const C: $constc, CONST U: $constu";

                        function rendimentoPluvialBacia($precipitacao)
                        {
                            $p = (float)$precipitacao;
                            if ($p <= 1000) {
                                return round(($p ** 2 - (400 * $p) + 230000) / 55000, 4, PHP_ROUND_HALF_UP);
                            } else {
                                $h = $p / 1000;
                                return round((((28.53 * $h) - (112.95 * $h ** 2) + (351.91 * $h ** 3) - (118.74 * $h ** 4)) / (10 * $h)) / 100, 4, PHP_ROUND_HALF_UP);
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
                            echo "$a - $c - $ck - $cc";
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
                    }
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

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>