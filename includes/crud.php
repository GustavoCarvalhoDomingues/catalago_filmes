<?php
include 'conexao.php';

function listarFilmes() {
    global $conn;
    $sql = "SELECT * FROM filmes";
    return mysqli_query($conn, $sql);
}

function buscarFilme($id) {
    global $conn;
    $sql = "SELECT * FROM filmes WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function adicionarFilme($titulo, $diretor, $ano, $genero) {
    global $conn;
    $sql = "INSERT INTO filmes (titulo, diretor, ano, genero) VALUES ('$titulo', '$diretor', $ano, '$genero')";
    return mysqli_query($conn, $sql);
}

function editarFilme($id, $titulo, $diretor, $ano, $genero) {
    global $conn;
    $sql = "UPDATE filmes SET titulo='$titulo', diretor='$diretor', ano=$ano, genero='$genero' WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function excluirFilme($id) {
    global $conn;
    $sql = "DELETE FROM filmes WHERE id=$id";
    return mysqli_query($conn, $sql);
}
