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
                <form class="row g-3" method="GET">
                    <div class="col-md-6">
                        <div class="input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Açude</span>
                            <input type="text" class="form-control" name="acude" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Municipio</span>
                            <input type="text" class="form-control" name="municipio" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Proprietário</span>
                            <input type="text" class="form-control" name="proprietario" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Local</span>
                            <input type="text" class="form-control" name="local" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Área da B. Hidrográfica (km²) - A</span>
                            <input type="text" class="form-control" name="area" value="3,14" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Comprimento do riacho (km) - L</span>
                            <input type="text" class="form-control" name="comprimento" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Precipitação (Média Anual - mm) - H</span>
                            <input type="text" class="form-control" name="precipitacao" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Fetch (km) - F</span>
                            <input type="text" class="form-control" name="fetch" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Lamina de Sangria (m) - Hsang</span>
                            <input type="text" class="form-control" name="sangria" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Altura da Barragem </span>
                            <input type="text" class="form-control" name="altura" aria-describedby="addon-wrapping">
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
                            <input type="text" class="form-control" id="k" name="k" aria-describedby="addon-wrapping" value="0.156" disabled>
                            <input type="hidden" id="constk" name="constk">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">C</span>
                            <input type="text" class="form-control" id="c" name="c" aria-describedby="addon-wrapping" value="0.950" disabled>
                            <input type="hidden" id="constc" name="constc">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">U</span>
                            <input type="text" class="form-control" id="u" name="u" aria-describedby="addon-wrapping" value="1.200" disabled>
                            <input type="hidden" id="constu" name="constu">
                        </div>
                    </div>

                    <div class="col-12">

                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Calcular</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <?php
                echo "<p>É aqui que a programação começa!!!</p>";
                $area = $_GET["area"];
                // $const_k = $_GET['constk'];
                $comprimento = $_GET["comprimento"];
                $precipitacao = $_GET["precipitacao"];
                $fetch = $_GET["fetch"];
                $sangria = $_GET["sangria"];
                $altura = $_GET["altura"];

                $constk = $_GET["constk"];
                $constc = $_GET["constc"];
                $constu = $_GET["constu"];

                function rendimentoPluvialBacia($precipitacao){
                    if($precipitacao <= 1000){
                        return number_format(($precipitacao ** 2 - (400*$precipitacao) +230000) / 55000, 4);
                    }else{
                        $h = $precipitacao /1000;
                        return number_format((((28.53*$h) - (112.95*$h**2) + (351.91*$h**3) - (118.74*$h**4))/(10*$h))/100 , 4);                        
                    }

                }

                $rendimento = rendimentoPluvialBacia($precipitacao);

                echo "area: $area + comprimento: $comprimento + precipitacao: $precipitacao + fetch: $fetch +
                    sangria: $sangria + altura: $altura + const k: $constk + const c: $constc + const u: $constu
                    Rendimento: $rendimento";
                ?>
            </div>
        </div>
    </div>
    <script>
        const selectTipoBacia = document.getElementById('inputState');

        const constkValue = document.getElementById('k').value;
        document.getElementById('constk').value = constkValue;

        const constcValue = document.getElementById('c').value;
        document.getElementById('constc').value = constkValue;

        const constuValue = document.getElementById('u').value;
        document.getElementById('constu').value = constkValue;

        selectTipoBacia.addEventListener('change', function() {
            let value = selectTipoBacia.options[selectTipoBacia.selectedIndex].value;

            switch (value) {
                case "1":
                    document.getElementById("k").value = 0.123;
                    document.getElementById("c").value = 0.850;
                    document.getElementById("u").value = 1.300;

                    document.getElementById("constk").value = 0.123;
                    document.getElementById("constc").value = 0.850;
                    document.getElementById("constu").value = 1.300;
                    break;
                case "2":
                    document.getElementById("k").value = 0.156;
                    document.getElementById("c").value = 0.950;
                    document.getElementById("u").value = 1.200;

                    document.getElementById("constk").value = 0.156;
                    document.getElementById("constc").value = 0.950;
                    document.getElementById("constu").value = 1.200;
                    break;
                case "3":
                    document.getElementById("k").value = 0.204;
                    document.getElementById("c").value = 1;
                    document.getElementById("u").value = 1;

                    document.getElementById("constk").value = 0.204;
                    document.getElementById("constc").value = 1;
                    document.getElementById("constu").value = 1;
                    break;
                case "4":
                    document.getElementById("k").value = 0.278;
                    document.getElementById("c").value = 1.05;
                    document.getElementById("u").value = 0.8;

                    document.getElementById("constk").value = 0.278;
                    document.getElementById("constc").value = 1.05;
                    document.getElementById("constu").value = 0.8;
                    break;
                case "5":
                    document.getElementById("k").value = 0.4;
                    document.getElementById("c").value = 1.15;
                    document.getElementById("u").value = 0.7;

                    document.getElementById("constk").value = 0.4;
                    document.getElementById("constc").value = 1.15;
                    document.getElementById("constu").value = 0.7;
                    break;
                case "6":
                    document.getElementById("k").value = 0.625;
                    document.getElementById("c").value = 1.3;
                    document.getElementById("u").value = 0.650;

                    document.getElementById("constk").value = 0.625;
                    document.getElementById("constc").value = 1.3;
                    document.getElementById("constu").value = 0.650;
                    break;
                case "7":
                    document.getElementById("k").value = 1.111;
                    document.getElementById("c").value = 1.45;
                    document.getElementById("u").value = 0.6;

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