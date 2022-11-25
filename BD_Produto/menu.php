<!doctype html>

<html>

  <head>
    <meta charset="UTF-8">
    <title>Menu Produto</title>


    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script sr c="https://code.jquery.com/jquery-3.0.0.min.js%22%3E"></script>

    <script language="javascript">
      function blockletras(keypress) {

        if (keypress >= 48 && keypress <= 57) {

          return true;

        } else {

          return false;

        }

      }

      function blocknum(keypress) {

        if (keypress >= 48 && keypress <= 57) {

          return false;

        } else {

          return true;

        }

      }
    </script>

  </head>

  <body>

    <div class="navigation">
      <ul>
        <li class="list">

          <a data-bs-toggle="collapse" href="#Cadastrar" role="button" aria-expanded="true" aria-controls="Cadastrar">
            <span class="icon"><ion-icon name="add-outline"></ion-icon></span>
            <span class="title">Cadastrar</span>
          </a>

        </li>

        <li>

          <a data-bs-toggle="collapse" href="#Excluir" role="button" aria-expanded="true" aria-controls="Excluir">
            <span class="icon"><ion-icon name="trash-outline"></ion-icon></span>
            <span class="title">Excluir</span>
          </a>

        </li>

        <li>

          <a data-bs-toggle="collapse" href="#Consultar" role="button" aria-expanded="true" aria-controls="Consultar">
            <span class="icon"><ion-icon name="search-outline"></ion-icon></span>
            <span class="title">Consultar</span>
          </a>

        </li>

        <li>

          <a data-bs-toggle="collapse" href="#Listar" role="button" aria-expanded="true" aria-controls="Listar">
            <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
            <span class="title">Listar</span>
          </a>

        </li>

        <li>

          <a data-bs-toggle="collapse" href="#Alterar" role="button" aria-expanded="true" aria-controls="Alterar">
            <span class="icon"><ion-icon name="construct-outline"></ion-icon></span>
            <span class="title">Alterar</span>
          </a>

        </li>

        <li onClick="window.location.reload()">

          <a data-bs-toggle="collapse" href="#" role="button" aria-expanded="true" aria-controls="Recarregar">
            <span class="icon"><ion-icon name="reload-outline"></ion-icon></span>
            <span class="title">Recarregar</span>
          </a>

        </li>

      </ul>
    </div>

    <div class="collapse collapse-horizontal" id="Cadastrar">

      <div class="card" style="width: 70rem; left: 400px; top: 20px;">

        <div class="card-body">

          <form class="" name="cadastro" method="POST">

            <legend><b> Cadastro do Produto: </b></legend>

            <div class="mb-3">

              <legend><b> Dados do Produto: </b></legend>
              <label for="exampleInputEmail1" class="form-label"> Nome: </label>
              <input class="form-control" name="txtnomecad" type="text" size="40" maxlength="40"
                placeholder="Nome do produto" onkeypress="return blocknum(window.event.keyCode)">
              <br>
              <label for="exampleInputEmail1" class="form-label"> Estoque: </label>
              <input class="form-control" name="txtestoq" type="text" size="10" placeholder="0"
                onkeypress="return blockletras(window.event.keyCode)">

            </div>

            <div class="mb-3">

              <legend><b> Opções: </b></legend>
              <br>
              <button name="btenviarcad" type="submit" class="btn btn-success">Cadastrar</button>
              <button type="reset" class="btn btn-primary">Limpar</button>

            </div>

          </form>



        </div>


      </div>

    </div>

    <div class="card border-0" style="width: 70rem; left: 400px; top: 20px;" id="ResultCadastrar">

      <?php

            extract($_POST, EXTR_OVERWRITE);
      if (isset($btenviarcad)) {
          ?>

      <legend><b> Resultado da Consulta: </b></legend>

      <?php

            include_once 'bd_produto/models/produto.php';
          $pro = new Produto();
          $pro->setNome($txtnomecad);
          $pro->setEstoque($txtestoq);
          echo '<h3><br><br>' . $pro->salvar() . '</h3>';
      }

      ?>

    </div>

    <div class="collapse collapse-horizontal" id="Excluir">

      <div class="card" style="width: 70rem; left: 400px; top: 20px;">

        <div class="card-body">

          <form name="cliente" method="POST" action="">

            <legend><b> Exclusão de Produto: </b></legend>

            <div id="a">

              <legend><b> Informe o ID do produto desejado: </b></legend>
              <label for="exampleInputEmail1" class="form-label"> ID: </label>
              <input class="form-control" name="txtIDexc" type="text" size="40" maxlength="40"
                placeholder="ID do produto" onkeypress="return blockletras(window.event.keyCode)">

            </div>
            <br>
            <div id="b">

              <legend><b> Opções: </b></legend>
              <br>
              <input name="btenviarexc" type="submit" class="btn btn-success" value="Excluir">
              <input name="limpar" type="reset" class="btn btn-primary" value="Limpar">

            </div>

        </div>

      </div>

    </div>

    <div class="card border-0" style="width: 70rem; left: 400px; top: 20px;" id="ResultExcluir">

      <div class="card-body">



        <?php

        extract($_POST, EXTR_OVERWRITE);
      if (isset($btenviarexc)) {
          ?>

        <legend><b> Resultado do Excluir: </b></legend>

        <?php
          include_once 'bd_produto/models/produto.php';

          $pro = new Produto();
          $pro->setId($txtIDexc);
          echo '<h3>' . $pro->Exclusao() . '</h3>';
      }

      ?>

      </div>

    </div>

    <div class="collapse collapse-horizontal" id="Consultar">

      <div class="card" style="width: 70rem; left: 400px; top: 20px;">

        <div class="card-body">

          <form name="cliente" method="POST" action="">

            <legend><b> Consultar Produto: </b></legend>

            <div id="a">

              <legend><b> Informe o nome do produto desejado: </b></legend>
              <label for="exampleInputEmail1" class="form-label"> Nome: </label>
              <input class="form-control" name="txtnomecons" type="text" size="40" maxlength="40"
                placeholder="Nome do produto" onkeypress="return blocknum(window.event.keyCode)">

            </div>
            <br>
            <div id="b">

              <legend><b> Opções: </b></legend>
              <br>
              <input name="btenviarcon" type="submit" class="btn btn-success" value="Consultar">
              <input name="limpar" type="reset" class="btn btn-primary" value="Limpar">

            </div>
            <br>


          </form>

        </div>

      </div>

    </div>

    <div class="card border-0" style="width: 70rem; left: 400px; top: 20px;" id="ResultConsultar">

      <div class="card-body">

        <?php

            extract($_POST, EXTR_OVERWRITE);
      if (isset($btenviarcon)) {
          include_once 'bd_produto/models/produto.php';
          $pro = new Produto();
          $pro->setNome($txtnomecons . '%');
          $pro_bd = $pro->Consultar();

          ?>

        <legend><b> Resultado da Consulta: </b></legend>

        <table class="table table-striped-columns table-hover table-bordered">

          <thead>
            <tr>
              <th class="table-success border-0" scope="col">ID</th>
              <th class="table-success border-0" scope="col">Nome</th>
              <th class="table-success border-0" scope="col">Estoque</th>
            </tr>
          </thead>

          <tbody>

            <?php

                  foreach ($pro_bd as $pro_mostrar) {
                      ?>
            <tr>
              <td><?php echo $pro_mostrar[0]; ?></td>
              <td><?php echo $pro_mostrar[1]; ?></td>
              <td><?php echo $pro_mostrar[2]; ?></td>
            </tr>

            <?php

                  }
          ?>

        </table>

        <?php

      }

      ?>

      </div>

    </div>

    <div class="collapse collapse-horizontal" id="Listar">

      <div class="card" style="width: 70rem; left: 400px; top: 20px;">



        <div class="card-body">

          <legend><b> Listar Produtos: </b></legend>

          <?php

      include_once 'bd_produto/models/produto.php';
      $p = new Produto();
      $pro_bd = $p->Listar();

      ?>

          <table class="table table-striped-columns table-hover table-bordered">

            <thead>
              <tr>
                <th class="table-success border-0" scope="col">ID</th>
                <th class="table-success border-0" scope="col">Nome</th>
                <th class="table-success border-0" scope="col">Estoque</th>
              </tr>
            </thead>

            <tbody>

              <?php
          foreach ($pro_bd as $pro_mostrar) {
              ?>
              <tr>
                <td><?php echo $pro_mostrar[0]; ?></td>
                <td><?php echo $pro_mostrar[1]; ?></td>
                <td><?php echo $pro_mostrar[2]; ?></td>
              </tr>
              <?php
          }
      ?>
            </tbody>

          </table>

        </div>

      </div>

    </div>

    <div class="collapse collapse-horizontal" id="Alterar">

      <div class="card" style="width: 70rem; left: 400px; top: 20px;">

        <div class="card-body">

          <form name="cliente" method="POST" action="">

            <legend><b> Alterar produto: </b></legend>

            <div id="a">

              <legend><b> Informe o ID do produto desejado: </b></legend>
              <label for="exampleInputEmail1" class="form-label"> ID: </label>
              <input class="form-control" name="txtidalt1" type="text" size="40" maxlength="40"
                placeholder="ID do produto">

            </div>
            <br>
            <div id="b">

              <legend><b> Opções: </b></legend>
              <br>
              <button name="btenviaralt" type="submit" class="btn btn-success">Consultar</button>
              <input name="limpar" type="reset" class="btn btn-primary" value="Limpar">

            </div>

          </form>

        </div>

      </div>

    </div>

    <div class="card border-0" style="width: 70rem; left: 400px; top: 20px;" id="ResultAlterar1">

      <div class="card-body">

        <?php

              if (isset($btenviaralt)) {
                  $txtid = $_POST['txtidalt1'];
                  include_once 'bd_produto/models/produto.php';
                  $p = new Produto();
                  $p->setId($txtid);
                  $pro_bd = $p->alterar();

                  ?>

        <legend><b> Alterar: </b></legend>

        <form name="cliente2" method="POST" action="">

          <?php

                  foreach ($pro_bd as $pro_mostrar) {
                      ?>

          <label for="exampleInputEmail1" class="form-label"> ID: </label>
          <input class="form-control" name="txtidalt2" type="text" size="5"
            value='<?php echo $pro_mostrar[0]?>' readonly
            onkeypress="return blockletras(window.event.keyCode)"><br>
          <label for="exampleInputEmail1" class="form-label"> Nome: </label>
          <input class="form-control" name="txtnome" type="text" size="40" maxlength="40"
            value='<?php echo $pro_mostrar[1]?>'
            onkeypress="return blocknum(window.event.keyCode)"><br>
          <label for="exampleInputEmail1" class="form-label"> Estoque: </label>
          <input class="form-control" name="txtestoq" type="text" size="25" maxlength="40"
            value='<?php echo $pro_mostrar[2]?>'
            onkeypress="return blockletras(window.event.keyCode)"><br>
          <input type="submit" name="btnalterar" class="btn btn-success" value="Alterar">

          <?php

                  }
              }

      ?>

        </form>

      </div>

    </div>

    <div class="card border-0" style="width: 70rem; left: 400px; top: 20px;" id="ResultAlterar2">

      <div class="card-body">

        <?php
      extract($_POST, EXTR_OVERWRITE);
      if (isset($btnalterar)) {
          include_once 'bd_produto/models/produto.php';
          $pro = new Produto();
          $pro->setNome($txtnome);
          $pro->setEstoque($txtestoq);
          $pro->setId($txtidalt2);
          echo '<br><br><h3>' . $pro->alterar2() . '</h3>';
      }

      ?>

      </div>

    </div>

  </body>

</html>