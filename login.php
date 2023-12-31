<?php include("cabecalho.php"); ?>
<?php include("conexao.php"); ?>
<?php include("verificando_login.php"); ?>


<?php
session_start(); // serve para indicar ao php que desejamos trabalhar com sesion

if (empty($_POST['email']) && empty($_POST['senha'])) { // fazendo validação para que caso os campos sejam vazios não possam ser acesssado o login.php
    header('Location: index.php');
    exit();
}
$email = mysqli_real_escape_string($conexao, $_POST['email']); // proteção de sql injection contra nosso login e a variavel conexao serve para conectar ao banco de dados e pegar informações do mesmo
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$query = "SELECT * FROM `usuario` WHERE usuario = '{$email}' and senha = md5('{$senha}')"; //pegando as informações do formulario e comparando as com a do DB
$resultado = mysqli_query($conexao, $query); // verifica se a query retorna ou não um registro
$linha = mysqli_num_rows($resultado);
if ($linha == 1) {
    $_SESSION['usuario'] = $email; // saberemos se o  usuario está autenticado ao usar o session e comparar a informação
    header('Location: painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true; // sessão de tratamento para redirecionar e exibir mensagem de erro
    header('Location: index.php'); // caso o login ou a senha estejam invalidos/ou nao existir na base de dados retornatara para o index.

    exit();
}
