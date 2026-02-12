<?php
include('../connection.php');
include('../header.php');
?>

<body>

<h2>Gerenciar Livros</h2>

<a href="add.php">➕ Adicionar Novo Livro</a>
<br><br>

<table border="1">
<tr>
    <th>Título</th>
    <th>Editora</th>
    <th>Data de Lançamento</th>
    <th>Autor</th>
    <th>Ações</th>
</tr>

<?php
$query = "SELECT livros.id,
                 livros.titulo,
                 livros.editora,
                 livros.data_lancamento,
                 autores.nome AS autor
          FROM livros
          JOIN autores ON livros.autor_id = autores.id
          ORDER BY livros.id DESC";

$result = mysqli_query($db, $query) or die(mysqli_error($db));

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['titulo']."</td>";
    echo "<td>".$row['editora']."</td>";
    echo "<td>".$row['data_lancamento']."</td>";
    echo "<td>".$row['autor']."</td>";
    echo "<td>
            <a href='edit.php?id=".$row['id']."'>Editar</a> |
            <a href='remove.php?id=".$row['id']."'
               onclick=\"return confirm('Tem certeza que deseja excluir?')\">
               Excluir
            </a>
          </td>";
    echo "</tr>";
}
?>

</table>

<br>
<a href="../index.php">⬅ Voltar ao Painel</a>

</body>
</html>
