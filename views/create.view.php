<?php require("partials/header.php");?>

    <div class="container">
      <form action="../models/create.php" method="post" target="_self">
        <h3>Criar Tarefa</h3><br>
        <div class="form-group col-md-6">
            <label for="inputDescricao">Descrição</label>
            <input name="descricao" type="text" class="form-control" id="inputDescricao" maxlength="30" placeholder="Ex.: Estudar tal matéria" required>
        </div>
        <div class="form-check col-md-6">
            <input name="concluida" type="checkbox" id="concluida">
            <label class="form-check-label" for="concluida">Concluída</label>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>

    </div>

<?php require("partials/footer.php");?>