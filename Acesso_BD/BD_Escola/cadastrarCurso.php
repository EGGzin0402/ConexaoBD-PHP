<html>

<head>

    <meta charset="UTF-8">
    <title>Cadastrar Cursos</title>

</head>

<body>

    <form name = "cliente" method = "POST" action = "">

        <fieldset id = "a">

            <legend><b> Curso: </b></legend>
                <p> Nome: <input name = "txtnome" type = "text" size = "40" maxlength = "40" placeholder = "Nome do Curso"></p>
                <p> Código da Primeira Disciplina: <input name = "txtcoddisc1" type = "text" size = "2" maxlength = "2" placeholder = "00"></p>
                <p> Código da Segunda Disciplina: <input name = "txtcoddisc2" type = "text" size = "2" maxlength = "2" placeholder = "00"></p>
                <p> Código da Terceira Disciplina: <input name = "txtcoddisc3" type = "text" size = "2" maxlength = "2" placeholder = "00"></p>

        </fieldset>
        <br>
        <fieldset id = "b">

            <legend><b> Opções: </b></legend>
                <br>
                <input name = "btenviar" type = "submit" value = "Cadastrar">
                <input name = "limpar" type = "reset" value = "Limpar">
        
        </fieldset>

    </form>

    <?php

        extract($_POST, EXTR_OVERWRITE);
        if(isset($btenviar)){

            include_once 'curso.php';
            $pro = new Curso();
            $pro->setNome($txtnome);
            $pro->setCodDisc1($txtcoddisc1);
            $pro->setCodDisc2($txtcoddisc2);
            $pro->setCodDisc3($txtcoddisc3);
            echo "<h3><br><br>".$pro->salvarCurso()."</h3>";

        }

    ?>
    <br>
    <button><a href = "menuEsc.html"> Voltar </a></button>
    
</body>

</html>




