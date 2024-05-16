<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimensionamento Açude</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <?php
    $globalExibirImagem = false;
    echo $globalExibirImagem;
    ?>
    <div class="container text-center">
        <!-- <img src="img/agua.svg" alt=""> -->

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
                <form class="row g-3 needs-validation" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" id="formDimensionamento">
                    <div class="col-md-6">
                        <div class="input-group input-group-sm flex-nowrap has-validation">
                            <span class="input-group-text" id="addon-wrapping">Açude</span>
                            <input type="text" class="form-control" name="acude" value="<?php echo isset($_POST['acude']) ? htmlspecialchars($_POST['acude']) : ''; ?>" aria-describedby="addon-wrapping" require>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
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
                            <span class="input-group-text" id="addon-wrapping">Altura da Barragem (m)</span>
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
                        <button type="button" class="btn btn-danger popbutton" id="popoverButton" data-bs-toggle="popover" data-bs-html="true"
                         title="Tipos de Bacia" data-bs-content=". ">?</button>
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
                        <button type="submit" class="btn btn-primary botao" name="submit">Calcular</button>
                        <button type="submit" class="btn btn-primary botao" onclick="limpaFormulario()" >Limpar</button>
                    </div>
                </form>
            </div>

            <div class="col">
                <div class="col-12">
                    <?php
                    require_once "funcoes.php";
                    require_once "svg.php";
                    require_once "classes/Dados.php";


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

                            $GLOBALS['globalExibirImagem'] = true;
                            $dados = new Dados();

                            $dados->setAcude($_POST["acude"]);
                            $dados->setMunicipio($_POST["municipio"]);
                            $dados->setProprietario($_POST["proprietario"]);
                            $dados->setLocal($_POST["local"]);
                            $dados->setArea(str_replace(',', '.', $_POST["area"]));
                            $dados->setComprimento(str_replace(',', '.', $_POST["comprimento"]));
                            $dados->setPrecipitacao(str_replace(',', '.', $_POST["precipitacao"]));
                            $dados->setFetch(str_replace(',', '.', $_POST["fetch"]));
                            $dados->setSangria(str_replace(',', '.', $_POST["sangria"]));
                            $dados->setAltura(str_replace(',', '.', $_POST["altura"]));

                            $dados->setConstk(str_replace(',', '.',  $_POST["constk"]));
                            $dados->setConstc(str_replace(',', '.',  $_POST["constc"]));
                            $dados->setConstu(str_replace(',', '.', $_POST["constu"]));

                            $rendimento = rendimentoPluvialBacia($dados->getPrecipitacao());
                            $rendimentoV = str_replace('.', ',', $rendimento);

                            $vA = volumeAfluente($rendimento, $dados->getPrecipitacao(), $dados->getConstu(), $dados->getArea());
                            $vAV = str_replace('.', ',', $vA);

                            $vC = volumeC($vA);
                            $vCV = str_replace('.', ',', $vC);

                            $descarga = descargaMaximaSecular($dados->getArea(), $dados->getComprimento(), $dados->getConstk(), $dados->getConstc());
                            $descargaV = str_replace('.', ',', $descarga);

                            $folga = folgaBarragem($dados->getFetch());
                            $folgaV = str_replace('.', ',', $folga);

                            $revanche = calculoRevanche($folga, $dados->getSangria());
                            $revancheV = str_replace('.', ',', $revanche);

                            $coroamento = calculoLarguraCoroamento($dados->getAltura());
                            $coroamentoV = str_replace('.', ',', $coroamento);

                            $sangradouro = calculoLarguraSangradouro($descarga, $dados->getSangria());
                            $sangradouroV = str_replace('.', ',', $sangradouro);

                            $camposFig1 = [
                                'sangria' => str_replace('.', ',', $dados->getSangria()),
                                'altura' => str_replace('.', ',', $dados->getAltura()),
                                'revanche' => $revancheV,
                                'folga' => $folgaV,
                                'coroamento' => $coroamentoV
                            ]; 

                            $camposFig2 = [
                                'sangradouro' => $sangradouroV                                
                            ]; 
                            
                            atualizaSVG("img/barragem.svg", $camposFig1);
                            atualizaSVG("img/barragemLateral.svg", $camposFig2);

                            echo "
                        <div class='table-responsive tabela'>
                            <table class='table align-left table-sm '>
                                <thead>
                                    <tr> <h3 class='text-center'>Cálculo do Dimensionamento</h3></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope='col'>Açude</th>
                                        <td >{$dados->getAcude()}</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope='row'>Município</th>
                                        <td>{$dados->getMunicipio()}</td>
                                    </tr>
                                
                                    <tr>
                                        <th scope='row'>Propietário</th>
                                        <td>{$dados->getProprietario()}</td>                                                                
                                    </tr>

                                    <tr>
                                        <th scope='row'>Local</th>
                                        <td colspan='2'>{$dados->getLocal()}</td>
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
        <div class="row">
            <div class="col">
                <div class="col-12 text-center">
                    <?php if ($globalExibirImagem) : ?>
                        <img class="rounded" src="img/barragem.svg" alt="">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col">
                <div class="col-12">
                    <?php if ($globalExibirImagem) : ?>
                        <img src="img/barragemLateral.svg" height="180rem" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/dim.js" crossorigin="anonymous"></script>
</body>

</html>