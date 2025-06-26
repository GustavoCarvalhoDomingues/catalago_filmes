<?php
include 'includes/crud.php';

$id = $_GET['id'];
excluirFilme($id);
header("Location: index.php");
?>