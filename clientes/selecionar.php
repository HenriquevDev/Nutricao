<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";
?>
<p class="mt-3 ms-2">
    <a href="novo.php"><button class="btn btn-outline-dark">Adicionar Cliente</button></a>
</p>
<h2>Listagem de Clientes</h2>
<table class="table table-bordered">
    <tr class="table text-center table-secondary table-striped-columns fw-semibold">
        <td>ID</td>
        <td>NOME</td>
        <td>CIDADE</td>
        <td>ESTADO</td>
        <td>PESO</td>
        <td>ALTURA</td>
        <td>DATA DE NASCIMENTO</td>
        <td>ULTIMA CONSULTA</td>
        <td class="col-3">AÇÕES</td>
    </tr>


    <?php
    $sql = "select * from t_cliente";
    $todos_os_clientes = mysqli_query($conexao, $sql);
    while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)) :
    ?>
            <td class="text-center"><?php echo $um_cliente['id']; ?></td>
            <td><?php echo $um_cliente['nome'] ?></td>
            <td><?php echo $um_cliente['cidade']?></td>
            <td><?php echo $um_cliente['estado']?></td>
            <td><?php echo $um_cliente['peso']?></td>
            <td><?php echo $um_cliente['altura']?></td>
            <td><?php echo date('d/m/Y', strtotime($um_cliente['data_nascimento']))?></td>
            <td><?php echo date('d/m/Y', strtotime($um_cliente['data_ultima_consulta']))?></td>
            <td class="text-center flex-row">
                <div class="d-flex acoes ">
                <a  href="vizualizar.php?id=<?php echo $um_cliente['id']; ?>"><button class="botao btn btn-link"><img src="../img/vizualizar.png" width="25" title="vizualizar"></button></a>

                <a  href="editar.php?id=<?php echo $um_cliente['id']; ?>"><button class="botao btn btn-link"><img src="../img/editar.png" width="25" title="editar" ></button></a>

                <a  href="deletar.php?id=<?php echo $um_cliente['id']; ?>"><button class="botao btn btn-link"><img src="../img/excluir.png" width="25" title="excluir"></button></a>
            </div>
        </td>
    <?php
    endwhile;
    ?>
</table>
<?php
include "../includes/rodape.php";
?>