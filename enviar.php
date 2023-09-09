<?php
// função para enviar a mensagem de contato para o banco de dados.
function enviarmensagem($conexao, $nome, $telefone, $email, $mensagem)
{
    $query = "insert into contato(nome, telefone, email, mensagem) values ('{$nome}' , {$telefone}, '{$email}', '{$mensagem}')";
    $mensagemsalva = mysqli_query($conexao, $query);
    return $mensagemsalva;
} ?>

<?php
// função para puxar os dados do banco de dados da tabela produtos.
function produtossalvos($conexao)
{
    $produtos = array();
    $resultado = mysqli_query($conexao, "select * from produtos");
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
} ?>
<?php
// função para salvar os produtos no banco de dados.
function salvarproduto($conexao, $nome, $preco, $descricao)
{
    $query = "insert into produtos(nome, preco, descricao) values ('{$nome}' , {$preco}, '{$descricao}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
} ?>

