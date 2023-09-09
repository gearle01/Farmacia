<?php
session_start(); // iniciando a sessão para verificar se o login existe ou não
?>
<?php include("cabecalho.php"); ?>
<?php include("login.php"); ?>
<?php include("conexao.php"); ?>
<?php include("verificando_login.php"); ?>
<?php include("logout.php"); ?>
<?php include("painel.php"); ?>

<link href="css/tela.css" rel="stylesheet">

<body>

    <div class='Principal'>
        <div class="titulo">
            <h1>Login</h1>
        </div>
        <div class="conteudo">
            <?php
            if (isset($_SESSION['nao_autenticado'])) :
            ?>
                <div class="erro">
                    <p class="alert-danger"> Erro: Usuario ou senha invalidos </p>
                </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>

            <div class="formulario">
                <form action="login.php" method="POST">
                    <input type="text" name='email' required placeholder="Digite seu email">
                    <input type="text" name='senha' required placeholder="Digite sua senha">
                    <br>
                    <input type="submit" value="Acessar" name='acessar' placeholder="Acessar">
                </form>
            </div>

        </div>
    </div>
</body>
<div>
    <?php include("rodape.php"); ?>
</div>

</html>