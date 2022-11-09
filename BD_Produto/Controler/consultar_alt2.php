<html>

<head>

    <meta charset="UTF-8">
    <title>Alterar Produto Cadastrado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

<fieldset id = "a">

<legend><b> Alterar: </b></legend>

        <?php

        $txtid=$_POST["txtid"];
        include_once 'produto.php';
        $p = new Produto();
        $p->setId($txtid);
        $pro_bd=$p->alterar();

        ?> 

    <form name = "cliente2" method = "POST" action = "">

        <?php

        foreach($pro_bd as $pro_mostrar){

        ?>
        
        <input type="hidden" name ="txtid" size="5" value='<?php echo $pro_mostrar[0]?>'>
        <b><?php echo "ID: ".$pro_mostrar[0];?></b><br><br>
        <b><?php echo "Nome: "?></b><br><br>
        <input type="text" name ="txtnome" size="25" value='<?php echo $pro_mostrar[1]?>'><br><br>
        <b><?php echo "Estoque: "?></b><br><br>
        <input type="text" name ="txtestoq" size="10" value='<?php echo $pro_mostrar[2]?>'>
        <br><br><br><center>
        <input type="submit" name ="btnalterar" value = "Alterar">

        <?php

            }

        ?>

    </form>

</fieldset>

    <?php

        extract($_POST, EXTR_OVERWRITE);
        if(isset($btnalterar)){

            include_once 'produto.php';
            $pro = new Produto();
            $pro->setNome($txtnome);
            $pro->setEstoque($txtestoq);
            $pro->setId($txtid);
            echo "<br><br><h3>".$pro->alterar2()."</h3>";
            header("location:consultar_alt.php");

        }

    ?>

    <center>    <br><br><br><br>

    <a href = "menu.php"><button class ="btn btn-success">Voltar</button><a>

</body>

</html>