<html>

<head>

    <meta charset="UTF-8">
    <title>Alterar Curso Cadastrado</title>

</head>

<body>

    <form name = "curso" method = "POST" action = "consultar_alt_Curso2.php">

        <fieldset id = "a">

            <legend><b> Informe o código do curso desejado: </b></legend>
                <p> Código do curso: <input name = "txtCodCurso" type = "text" size = "20" maxlength = "2" placeholder = "Código do Curso">

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