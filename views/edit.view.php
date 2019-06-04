<?php 
require("partials/header.php");   
require '../models/edit.php';

foreach ($tarefas as $tarefa): ?>

<div class="container">
	<form action="../models/edit.php?id=<?= $tarefa->id ?>" method="post" target="_self">
        <h3>Editar Tarefa #<?= $tarefa->id ?></h3><br>
        <div class="form-group col-md-6">
            <label for="inputDescricao">Descrição</label>
            <input name="descricao" type="text" class="form-control" id="inputDescricao" maxlength="30" placeholder="Ex.: Estudar tal matéria" value="<?= $tarefa->descricao ?>" required>
        </div>
        <div class="form-check col-md-6">
            <input <?php if($tarefa->concluida): echo "checked"; endif ;  ?> name="concluida" type="checkbox" id="concluida">
            <label class="form-check-label" for="concluida">Concluída</label>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
	</form>
</div>

<?php endforeach ;

require("partials/footer.php"); ?>