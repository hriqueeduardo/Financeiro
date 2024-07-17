
// Receber o seletor do campo valor
let inputValor = document.getElementById('valor');


// Aguardar o usuário digitar valor no campo
inputValor.addEventListener('input', function () {

    // Obter o valor atual removendo qualquer caractere que não seja número
    let valueValor = this.value.replace(/[^\d]/g, '');

    // Adicionar os separadores de milhares
    var formattedValor = (valueValor.slice(0, -2).replace(/\B(?=(\d{3})+(?!\d))/g, '.')) + '' + valueValor.slice(-2);

    // Adicionar a vírgula e até dois dígitos se houver centavos
    formattedValor = formattedValor.slice(0, -2) + ',' + formattedValor.slice(-2);

    // Atualizar o valor do campo
    this.value = "R$ " + formattedValor;

});


// Função para habilitar o campo text Descrição caso o selected for do tipo Outros.
function VerificaAdicionar(value) {

    // adicionar
    var input = document.getElementById("descricao_outro");

    if (value == 10) {

        input.disabled = false;

    } else {

        input.disabled = true;
    }

};


// Função para habilitar o campo text Descrição caso o selected for do tipo Outros.
function VerificaAlterar(value) {

    // alterar
    var inputAlterar = document.getElementById("alterar_descricao_outro");

    if (value == 10) {

        inputAlterar.disabled = false;

    } else {

        inputAlterar.disabled = true;
        inputAlterar.val('');
    }

};
