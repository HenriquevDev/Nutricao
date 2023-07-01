<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";
$id = $_GET["id"];

$nome = "";
$sql = "select * from t_cliente where id= $id";
$todos_os_clientes = mysqli_query($conexao, $sql);
while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)) :

    $nome = $um_cliente["nome"];
    $cidade = $um_cliente["cidade"];
    $estado = $um_cliente["estado"];
    $peso = $um_cliente["peso"];
    $altura = $um_cliente["altura"];
    $data_nascimento = $um_cliente["data_nascimento"];
    $data_ultima_consulta = $um_cliente["data_ultima_consulta"];

endwhile;
?>

<h1>Ficha de Cliente</h1>

<div class="container-fluid">
    <table class="table">
        <thead >
            <tr>
                <th class="bg-secondary-subtle">Nome</th>
                <th class="bg-secondary-subtle">Cidade</th>
                <th class="bg-secondary-subtle">Estado</th>
                <th class="bg-secondary-subtle">Peso</th>
                <th class="bg-secondary-subtle">Altura</th>
                <th class="bg-secondary-subtle">Data de Nascimento</th>
                <th class="bg-secondary-subtle">Data da ultima consulta</th>
            </tr>
        </thead>
        <tbody class="border-white">
            <tr>
                <td> <?php echo $nome; ?></td>
                <td><?php echo $cidade; ?></td>
                <td><?php echo $estado; ?></td>
                <td><?php echo $peso; ?></td>
                <td><?php echo $altura; ?></td>
                <td><?php echo date('d/m/Y', strtotime($data_nascimento)); ?></td>
                <td><?php echo date('d/m/Y', strtotime($data_ultima_consulta)); ?></td>
            </tr> 
        </tbody>

    </table>
    <div class="row">
        <div class="col text-center">
           <a href="../clientes/selecionar.php"> <button class="btn btn-success w-25">Voltar</button></a>
        </div>
    </div>



</div>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>