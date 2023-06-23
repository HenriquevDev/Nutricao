<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["id"];
$nome = "";
$sql = "select * from t_cliente where id = $id ";
$todos_os_clientes = mysqli_query($conexao, $sql);
while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
    $nome = $um_cliente["nome"];
endwhile;
?>
<h1>Editar Cliente<?php echo $id; ?> </h1>
<form method="post" action="atualizar.php?id=<?php echo $id; ?>">
Nome: <input name="nome" value="<?php echo $nome; ?>"><br>
<button type="submit">Atualizar</button>
</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>