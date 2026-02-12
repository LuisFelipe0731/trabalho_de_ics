<?php
include('../connection.php');
include('../header.php');
?>

<body>

<h2>Gerenciar Autores</h2>

<a href="add.php">➕ Adicionar Novo Autor</a>
<br><br>

<table border="1">
<tr>
    <th>Nome</th>
    <th>Nacionalidade</th>
    <th>Quantidade de Livros</th>
    <th>Ações</th>
</tr>

<?php
$query = "SELECT autores.id,
                 autores.nome,
                 autores.nacionalidade,
                 COUNT(livros.id) AS total_livros
          FROM autores
          LEFT JOIN livros ON livros.autor_id = autores.id
          GROUP BY autores.id
          ORDER BY autores.nome";

$result = mysqli_query($db, $query) or die(mysqli_error($db));

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['nome']."</td>";
    echo "<td>".$row['nacionalidade']."</td>";
    echo "<td>".$row['total_livros']."</td>";
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
