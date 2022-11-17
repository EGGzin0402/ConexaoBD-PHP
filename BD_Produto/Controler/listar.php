<html>

<head>
    <meta charset="UTF-8">
    <title> Lista de Produtos </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>
<body>
    

    <p class = "h1 text-center">Relação de Produtos Cadastrados</p>
        <?php

        include_once "produto.php";
        $p = new Produto();
        $pro_bd=$p->Listar();

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
    foreach ($pro_bd as $pro_mostrar){

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

<a href = "menu.php"><button class ="btn btn-success">Voltar</button><a>

     

    

    
</body>
</html>