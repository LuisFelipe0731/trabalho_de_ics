<?php
include('connection.php');
include('header.php');
?>

<div class="container mt-5">

    <div class="text-center mb-5 fade-in">
        <h1 class="display-4 fw-bold">Biblioteca Online</h1>
        <p class="text-muted">Explore nossa coleção de livros</p>
    </div>

    <div class="row g-4">

<?php
$query = "SELECT livros.titulo AS livro,
                 autores.nome AS autor,
                 livros.editora,
                 livros.data_lancamento
          FROM livros
          JOIN autores ON livros.autor_id = autores.ID";

$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_assoc($result)) {
?>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm book-card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['livro']; ?></h5>
                    <p class="card-text">
                        <strong>Autor:</strong> <?php echo $row['autor']; ?><br>
                        <strong>Editora:</strong> <?php echo $row['editora']; ?><br>
                        <strong>Lançamento:</strong> <?php echo $row['data_lancamento']; ?>
                    </p>
                </div>
            </div>
        </div>

<?php
}
?>

    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
