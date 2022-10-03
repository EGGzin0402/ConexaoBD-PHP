<html>

<head>

    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>

</head>

<body>

    <form name = "cliente" method = "POST" action = "">

        <fieldset id = "a">

            <legend><b> Dados do Produto: </b></legend>
                <p> Nome: <input name = "txtnome" type = "text" size = "40" maxlength = "40" placeholder = "Nome do produto">
                <p> Estoque: <input name = "txtestoq" type = "text" size = "10" placeholder = "0"></p>

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

            include_once 'produto.php';
            $pro = new Produto();
            $pro->setNome($txtnome);
            $pro->setEstoque($txtestoq);
            echo "<h3><br><br>".$pro->salvar()."</h3>";

        }

    ?>
    <br>
    <button><a href = "menu.html"> Voltar </a></button>
    
</body>

</html>




