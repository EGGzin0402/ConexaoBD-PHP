<html>

<head>
    <meta charset="UTF-8">
    <title> Lista de Produtos </title>
    
</head>
<body>
    

    <div id="titulo"> <center><font color="black" face = "Century Gothic" size = "6"><b>Relação de Produtos Cadastrados</b><br><br><font size = "4"> </div> 
        <?php

        include_once "produto.php";
        $p = new Produto();
        $pro_bd=$p->Listar();

        ?>


    <div class="background-txt">
  
    <b> Id &nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp; Estoque </b>

    <?php

	foreach ($pro_bd as $pro_mostrar)
    {

    ?>

    <br><br>
    <b> <?php echo $pro_mostrar[0]; ?> </b> &nbsp;&nbsp;&nbsp;&nbsp; 
        <?php echo $pro_mostrar[1]; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $pro_mostrar[2]; ?> 
    <?php

    }

    echo "<br><br><button><a href = 'menu.html'> Voltar </a></button>"; ?> 
    

    </div>

     

    

    
</body>
</html>