<?php
include('../connection.php');

$id = $_GET['id'];

$query = "DELETE FROM autores WHERE id = $id";
mysqli_query($db, $query) or die(mysqli_error($db));
?>

<script>
alert("Autor removido com sucesso!");
window.location = "index.php";
</script>
