<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";

$id = $_GET["id"];
$nome = "";
$cidade = "";
$estado = "";
$peso = "";
$altura = "";
$data_nascimento = "";
$data_ultima_consulta = "";
$sql = "select * from t_cliente where id = $id ";
$todos_os_clientes = mysqli_query($conexao, $sql);
while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
    $nome = $um_cliente["nome"];
    $cidade = $um_cliente["cidade"];
    $estado = $um_cliente["estado"];
    $peso = $um_cliente["peso"];
    $altura = $um_cliente["altura"];
    $data_nascimento = $um_cliente["data_nascimento"];
    $data_ultima_consulta = $um_cliente["data_ultima_consulta"];
endwhile;
?>

<h1>Editar Cliente<?php echo $id; ?> </h1>

<form method="post" action="atualizar.php?id=<?php echo $id; ?>">
<div class="row ms-1 me-1">
    <div class="col">
            <div class="row">
                <div class="col-6 mb-2">
                    <label class="form-label">Nome</label>
                    <input class="form-control" name="nome" value="<?php echo $nome ?>">
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">Cidade</label>
                    <input class="form-control" name="cidade" value="<?php echo $cidade ?>">
                </div>
                <div class="col-6 mb-2">
                        <label class="form-label">Estado</label>
                       
                            <select class="form-select" id="floatingSelect" name="estado" value="<?php echo $estado ?>">
                                <option selected>Estado</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                       
                    </div>
                <div class="col-6 mb-2">
                    <label class="form-label">Peso</label>
                    <input class="form-control" name="peso" type="number" value="<?php echo $peso ?>" >
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">Altura</label>
                    <input class="form-control" name="altura" type="double" value="<?php echo $altura ?>">
                </div>
                <div class="col-3 mb-2">
                    <label class="form-label">Data de Nascimento</label>
                    <input class="form-control" name="data_nascimento" type="date" value="<?php echo $data_nascimento ?>">
                </div>
                <div class="col-3 mb-2">
                    <label class="form-label">Data da Ultima Consulta</label>
                    <input class="form-control" name="data_ultima_consulta" type="date" value="<?php echo $data_ultima_consulta ?>">
                </div>
            </div>
<button type="submit">Atualizar</button>
</form>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>