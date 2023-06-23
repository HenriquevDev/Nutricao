<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1 class="text-center">Novo Cliente</h1>

<form class="d-grid justify-content-center" action="inserir.php" method="POST">
    <div class="mb-3 mt-2">
    <label class="form-label">Nome</label>
    <input name="nome" requiered maxlength="70">
</div>
<div class="mb-3">
    <label class="form-label">Cidade</label>
    <input name="cidade" requiered maxlength="50">
</div>
<div class="mb-3">
    <label class="form-label">Estado</label>
    <input name="estado" required maxlenght="2">
</div>
<div class="mb-3">
    <label class="form-label">Peso</label>
    <input name="peso" required>
</div>
<div class="mb-3">
    <label class="form-label">Altura</label>
    <input name="altura" required>
</div>
<div class="mb-3">
    <label class="form-label">Data de Nascimento</label>
    <input name="data_nascimento" required maxlenght="8">
</div>
<div class="mb-3">
    <label class="form-label">Data da Ultima Consulta</label>
    <input name="data_ultima_consulta" required maxlenght="8">
</div>
<div class="d-grid gap-2 col-3 mb-2">
    
    <button class="btn btn-outline-primary" type="submit">Salvar</button>
</div>
</form>
<?php
include "../includes/rodape.php";
?>