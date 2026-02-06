<?php
    include('connection.php');
    include('header.php');
?>
<body>
    <h1 class="page-header">
        PHP CRUD <small>Autores</small>
    </h1>

    <h2>Adicionar Novo Autor</h2>
    <br/>

    <form method="post" action="add_post.php">

        <input 
            type="text" 
            name="nome" 
            placeholder="Nome do autor" 
            required
        >
        <br/><br/>

        <input 
            type="text" 
            name="nacionalidade" 
            placeholder="Nacionalidade" 
            required
        >
        <br/><br/>

        <button type="submit" class="btn btn-success">
            Salvar
        </button>&nbsp;

        <button type="reset" class="btn btn-warning">
            Limpar
        </button>&nbsp;

        <a class="btn btn-info" href="index.php">
            Voltar
        </a>

    </form>  
</body>
</html>

