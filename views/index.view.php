<?php require("views/partials/header.php"); ?>

  <body>

    <div class="container">

      <div class="starter-template">
        <h1>Tarefas</h1>

        
        <?php foreach ($tarefas as $tarefa ) : ?>

            <a href="views/edit.view.php?id=<?= $tarefa->id ?>" style="color: black;">
              <li style="margin-top: 1.5em;">

              <?php if ($tarefa->concluida) : ?> 
                
                <strike><?= $tarefa->descricao; ?></strike>

              <?php else: ?>

                <?= $tarefa->descricao; ?>

              <?php endif; ?>

              </li>
            </a>
            <a href="views/delete.view.php?id=<?= $tarefa->id ?>" style="color: red;">Excluir</a>
            

        <?php endforeach; ?>

      </div>

      <form action="<?php $tarefas[0]->create()?>" method="POST">
        <input name="criar" type="text" hidden>
        <button type="submit"  class="btn btn-primary">Adicionar Tarefa</button>
      </form>

    </div>

<?php require("views/partials/footer.php");?>