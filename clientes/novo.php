<?php
include "../includes/cabecalho.php";
?>
<h1 class="text-center">Novo Cliente</h1>


<form action="inserir.php" method="post">
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
                       
                            <select class="form-select" id="floatingSelect" name="estado">
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
                        <input class="form-control" name="peso" type="number">
                    </div>
                    <div class="col-6 mb-2">
                        <label class="form-label">Altura</label>
                        <input class="form-control" name="altura" type="double">
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
                <button class="btn btn-outline-success w-25" type="submit">Adicionar</button>
            </div>
        </div>
    </div>
</form>
<?php
include "../includes/rodape.php";
?>