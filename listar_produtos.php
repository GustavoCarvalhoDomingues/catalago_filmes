<?php
include 'includes/header.php';
include 'includes/crud.php';

$produtos = listarProdutos(); // CORRETO
?>

<h2>Lista de Produtos</h2>
<table>
    <tr>
        <th>Imagem</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>
<?php while ($produto = mysqli_fetch_assoc($produtos)) : ?>
    <tr>
        <td>
            <?php if (!empty($produto['imagem'])) : ?>
                <img src="<?php echo $produto['imagem']; ?>" width="80" height="80">
            <?php else : ?>
                Sem imagem
            <?php endif; ?>
        </td>
        <td><?php echo $produto['nome']; ?></td>
        <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
        <td><?php echo $produto['quantidade']; ?></td>
        <td>
            <a class="button" href="editar.php?id=<?php echo $produto['id']; ?>">Editar</a>
            <a class="button" href="excluir.php?id=<?php echo $produto['id']; ?>" onclick="return confirm('Deseja excluir este produto?');">Excluir</a>
        </td>
    </tr>
<?php endwhile; ?>
</table>
