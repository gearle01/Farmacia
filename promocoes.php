<?php include("cabecalho.php"); ?>
<?php include("enviar.php"); ?>
<?php include("conexao.php"); ?>

<head>
    <link rel="stylesheet" href="css/promocao.css">
</head>
<div id="conteudo">
    <table class="table table-striped">

        <?php
        $produtos = produtossalvos($conexao);
        foreach ($produtos as $coisa) {
        ?>
            <tr>
                <td><?= $coisa['nome'] ?></td>
                <td><?= $coisa['preco'] ?></td>
                <td><?= substr($coisa['descricao'], 0, 40) ?></td>
            </tr>
        <?php
        }
        ?>
</div>

<?php include("rodape.php"); ?>