<html>

<head>

    <meta charset="UTF-8">
    <title>Excluir Disciplina</title>

</head>

<body>

    <form name = "cliente" method = "POST" action = "">

        <fieldset id = "a">

            <legend><b> Informe o Código da Disciplina desejado: </b></legend>
                <p> Código da Disciplina: <input name = "txtcoddisc" type = "text" size = "20" maxlength = "5" placeholder = "Código da Disciplina">

        </fieldset>
        <br>
        <fieldset id = "b">

            <legend><b> Opções: </b></legend>
                <br>
                <input name = "btenviar" type = "submit" value = "Excluir">
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
                $pro->setCodDisc($txtcoddisc);
                echo "<h3>".$pro->ExcluirDisciplina()."</h3>";

                }

            ?>

        </fieldset>
        <br>
        <button><a href = "menuEsc.html"> Voltar </a></button>

    </form>

</body>

</html>