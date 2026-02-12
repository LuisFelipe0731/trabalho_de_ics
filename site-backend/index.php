<?php
include('connection.php');
include('header.php');

// Total de livros
$totalLivros = mysqli_fetch_assoc(
    mysqli_query($db, "SELECT COUNT(*) AS total FROM livros")
)['total'];

// Total de autores
$totalAutores = mysqli_fetch_assoc(
    mysqli_query($db, "SELECT COUNT(*) AS total FROM autores")
)['total'];

// Últimos 5 livros
$ultimosLivros = mysqli_query($db, "
    SELECT livros.titulo AS livro,
           autores.nome AS autor,
           livros.data_lancamento
    FROM livros
    JOIN autores ON livros.autor_id = autores.id
    ORDER BY livros.id DESC
    LIMIT 5
");
?>

<body>

<h1>Painel Administrativo - Biblioteca</h1>

<hr>
<br><br>
<h2>📊 Estatísticas</h2>

<ul>
    <li><strong>Total de Livros:</strong> <?php echo $totalLivros; ?></li>
    <li><strong>Total de Autores:</strong> <?php echo $totalAutores; ?></li>
</ul>

<hr>
<br><br>
<h2>⚡ Acesso Rápido</h2>

<ul>
    <li><a href="livros/index.php">📚 Gerenciar Livros</a></li>
    <li><a href="autores/index.php">✍ Gerenciar Autores</a></li>
    <li><a href="http://biblioteca.com.br/index.php">🌎 Ver Site</a></li>
</ul>

<hr>
<br><br>
<h2>📖 Últimos Livros Cadastrados</h2>

<table border="1">
<tr>
    <th>Livro</th>
    <th>Autor</th>
    <th>Data</th>
</tr>

<?php while($row = mysqli_fetch_assoc($ultimosLivros)) { ?>
<tr>
    <td><?php echo $row['livro']; ?></td>
    <td><?php echo $row['autor']; ?></td>
    <td><?php echo $row['data_lancamento']; ?></td>
</tr>
<?php } ?>

</table>

<hr>
<br><br>
</body>
</html>
