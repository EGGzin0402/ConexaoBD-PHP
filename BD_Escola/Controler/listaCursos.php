<html>

<head>
    <meta charset="UTF-8">
    <title> Lista de Cursos </title>
    
</head>
<body>
    

    <div id="titulo"> <center><font color="black" face = "Century Gothic" size = "6"><b>Cursos Disponíveis</b><br><br><font size = "2"> </div>
        <?php

        include_once "curso.php";
        $e = new Curso();
        $esc_bd=$e->ListarCurso();

        ?>


    <div class="background-txt">
  
    <b> Código Curso &nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp; Código Disciplina Um &nbsp;&nbsp;&nbsp;&nbsp; Código Disciplina Dois &nbsp;&nbsp;&nbsp;&nbsp; Código Disciplina Três </b>

    <?php

	foreach ($esc_bd as $esc_mostrar)
    {

    ?>

    <br><br>
    <b> <?php echo $esc_mostrar[0]; ?> </b> &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $esc_mostrar[1]; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $esc_mostrar[2]; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $esc_mostrar[3]; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $esc_mostrar[4]; ?> 
    <?php

    }

    echo "<br><br><button><a href = 'menuEsc.html'> Voltar </a></button>"; ?> 
    

    </div>

     

    

    
</body>
</html>