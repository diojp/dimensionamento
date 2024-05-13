
document.addEventListener('DOMContentLoaded', function () {
    var popoverLista = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popover = popoverLista.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    });
});