<?php
include('../connection.php');  

if (!isset($_POST['id'])) {
    die("ID não recebido.");
}

$id = intval($_POST['id']);
$nome = mysqli_real_escape_string($db, $_POST['nome']);
$nacionalidade = mysqli_real_escape_string($db, $_POST['nacionalidade']);

$query = "UPDATE autores 
          SET nome = '$nome',
              nacionalidade = '$nacionalidade'
          WHERE id = $id";


if (mysqli_query($db, $query)) {
    header("Location: index.php");
    exit;
} else {
    die("Erro ao atualizar: " . mysqli_error($db));
}
?>

