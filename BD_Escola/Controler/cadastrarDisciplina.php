<html>

<head>

    <meta charset="UTF-8">
    <title>Cadastrar Disciplinas</title>

</head>

<body>

    <form name = "cliente" method = "POST" action = "">

        <fieldset id = "a">

            <legend><b> Disciplina: </b></legend>
                <p> Código Disciplina: <input name = "txtcoddisc" type = "text" size = "2" maxlength = "2" placeholder = "00"></p>
                <p> Nome: <input name = "txtnome" type = "text" size = "40" maxlength = "40" placeholder = "Nome do Curso"></p>
                
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

            include_once 'disciplina.php';
            $pro = new Disciplina();
            $pro->setCodDisc($txtcoddisc);
            $pro->setNome($txtnome);
            echo "<h3><br><br>".$pro->salvarDisciplina()."</h3>";

        }

    ?>
    <br>
    <button><a href = "menuEsc.html"> Voltar </a></button>
    
</body>

</html>




