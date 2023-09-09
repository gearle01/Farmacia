<!--
// Estou fazendo um include para chamar o cabecalho o
// metodo de enviar os dados para o banco e a conexão com banco
 -->
<?php include("cabecalho.php"); ?>
<?php include("enviar.php") ?>
<?php include("conexao.php") ?>

<?php
// Reutilizando as variaveis apresentadas em aula para 
// definir o tipo ao mandar um produto para o banco
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];

// Verificação se o produto foi adicionado ou não ao banco.


// Se o produto for adicionado recebe uma mensagem de sucesso
if (salvarproduto($conexao, $nome, $preco, $descricao)) {
?>
    <p class="alert-success">Produto: <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php
    // Se o produto não for adicionado recebe uma mensagem de erro
} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">O produto: <?= $nome; ?> não foi adicionado.</p>
<?php
}
?>