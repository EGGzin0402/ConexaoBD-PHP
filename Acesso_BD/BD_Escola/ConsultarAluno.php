<html>

<head>

    <meta charset="UTF-8">
    <title>Consultar Aluno Cadastrado</title>

</head>

<body>

    <form name = "cliente" method = "POST" action = "">

        <fieldset id = "a">

            <legend><b> Informe o nome do Aluno desejado: </b></legend>
                <p> Nome: <input name = "txtnome" type = "text" size = "40" maxlength = "40" placeholder = "Nome do Aluno">

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

            include_once 'aluno.php';
            $pro = new Aluno();
            $pro->setNome($txtnome.'%');
            $pro_bd=$pro->ConsultarAluno();
            foreach($pro_bd as $pro_mostrar){

                ?> <br>
                <b><?php echo "Matrícula: ".$pro_mostrar[0];?></b><br><br>
                <b><?php echo "Nome: ".$pro_mostrar[1];?></b><br><br>
                <b><?php echo "Endereço: ".$pro_mostrar[2];?></b><br><br>
                <b><?php echo "Cidade: ".$pro_mostrar[3];?></b><br><br>
                <b><?php echo "Código do curso: ".$pro_mostrar[4];?></b>
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