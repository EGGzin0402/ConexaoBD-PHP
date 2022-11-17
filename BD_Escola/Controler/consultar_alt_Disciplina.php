<html>

<head>

    <meta charset="UTF-8">
    <title>Alterar Disciplina Cadastrada</title>

</head>

<body>

    <form name = "disciplina" method = "POST" action = "consultar_alt_Disciplina2.php">

        <fieldset id = "a">

            <legend><b> Informe o código da disciplina desejada: </b></legend>
                <p> Código da disciplina: <input name = "txtCodDisc" type = "text" size = "20" maxlength = "2" placeholder = "Código da Disciplina">

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