<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$id = $_GET["id"];

$nome = "";
$sql = "select * from t_cliente where id= $id";
$todos_os_clientes = mysqli_query($conexao, $sql);
while($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):

$nome = $um_cliente["nome"];
$cidade = $um_cliente["cidade"];


endwhile;
?>

<h1>Ficha de Cliente</h1>

Nome: <?php echo $nome;?>
Cidade: <?php echo $cidade;?>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>