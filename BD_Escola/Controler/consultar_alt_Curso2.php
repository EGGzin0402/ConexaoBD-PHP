<html>

<head>

    <meta charset="UTF-8">
    <title>Alterar Curso Cadastrado</title>

</head>

<body>

<fieldset id = "a">

<legend><b> Alterar: </b></legend>

        <?php

        $txtCodCurso=$_POST["txtCodCurso"];
        include_once 'curso.php';
        $p = new Curso();
        $p->setCodCurso($txtCodCurso);
        $pro_bd=$p->alterar();

        ?> 

    <form name = "curso2" method = "POST" action = "">

        <?php

        foreach($pro_bd as $pro_mostrar){

        ?>
        
        <input type="hidden" name ="txtCodCurso" size="2" value='<?php echo $pro_mostrar[0]?>'>
        <b><?php echo "Código do Curso: ".$pro_mostrar[0];?></b><br><br>
        <b><?php echo "Nome do Curso: "?></b><br><br>
        <input type="text" name ="txtnome" size="50" value='<?php echo $pro_mostrar[1]?>'><br><br>
        <b><?php echo "Código da Disciplina 1: "?></b><br><br>
        <input type="text" name ="txtCodDisc1" size="2" value='<?php echo $pro_mostrar[2]?>'><br><br>
        <b><?php echo "Código da Disciplina 2: "?></b><br><br>
        <input type="text" name ="txtCodDisc2" size="2" value='<?php echo $pro_mostrar[3]?>'><br><br>
        <b><?php echo "Código da Disciplina 3: "?></b><br><br>
        <input type="text" name ="txtCodDisc3" size="2" value='<?php echo $pro_mostrar[4]?>'><br><br>
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

            include_once 'curso.php';
            $pro = new Curso();
            $pro->setCodCurso($txtCodCurso);
            $pro->setNome($txtnome);
            $pro->setCodDisc1($txtCodDisc1);
            $pro->setCodDisc2($txtCodDisc2);
            $pro->setCodDisc3($txtCodDisc3);
            echo "<br><br><h3>".$pro->alterar2()."</h3>";
            header("location:consultar_alt_Curso.php");

        }

    ?>

    <center>    <br><br><br><br>

    <button><a href = "menuEsc.html"> Voltar </a></button>

</body>

</html>