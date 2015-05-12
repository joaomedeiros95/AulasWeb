<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Cadastro de usuários';
	include_once('header.php');

    function resultadoValidadorPreenchido() {
        echo "<p class='validador'><img src='imgs/error.png' />Campo Obrigatório não informado!</p>";
    }

    function resultadoValidadorNumerico() {
        echo "<p class='validador2'><img src='imgs/warning.png' />Campo só aceita valores númericos!</p>";
    }

    function resultadoValidadorSenhasDiferentes() {
        echo "<p class='validador'><img src='imgs/error.png' />Senhas são diferentes</p>";
    }
?>
<body>
	<?php include_once('menu.php'); ?>
	<div class ="container">
		<form name="form" action="obrigado.php" method="get" onsubmit="return validarFormulario()">
            <table>
                <tr>
                    <td>Primeiro nome:</td>
                    <td><input type="text" name="firstname" autofocus></td>
                    <td class="validadorHidded" id="firstname"><?php resultadoValidadorPreenchido() ?></td>
                </tr>
                <tr>
                    <td>Sobrenome: </td>
                    <td><input type="text" name="lastname"></td>
                    <td class="validadorHidded" id="lastname"><?php resultadoValidadorPreenchido() ?></td>
                </tr>
                <tr>
                    <td>Endereço completo:</td>
                    <td><input type="text" name="endereco" size="20"></td>
                    <td class="validadorHidded" id="endereco"><?php resultadoValidadorPreenchido() ?></td>
                </tr>
                <tr>
                    <td>CPF (somente números):</td>
                    <td><input type="text" name="cpf" maxlength="11"></td>
                    <td class="validadorHidded" id="cpf"><?php resultadoValidadorPreenchido() ?></td>
                    <td class="validadorHidded" id="cpfN"><?php resultadoValidadorNumerico() ?></td>
                </tr>
                <tr>
                    <td>Sexo: </td>
                    <td><input type="radio" name="sex" value="homem" checked>Homem <input type="radio" name="sex" value="mulher">Mulher</td>
                    <td class="validadorHidded" id="sex"><?php resultadoValidadorPreenchido() ?></td>
                </tr>
                <tr>
                    <td>Aniversário (dd/mm/aaaa):</td>
                    <td><input type="text" name="bday" maxlength="10"></td>
                    <td class="validadorHidded" id="bday"><?php resultadoValidadorPreenchido() ?></td>
                </tr>
                <tr>
                    <td>Seu website:</td>
                    <td><input type="url" name="homepage"></td>
                    <td class="validadorHidded" id="homepage"><?php resultadoValidadorPreenchido() ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email"></td>
                    <td class="validadorHidded" id="email"><?php resultadoValidadorPreenchido() ?></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input type="password" name="psw"></td>
                    <td class="validadorHidded" id="psw"><?php resultadoValidadorPreenchido() ?></td>
                    <td class="validadorHidded" id="pswPD"><?php resultadoValidadorSenhasDiferentes() ?></td>
                </tr>
                <tr>
                    <td>Repita a Senha:</td>
                    <td><input type="password" name="psw1"></td>
                    <td class="validadorHidded" id="psw1"><?php resultadoValidadorPreenchido() ?></td>
                    <td class="validadorHidded" id="psw1PD"><?php resultadoValidadorSenhasDiferentes() ?></td>
                </tr>
    
                <tr>
                    <td><input type="submit" value="Enviar"></td>
                    <td><input type="reset" value="Reiniciar"></td>
                </tr>
            </table>
		</form>
	</div>
</body>
<?php include_once('footer.php') ?>
</html>
