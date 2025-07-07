<?php
include 'includes/header.php';
include 'includes/crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    // Upload de imagem
    $imagem_nome = $_FILES['imagem']['name'];
    $imagem_temp = $_FILES['imagem']['tmp_name'];
    $caminho_imagem = 'uploads/' . basename($imagem_nome);

    // Cria pasta se não existir
    if (!is_dir('uploads')) {
        mkdir('uploads', 0755, true);
    }

    // Move imagem
    move_uploaded_file($imagem_temp, $caminho_imagem);

    adicionarProduto($nome, $preco, $quantidade, $caminho_imagem);

    header("Location: listar_produtos.php");
    exit;
}
?>

<h2>Adicionar Produto</h2>
<form method="POST" enctype="multipart/form-data">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Preço:</label><br>
    <input type="number" step="0.01" name="preco" required><br><br>

    <label>Quantidade:</label><br>
    <input type="number" name="quantidade" required><br><br>

    <label>Imagem do Produto:</label><br>
    <input type="file" name="imagem"><br><br>

    <input type="submit" value="Adicionar">
</form>

<?php include 'includes/footer.php'; ?>