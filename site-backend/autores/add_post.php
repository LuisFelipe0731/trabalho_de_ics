<?php
include('../connection.php');

$nome = $_POST['nome'];
$nacionalidade = $_POST['nacionalidade'];

$query = "INSERT INTO autores
          (id, nome, nacionalidade)
          VALUES (NULL, '$nome', '$nacionalidade')";

mysqli_query($db, $query) or die(mysqli_error($db));
?>

<script>
alert("Autor adicionado com sucesso!");
window.location = "index.php";
</script>
