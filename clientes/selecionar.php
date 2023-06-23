<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>
<p>
    <a href="novo.php">Adicionar Cliente</a>
</p>
<h2>Listagem de Clientes</h2>
<table class="table table-bordered">
    <tr class="table text-center table-secondary table-striped-columns fw-semibold">
        <td class="col-3">ID</td>
        <td class="col-3">NOME</td>
        <td class="col-3">CIDADE</td>
        <td class="col-3">ESTADO</td>
        <td class="col-3">PESO</td>
        <td class="col-3">ALTURA</td>
        <td class="col-3">DATA DE NASCIMENTO</td>
        <td class="col-3">ULTIMA CONSULTA</td>
        <td class="col-3">AÇÕES</td>
    </tr>


    <?php
    $sql = "select * from t_cliente";
    $todos_os_clientes = mysqli_query($conexao, $sql);
    while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)) :
    ?>
        <tr>
            <td class="text-center"><?php echo $um_cliente['id']; ?></td>
            <td><?php echo $um_cliente['nome'] ?></td>
            <td><?php echo $um_cliente['cidade']?></td>
            <td><?php echo $um_cliente['estado']?></td>
            <td><?php echo $um_cliente['peso']?></td>
            <td><?php echo $um_cliente['altura']?></td>
            <td><?php echo $um_cliente['data_nascimento']?></td>
            <td><?php echo $um_cliente['data_ultima_consulta']?></td>
            <td>
                <a href="vizualizar.php?id=<?php echo $um_cliente['id']; ?>">Vizualizar
                </a>
                <a href="editar.php?id=<?php echo $um_cliente['id']; ?>">Editar
                </a>
                <a href="deletar.php?id=<?php echo $um_cliente['id']; ?>">Excluir</a>
            </td>
        </tr>
    <?php
    endwhile;
    ?>
</table>
<?php
include "../includes/rodape.php";
?>