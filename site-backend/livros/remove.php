<?php
include('../connection.php');

$id = $_GET['id'];

$query = "DELETE FROM livros WHERE id = $id";
mysqli_query($db, $query) or die(mysqli_error($db));
?>

<script>
alert("Livro removido com sucesso!");
window.location = "index.php";
</script>
