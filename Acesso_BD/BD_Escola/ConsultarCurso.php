<html>

<head>

    <meta charset="UTF-8">
    <title>Consultar Curso Cadastrado</title>

</head>

<body>

    <form name = "cliente" method = "POST" action = "">

        <fieldset id = "a">

            <legend><b> Informe o nome do Curso desejado: </b></legend>
                <p> Nome: <input name = "txtnome" type = "text" size = "40" maxlength = "40" placeholder = "Nome do Curso">

        </fieldset>
        <br>
        <fieldset id = "b">

            <legend><b> Opções: </b></legend>
                <br>
                <input name = "btenviar" type = "submit" value = "Consultar">
                <input name = "limpar" type = "reset" value = "Limpar">
        
        </fieldset>
        <br>
        <fieldset id = "c">

            <legend><b> Resultado: </b></legend>

            <?php

        extract($_POST, EXTR_OVERWRITE);
        if(isset($btenviar)){

            include_once 'curso.php';
            $pro = new Curso();
            $pro->setNome($txtnome.'%');
            $pro_bd=$pro->ConsultarCurso();
            foreach($pro_bd as $pro_mostrar){

                ?> <br>
                <b><?php echo "Código do Curso: ".$pro_mostrar[0];?></b><br><br>
                <b><?php echo "Nome: ".$pro_mostrar[1];?></b><br><br>
                <b><?php echo "Disciplina 1: ".$pro_mostrar[2];?></b><br><br>
                <b><?php echo "Disciplina 2: ".$pro_mostrar[3];?></b><br><br>
                <b><?php echo "Disciplina 3: ".$pro_mostrar[4];?></b>
                <?php

            }

        }

    ?>
        
        </fieldset>

    </form>

    <center>    <br><br><br><br>

    <button><a href = "menuEsc.html"> Voltar </a></button>

</body>

</html>