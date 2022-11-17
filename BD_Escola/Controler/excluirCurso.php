<html>

<head>

    <meta charset="UTF-8">
    <title>Excluir Curso</title>

</head>

<body>

    <form name = "cliente" method = "POST" action = "">

        <fieldset id = "a">

            <legend><b> Informe o Código do Curso desejado: </b></legend>
                <p> Código do Curso: <input name = "txtcodcurso" type = "text" size = "20" maxlength = "5" placeholder = "Código do Curso">

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

                include_once 'curso.php';
                $pro = new Curso();
                $pro->setCodCurso($txtcodcurso);
                echo "<h3>".$pro->ExcluirCurso()."</h3>";

                }

            ?>

        </fieldset>
        <br>
        <button><a href = "menuEsc.html"> Voltar </a></button>

    </form>

</body>

</html>