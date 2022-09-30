<?php
    $titulo = "Salas";
    include "./cabecalho.php";
?>

<div class="card">
    <div class="card-header">
        Salas
    </div>
    <div class="card-body">
        <nav class="navbar bg-light">
        <div class="container-fluid">
            <button type="button" class="btn btn-success">Nova Sala</button>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
            <button type="button" class="btn btn-primary">Pesquisar a sala</button>
            </form>
        </div>
    </div>
    </nav>
</div>

<div>
    <table class="table table-striped table-hover">
        <thead>  
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Sigla</th>
                <th scope="col">Apelido</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <?php

        $salamaterias = array('Sala de Administração Geral', 'Sala de Padrões de Projeto de Sítios Internet II', 'Sala de Pesquisa Operacional', 'Sala Planejamento Estrategico', 'Sala de Portugûes', 'Sala de Pratica de Design', 'Sala de Pratica de Gestão de Projetos');
        $salaapelidos = array('LAB ADM', 'LAB P PROJ S INT II', 'LAB PO', 'LAB PLAN ESTRAT', 'LAB PORT', 'LAB DESIGN', 'LAB PRAT G PROJET');

        for($id = 0; $id < 7; $id++) {
        ?>        
        <tbody>
            <tr>
                <th scope="row"><?php echo $id+1 ?></th>
                <td><?php echo $salamaterias[$id]?></td>
                <td></td>
                <td><?php echo $salaapelidos[$id]?></td>
                <td><button type="button" class="btn btn-warning">Editar</button>&nbsp&nbsp&nbsp<button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
        </tbody>
        <?php } ?>
        </table>
</div>

<?php
    include "./rodape.php";
?>
