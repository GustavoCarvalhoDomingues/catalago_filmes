<?php
include 'includes/header.php';
include 'includes/crud.php';

if ($_POST) {
    adicionarFilme($_POST['titulo'], $_POST['diretor'], $_POST['ano'], $_POST['genero']);
    header("Location: index.php");
}
?>

<h2>Adicionar Filme</h2>

<form method="POST">
    <label>Título</label>
    <input type="text" name="titulo" required>

    <label>Diretor</label>
    <input type="text" name="diretor" required>

    <label>Ano</label>
    <input type="number" name="ano" required>

    <label>Gênero</label>
    <input type="text" name="genero" required>

    <input type="submit" value="Adicionar">
</form>

<?php include 'includes/footer.php'; ?>
