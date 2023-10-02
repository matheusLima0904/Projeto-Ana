document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('pedidoForm');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const nome = form.querySelector('#nome').value;
        const sobrenome = form.querySelector('#sobrenome').value;
        const telefone = form.querySelector('#telefone').value;
        const bairro = form.querySelector('#bairro').value;
        const endereco = form.querySelector('#endereco').value;
        const numero = form.querySelector('#numero').value;
        const data = form.querySelector('#data').value;
        const horario = form.querySelector('#horario').value;
        const observacoes = form.querySelector('#observacoes').value;
        const pagamento = form.querySelector('#pagamento').value;

        if (!nome || !sobrenome || !telefone || !bairro || !endereco || !numero || !data || !horario || !pagamento) {
            alert('Por favor, preencha todos os campos obrigatórios.');
            return;
        }

        alert('Formulário enviado com sucesso!');

        form.reset();
    });
});

function formatarTelefone(input) {
    var value = input.value.replace(/\D/g, '');
    var formattedValue = '';
    
    if (value.length >= 2) {
    formattedValue += '+' + value.slice(0, 2) + ' ';
    
    if (value.length >= 4) {
        formattedValue += value.slice(2, 4) + ' ';
        
        if (value.length >= 9) {
            formattedValue += value.slice(4, 9) + '-';
            
            if (value.length >= 13) {
                formattedValue += value.slice(9, 13);
            } else {
                formattedValue += value.slice(9);
            }
        } else {
            formattedValue += value.slice(4);
        }
    } else {
        formattedValue += value.slice(2);
    }
    } else {
    formattedValue = value;
    }
    
    input.value = formattedValue;
    }

    
