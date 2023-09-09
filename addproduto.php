<!--
// Estou fazendo um include para chamar o cabecalho o
// metodo de enviar os dados para o banco e a conexão com banco
 -->
<?php include("cabecalho.php"); ?>
<?php include("enviar.php") ?>
<?php include("conexao.php") ?>


<!-- Reutilizando o formulario de cadastro de produtos apresentado em aula -->
<h1>Formulário de cadastro de promoções</h1>
<form action="novoproduto.php" method="post">
    <table class="table">
        <!-- Responsável pelo campo nome pasando o tipo texto -->
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <!-- Responsável pelo campo preço passando o tipo como numero -->
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" /></td>
        </tr>
        <!-- Responsável pelo campo descrição pasando o tipo texto -->
        <tr>
            <td>Descrição:</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>
        <!-- Responsável pelo botão enviar -->
        <tr>
            <td><input class="btn btn-primary" type="submit" value="Enviar" /></td>
        </tr>

    </table>

</form>
<!-- incluindo o rodape que era pra ficar estilizado mas não fica -->
<?php include("rodape.php"); ?>