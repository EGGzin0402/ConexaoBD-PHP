<html>

<head>

    <meta charset="UTF-8">
    <title>Excluir Aluno</title>

</head>

<body>

    <form name = "cliente" method = "POST" action = "">

        <fieldset id = "a">

            <legend><b> Informe a Matrícula do Aluno desejado: </b></legend>
                <p> Matrícula: <input name = "txtmat" type = "text" size = "20" maxlength = "5" placeholder = "Matrícula do Aluno">

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

                include_once 'aluno.php';
                $pro = new Aluno();
                $pro->setMatricula($txtmat);
                echo "<h3>".$pro->ExcluirAluno()."</h3>";

                }

            ?>

        </fieldset>
        <br>
        <button><a href = "menuEsc.html"> Voltar </a></button>

    </form>

</body>

</html>