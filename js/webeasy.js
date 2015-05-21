/*Inputs obrigatórios*/
var inputsO = ['firstname', 'lastname', 'endereco', 'cpf', 'email', 'psw', 'psw1'];
/*Inputs não obrigatórios*/
var inputsNO = ['bday', 'homepage'];
/*Inputs númericos*/
var inputsN = ['cpf'];
/*Inputs passwords*/
var inputsP = ['psw', 'psw1'];

function validarFormulario() {
    var naoPossuiErro = true;

    /*Validando campos obrigatórios*/
    for	(var index = 0; index < inputsO.length; index++) {
        var element = document.getElementsByName(inputsO[index]);
        if(!validarFormularioObrigatorio(element[0])) {
            document.getElementById(inputsO[index]).className = 'validadorUnHidded';
            naoPossuiErro = false;
        } else {
            document.getElementById(inputsO[index]).className = 'validadorHidded';
        }
    }

    /*Validando campos númericos*/
    for	(var index = 0; index < inputsN.length; index++) {
        var element = document.getElementsByName(inputsN[index]);
        if(validarFormularioObrigatorio(element[0]) && !validarCampoNumerico(element[0])) {
            document.getElementById(inputsN[index] + 'N').className = 'validadorUnHidded';
            naoPossuiErro = false;
        } else {
            document.getElementById(inputsN[index] + 'N').className = 'validadorHidded';
        }
    }

    /*Validando senhas*/
    if(validarFormularioObrigatorio(inputsP[0]) && validarFormularioObrigatorio(inputsP[1])) {
        if(inputsP[0].value != inputsP[1].value) {
            document.getElementById(inputsP[0] + 'PD').className = 'validadorUnHidded';
            naoPossuiErro = false;
        } else {
            document.getElementById(inputsP[0] + 'PD').className = 'validadorHidded';
        }
    }

    return naoPossuiErro;
}

function validarCampoNumerico(elemento) {
    var isNum = /^\d+$/.test(elemento);
    return isNum;
}

function validarFormularioObrigatorio(elemento) {
    if(elemento.value != '') {
        return true;
    } else {
        return false;
    }
}