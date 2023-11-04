(function() {
  'use strict'

    // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
    var forms = document.querySelectorAll('.needs-validation')
    // Faz um loop neles e evita o envio
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false)
    })
})();
