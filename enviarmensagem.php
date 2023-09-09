<?php
error_reporting(0);
?>
<!--
// Estou fazendo um include para chamar o cabecalho o
// metodo de enviar os dados para o banco e a conexão com banco
 -->
<?php include("enviar.php") ?>
<?php include("conexao.php") ?>

<?php
// Reutilizando as variaveis apresentadas em aula para 
// definir o tipo ao mandar um mensagem para o banco
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

// Verificação se a mensagem foi enviada ou não ao banco.


// Se a mensagem for adicionada recebe uma mensagem de sucesso
if (enviarmensagem($conexao, $nome, $telefone, $email, $mensagem)) {
?>
    <p class="alert-success">Mensagem enviada com sucesso!</p>
<?php
    // Se a mensagem não for adicionada recebe uma mensagem de erro
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">A mensagem não foi enviada.</p>
<?php
}
?>