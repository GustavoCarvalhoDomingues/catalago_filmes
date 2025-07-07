<?php
include 'conexao.php';

function listarProdutos() {
    global $conn;
    $sql = "SELECT * FROM lista_produtos";
    return mysqli_query($conn, $sql);
}

function buscarProduto($id) {
    global $conn;
    $sql = "SELECT * FROM lista_produtos WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function adicionarProduto($nome, $preco, $quantidade, $imagem) {
    global $conn;
    $sql = "INSERT INTO lista_produtos (nome, preco, quantidade, imagem)
            VALUES ('$nome', $preco, $quantidade, '$imagem')";
    return mysqli_query($conn, $sql);
}

function editarProduto($id, $nome, $preco, $quantidade) {
    global $conn;
    $sql = "UPDATE lista_produtos SET nome='$nome', preco=$preco, quantidade=$quantidade WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function excluirProduto($id) {
    global $conn;
    $sql = "DELETE FROM lista_produtos WHERE id=$id";
    return mysqli_query($conn, $sql);
}
