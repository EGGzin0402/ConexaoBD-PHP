<html>

<head>
    <meta charset="UTF-8">
    <title> Lista de Alunos </title>
    
</head>
<body>
    

    <div id="titulo"> <center><font color="black" face = "Century Gothic" size = "6"><b>Alunos Cadastrados</b><br><br><font size = "2"> </div>
        <?php

        include_once "aluno.php";
        $e = new Aluno();
        $esc_bd=$e->ListarAlunos();

        ?>


    <div class="background-txt">
  
    <b> Matricula &nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp; Endereço &nbsp;&nbsp;&nbsp;&nbsp; Cidade &nbsp;&nbsp;&nbsp;&nbsp; Curso </b>

    <?php

	foreach ($esc_bd as $esc_mostrar)
    {

    ?>

    <br><br>
    <b> <?php echo $esc_mostrar[0]; ?> </b> &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $esc_mostrar[1]; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $esc_mostrar[2]; ?> 
        <?php echo $esc_mostrar[3]; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $esc_mostrar[4]; ?> 
    <?php

    }

    echo "<br><br><button><a href = 'menuEsc.html'> Voltar </a></button>"; ?>
    

    </div>

     

    

    
</body>
</html>