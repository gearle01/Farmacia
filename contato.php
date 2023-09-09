<?php
error_reporting(0);
?>
<!--
// Estou fazendo um include para chamar o cabecalho e a
// função para enviar os mensagens para o banco e a conexão com banco
 -->
<?php include("cabecalho.php"); ?>
<?php include("enviarmensagem.php"); ?>
<?php include("conexao.php"); ?>



<body>
    <!-- formulario de contato  -->

    <h1>Formulário de contato</h1>
    <form action="enviarmensagem.php" method="post">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="nome" /></td>
            </tr>

            <tr>
                <td>Número</td>
                <td><input class="form-control" type="number" name="telefone" /></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><textarea class="form-control" type="email" name="email"></textarea></td>
            </tr>
            <tr>
                <td>Mensagem</td>
                <td><textarea class="form-control" cols="30" rows="15" name="mensagem"></textarea></td>
            </tr>

            <tr>
                <td><input class="btn btn-primary" type="submit" value="Enviar" /></td>
            </tr>

        </table>

    </form>
</body>
<div>
    <?php include("rodape.php"); ?>
</div>