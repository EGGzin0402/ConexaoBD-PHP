<html>

<head>

    <meta charset="UTF-8">
    <title>Alterar Disciplina Cadastrada</title>

</head>

<body>

<fieldset id = "a">

<legend><b> Alterar: </b></legend>

        <?php

        $txtCodDisc=$_POST["txtCodDisc"];
        include_once 'disciplina.php';
        $p = new Disciplina();
        $p->setCodDisc($txtCodDisc);
        $pro_bd=$p->alterar();

        ?> 

    <form name = "disciplina2" method = "POST" action = "">

        <?php

        foreach($pro_bd as $pro_mostrar){

        ?>
        
        <input type="hidden" name ="txtCodDisc" size="2" value='<?php echo $pro_mostrar[0]?>'>
        <b><?php echo "Código da Disciplina: ".$pro_mostrar[0];?></b><br><br>
        <b><?php echo "Nome da Disciplina: "?></b><br><br>
        <input type="text" name ="txtnome" size="50" value='<?php echo $pro_mostrar[1]?>'><br><br>
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

            include_once 'disciplina.php';
            $pro = new Disciplina();
            $pro->setCodDisc($txtCodDisc);
            $pro->setNome($txtnome);
            echo "<br><br><h3>".$pro->alterar2()."</h3>";
            header("location:consultar_alt_Disciplina.php");

        }

    ?>

    <center>    <br><br><br><br>

    <button><a href = "menuEsc.html"> Voltar </a></button>

</body>

</html>