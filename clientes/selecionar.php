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
        <td>AÇÕES</td>
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
            <td class="text-center">
                
                <a href="vizualizar.php?id=<?php echo $um_cliente['id']; ?>"><button class="btn btn-link">Vizualizar</button></a>

                <a href="editar.php?id=<?php echo $um_cliente['id']; ?>"><button class="btn btn-link">Editar</button></a>

                <a href="deletar.php?id=<?php echo $um_cliente['id']; ?>"><button class="btn btn-link">Excluir</button></a>
            </td>
        </tr>
    <?php
    endwhile;
    ?>
</table>
<?php
include "../includes/rodape.php";
?>