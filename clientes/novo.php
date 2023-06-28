<?php
include "../includes/cabecalho.php";
?>
<h1 class="text-center">Novo Cliente</h1>



<div class="row ms-1 me-1">
    <div class="col">
        <form action="" class="inserir.php">
            <div class="row">
                <div class="col-6 mb-2">
                    <label class="form-label">Nome</label>
                    <input class="form-control" name="nome">
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">Cidade</label>
                    <input class="form-control" name="cidade">
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">Estado</label>
                    <input class="form-control" name="estado">
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">Peso</label>
                    <input class="form-control" name="peso">
                </div>
                <div class="col-6 mb-2">
                    <label class="form-label">Altura</label>
                    <input class="form-control" name="altura">
                </div>
                <div class="col-3 mb-2">
                    <label class="form-label">Data de Nascimento</label>
                    <input class="form-control" name="data_nascimento" type="date">
                </div>
                <div class="col-3 mb-2">
                    <label class="form-label">Data da Ultima Consulta</label>
                    <input class="form-control" name="data_ultima_consulta" type="date">
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a href="../clientes/inserir.php"><button class="btn btn-outline-success w-100" type="submit">Adicionar</button></a>
        </div>
    </div>
</div>
<?php
include "../includes/rodape.php";
?>