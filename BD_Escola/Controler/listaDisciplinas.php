<html>

<head>
    <meta charset="UTF-8">
    <title> Lista de Disciplinas </title>
    
</head>
<body>
    

    <div id="tituloListar"> <center><font color="black" face = "Century Gothic" size = "6"><b>Disciplinas Disponíveis</b><br><br><font size = "2"> </div>
        <?php

        include_once "disciplina.php";
        $e = new Disciplina();
        $esc_bd=$e->ListarDisciplina();

        ?>


    <div class="bg-text">
  
    <b> Código Disciplina &nbsp;&nbsp;&nbsp;&nbsp; Nome </b>

    <?php

    foreach ($esc_bd as $esc_mostrar)
    {

    ?>

    <br><br>
    <b> <?php echo $esc_mostrar[0]; ?> </b> &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $esc_mostrar[1]; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
    <?php

    }

    echo "<br><br><button><a href = 'menuEsc.html'> Voltar </a></button>"; ?>
    

    </div>

     

    

    
</body>
</html>