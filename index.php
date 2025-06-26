<?php
include 'includes/header.php';
include 'includes/crud.php';

$filmes = listarFilmes();
?>
<h2>Lista de Filmes</h2>
<table>
    <tr>
        <th>Título</th>
        <th>Diretor</th>
        <th>Ano</th>
        <th>Gênero</th>
        <th>Ações</th>
    </tr>
<?php while ($filme = mysqli_fetch_assoc($filmes)) : ?>
    <tr>
        <td><?php echo $filme['titulo']; ?></td>
        <td><?php echo $filme['diretor']; ?></td>
        <td><?php echo $filme['ano']; ?></td>
        <td><?php echo $filme['genero']; ?></td>
        <td>
            <a class="button" href="editar.php?id=<?php echo $filme['id']; ?>">Editar</a>
            <a class="button" href="excluir.php?id=<?php echo $filme['id']; ?>" onclick="return confirm('Deseja excluir este filme?');">Excluir</a>
        </td>
    </tr>
<?php endwhile; ?>
</table>

<?php include 'includes/footer.php'; ?>
