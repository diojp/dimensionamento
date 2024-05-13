const selectTipoBacia = document.getElementById('inputState');

const constkValue = document.getElementById('k').value;
document.getElementById('constk').value = constkValue;

const constcValue = document.getElementById('c').value;
document.getElementById('constc').value = constcValue;

const constuValue = document.getElementById('u').value;
document.getElementById('constu').value = constuValue;

selectTipoBacia.addEventListener('change', function () {
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


document.addEventListener('DOMContentLoaded', function () {
    var popoverLista = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popover = popoverLista.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    });
});



// document.addEventListener("DOMContentLoaded", function () {
//     const formulario = document.getElementById("formDimensionamento");

//     formulario.addEventListener("submit", function (event) {
//         event.preventDefault();

//         const numerosInputs = {
//             'area': formulario.querySelector('input[name="area"]').value.trim(),
//             'comprimento': formulario.querySelector('input[name="comprimento"]').value.trim(),
//             'precipitacao': formulario.querySelector('input[name="precipitacao"]').value.trim(),
//             'fetch': formulario.querySelector('input[name="fetch"]').value.trim(),
//             'sangria': formulario.querySelector('input[name="sangria"]').value.trim(),
//             'altura': formulario.querySelector('input[name="altura"]').value.trim(),
//         };

//         let validacao = true;

//         for (const [campo, valor] of Object.entries(numerosInputs)) {
//             const regexNumeros = /^[0-9]+$/;

//             if (!valor) {
//                 alert(`O campo ${campo} deve ser preenchido.`);
//                 validacao = false;
//                 break;
//             } else if (!regexNumeros.test(valor)) {
//                 alert(`O campo ${campo} deve conter apenas números.`);
//                 validacao = false;
//                 break;
//             }
//         }

//         if (validacao) {
//             formulario.submit();
//         }
//     });
// });

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()