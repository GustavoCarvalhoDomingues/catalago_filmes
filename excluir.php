<?php
include 'includes/crud.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buscar o produto para remover a imagem
    $produto = buscarProduto($id);
    if ($produto && !empty($produto['imagem']) && file_exists($produto['imagem'])) {
        unlink($produto['imagem']); // Deleta imagem
    }

    excluirProduto($id);
}

header('Location: listar_produtos.php');
exit;
?>
