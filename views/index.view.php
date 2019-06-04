<?php require("views/partials/header.php"); ?>

  <body>

    <div class="container">

      <div class="starter-template">
        <h1>Tarefas</h1>

        <li style="margin-top: 1.5em;">
          <strike>Tarefa 1</strike>
        </li>

        <li style="margin-top: 1.5em;">
          <strike>Tarefa 2</strike>
        </li>
      
      </div>


      <form action=" views/create.view.php <?php //$tarefas[0]->create()?>" method="POST">
        <input name="criar" type="text" hidden>
        <button type="submit"  class="btn btn-primary">Adicionar Tarefa</button>
      </form>

    </div>

<?php require("views/partials/footer.php");?>