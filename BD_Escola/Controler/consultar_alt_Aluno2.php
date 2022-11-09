<html>

<head>

    <meta charset="UTF-8">
    <title>Alterar Aluno Cadastrado</title>

</head>

<body>

<fieldset id = "a">

<legend><b> Alterar: </b></legend>

        <?php

        $txtmat=$_POST["txtmat"];
        include_once 'aluno.php';
        $p = new Aluno();
        $p->setMatricula($txtmat);
        $pro_bd=$p->alterar();

        ?> 

    <form name = "aluno2" method = "POST" action = "">

        <?php

        foreach($pro_bd as $pro_mostrar){

        ?>
        
        <input type="hidden" name ="txtmat" size="5" value='<?php echo $pro_mostrar[0]?>'>
        <b><?php echo "Matricula: ".$pro_mostrar[0];?></b><br><br>
        <b><?php echo "Nome: "?></b><br><br>
        <input type="text" name ="txtnome" size="50" value='<?php echo $pro_mostrar[1]?>'><br><br>
        <b><?php echo "Endereço: "?></b><br><br>
        <input type="text" name ="txtendereco" size="50" value='<?php echo $pro_mostrar[2]?>'><br><br>
        <b><?php echo "Cidade: "?></b><br><br>
        <input type="text" name ="txtcidade" size="30" value='<?php echo $pro_mostrar[3]?>'><br><br>
        <b><?php echo "CodCurso: "?></b><br><br>
        <input type="text" name ="txtCodCurso" size="2" value='<?php echo $pro_mostrar[4]?>'><br><br>
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

            include_once 'aluno.php';
            $pro = new Aluno();
            $pro->setMatricula($txtmat);
            $pro->setNome($txtnome);
            $pro->setEndereco($txtendereco);
            $pro->setCidade($txtcidade);
            $pro->setCodCurso($txtCodCurso);
            echo "<br><br><h3>".$pro->alterar2()."</h3>";
            header("location:consultar_alt_Aluno.php");

        }

    ?>

    <center>    <br><br><br><br>

    <button><a href = "menuEsc.html"> Voltar </a></button>

</body>

</html>