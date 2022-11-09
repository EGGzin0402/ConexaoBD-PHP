<html>

<head>

    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>


<form class = "" name = "cliente" method = "POST" action = "">

        <div class="mb-3">

            <legend><b> Dados do Produto: </b></legend>
                <label for="exampleInputEmail1" class="form-label"> Nome: </label>
                <input class= "form-control" name = "txtnome" type = "text" size = "40" maxlength = "40" placeholder = "Nome do produto">
                <br>
                <label for="exampleInputEmail1" class="form-label"> Estoque: </label>
                <input class= "form-control" name = "txtestoq" type = "text" size = "10" placeholder = "0">

        </div>

        <br>
        <div class="mb-3">

            <legend><b> Opções: </b></legend>
                <br>
                <button type="su'bmit" class="btn btn-success">Cadastrar</button>
                <button type="reset" class="btn btn-primary">Limpar</button>
        
        </div>

    </form>



    <?php

        extract($_POST, EXTR_OVERWRITE);
        if(isset($btenviar)){

            include_once 'produto.php';
            $pro = new Produto();
            $pro->setNome($txtnome);
            $pro->setEstoque($txtestoq);
            echo "<h3><br><br>".$pro->Salvar()."</h3>";

        }

    ?>
    <br>
    <a href = "menu.php"><button class ="btn btn-danger ">Voltar</button><a>
    
</body>

</html>




