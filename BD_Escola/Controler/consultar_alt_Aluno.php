<html>

<head>

    <meta charset="UTF-8">
    <title>Alterar Aluno Cadastrado</title>

</head>

<body>

    <form name = "aluno" method = "POST" action = "consultar_alt_Aluno2.php">

        <fieldset id = "a">

            <legend><b> Informe a matrícula do aluno desejado: </b></legend>
                <p> Matrícula: <input name = "txtmat" type = "text" size = "20" maxlength = "5" placeholder = "Matrícula do Aluno">

        </fieldset>
        <br>
        <fieldset id = "b">

            <legend><b> Opções: </b></legend>
                <br>
                <input name = "btenviar" type = "submit" value = "Consultar">
                <input name = "limpar" type = "reset" value = "Limpar">
        
        </fieldset>
        <br>
        

    </form>

    <center>    <br><br><br><br>

    <button><a href = "menuEsc.html"> Voltar </a></button>

</body>

</html>