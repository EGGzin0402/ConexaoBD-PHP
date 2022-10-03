<html>

<head>

    <meta charset="UTF-8">
    <title>Cadastrar Alunos</title>

</head>

<body>

    <form name = "cliente" method = "POST" action = "">

        <fieldset id = "a">

            <legend><b> Dados do Aluno: </b></legend>
                <p> Matricula: <input name = "txtmat" type = "text" size = "5" maxlength = "5" placeholder = "0"></p>
                <p> Nome: <input name = "txtnome" type = "text" size = "100" maxlength = "100" placeholder = "Nome do Aluno"></p>
                <p> Endereço: <input name = "txtendereco" type = "text" size = "50" maxlength = "50" placeholder = "Endereço do Aluno"></p>
                <p> Cidade: <input name = "txtcidade" type = "text" size = "20" maxlength = "20" placeholder = "Cidade"></p>
                <p> Código do Curso: <input name = "txtcodcurso" type = "text" size = "2" maxlength = "2" placeholder = "00"></p>

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

            include_once 'aluno.php';
            $pro = new Aluno();
            $pro->setMatricula($txtmat);
            $pro->setNome($txtnome);
            $pro->setEndereco($txtendereco);
            $pro->setCidade($txtcidade);
            $pro->setCodCurso($txtcodcurso);
            echo "<h3><br><br>".$pro->salvarAluno()."</h3>";

        }

    ?>
    <br>
    <button><a href = "menuEsc.html"> Voltar </a></button>
    
</body>

</html>




