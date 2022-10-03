<html>

<head>

    <meta charset="UTF-8">
    <title>Consultar Disciplina Cadastrada</title>

</head>

<body>

    <form name = "cliente" method = "POST" action = "">

        <fieldset id = "a">

            <legend><b> Informe o nome da Disciplina desejado: </b></legend>
                <p> Nome: <input name = "txtnome" type = "text" size = "40" maxlength = "40" placeholder = "Nome da disciplina">

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

            include_once 'disciplina.php';
            $pro = new Disciplina();
            $pro->setNome($txtnome.'%');
            $pro_bd=$pro->ConsultarDisciplina();
            foreach($pro_bd as $pro_mostrar){

                ?> <br>
                <b><?php echo "Código da Disciplina: ".$pro_mostrar[0];?></b><br><br>
                <b><?php echo "Nome: ".$pro_mostrar[1];?></b><br><br>
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