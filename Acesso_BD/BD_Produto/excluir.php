<html>

<head>

    <meta charset="UTF-8">
    <title>Excluir Produto</title>

</head>

<body>

    <form name = "cliente" method = "POST" action = "">

        <fieldset id = "a">

            <legend><b> Informe o ID do produto desejado: </b></legend>
                <p> ID: <input name = "txtid" type = "text" size = "20" maxlength = "5" placeholder = "ID do produto">

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

                include_once 'produto.php';
                $pro = new Produto();
                $pro->setId($txtid);
                echo "<h3>".$pro->Exclusao()."</h3>";

                }

            ?>

        </fieldset>
        <br>
        <button><a href = "menu.html"> Voltar </a></button>

    </form>

</body>

</html>