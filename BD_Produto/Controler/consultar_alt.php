<html>

<head>

    <meta charset="UTF-8">
    <title>Alterar Produto Cadastrado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

    <form name = "cliente" method = "POST" action = "consultar_alt2.php">

        <fieldset id = "a">

            <legend><b> Informe o ID do produto desejado: </b></legend>
                <p> ID: <input name = "txtid" type = "text" size = "20" maxlength = "5" placeholder = "ID do produto">

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

    <button><a href = "menu.php"> Voltar </a></button>

</body>

</html>