document.addEventListener("DOMContentLoaded", function() {
    const telefoneInput = document.getElementById('telefone');
    
    telefoneInput.addEventListener('input', function() {
        let value = telefoneInput.value.replace(/\D/g, ''); // Remove tudo que não for número
        
        // Limitar o número de caracteres a 11 (número máximo de dígitos do telefone)
        if (value.length > 11) {
            value = value.substring(0, 11);
        }

        if (value.length <= 2) {
            value = value.replace(/(\d{2})(\d{0,0})/, '($1) $2');
        } else if (value.length <= 7) {
            value = value.replace(/(\d{2})(\d{5})(\d{0,0})/, '($1) $2-$3');
        } else {
            value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        }

        telefoneInput.value = value; // Atualiza o valor do input com a formatação
    });
});
