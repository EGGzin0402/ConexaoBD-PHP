<html>

    <head>
        <meta charset="UTF-8">
        <title>Menu Escola</title>

        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
        <script sr c="https://code.jquery.com/jquery-3.0.0.min.js%22%3E"></script>

        <script language="javascript">
            function blockletras(keypress) {

                if (keypress >= 48 && keypress <= 57) {

                    return true;

                } else {

                    return false;

                }

            }

            function blocknum(keypress) {

                if (keypress >= 48 && keypress <= 57) {

                    return false;

                } else {

                    return true;

                }

            }
        </script>

    </head>

    <body>

        <div class="sidebar">

            <div class="logo-details">

                <ion-icon name="school-outline"></ion-icon>
                <span class="logo_name">Escola</span>

            </div>

            <ul class="nav-links">

                <li>

                    <a data-bs-toggle="collapse" href="#SubmenuCadastrar" role="button" aria-expanded="true"
                        aria-controls="SubmenuCadastrar">
                        <div class="iocn-links">
                            <ion-icon name="add-outline"></ion-icon>
                            <span class="link_name">Cadastrar</span>

                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </div>
                    </a>

                    <ul class="submenu collapse" id="SubmenuCadastrar">
                        <li>
                            <a data-bs-toggle="collapse" href="#CadastrarAlunos" role="button" aria-expanded="true"
                                aria-controls="CadastrarAlunos">Alunos</a>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" href="#CadastrarCursos" role="button" aria-expanded="true"
                                aria-controls="CadastrarCursos">Cursos</a>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" href="#CadastrarDisciplinas" role="button" aria-expanded="true"
                                aria-controls="CadastrarDisciplinas">Disciplinas</a>
                        </li>
                    </ul>

                </li>

                <li>

                    <a data-bs-toggle="collapse" href="#SubmenuExcluir" role="button" aria-expanded="true"
                        aria-controls="SubmenuExcluir">

                        <div class="iocn-links">

                            <ion-icon name="trash-outline"></ion-icon>
                            <span class="link_name">Excluir</span>

                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </div>

                    </a>

                    <ul class="submenu collapse" id="SubmenuExcluir">
                        <li>
                            <a data-bs-toggle="collapse" href="#ExcluirAlunos" role="button" aria-expanded="true"
                                aria-controls="ExcluirAlunos">Alunos</a>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" href="#ExcluirCursos" role="button" aria-expanded="true"
                                aria-controls="ExcluirCursos">Cursos</a>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" href="#ExcluirDisciplinas" role="button" aria-expanded="true"
                                aria-controls="ExcluirDisciplinas">Disciplinas</a>
                        </li>
                    </ul>

                </li>

                <li>

                    <a data-bs-toggle="collapse" href="#SubmenuConsultar" role="button" aria-expanded="true"
                        aria-controls="SubmenuConsultar">

                        <div class="iocn-links">
                            <ion-icon name="search-outline"></ion-icon>
                            <span class="link_name">Consultar</span>

                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </div>

                    </a>

                    <ul class="submenu collapse" id="SubmenuConsultar">
                        <li>
                            <a data-bs-toggle="collapse" href="#ConsultarAlunos" role="button" aria-expanded="true"
                                aria-controls="ConsultarAlunos">Alunos</a>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" href="#ConsultarCursos" role="button" aria-expanded="true"
                                aria-controls="ConsultarCursos">Cursos</a>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" href="#ConsultarDisciplinas" role="button" aria-expanded="true"
                                aria-controls="ConsultarDisciplinas">Disciplinas</a>
                        </li>
                    </ul>

                </li>

                <li>

                    <a data-bs-toggle="collapse" href="#SubmenuListar" role="button" aria-expanded="true"
                        aria-controls="SubmenuListar">

                        <div class="iocn-links">

                            <ion-icon name="list-outline"></ion-icon>
                            <span class="link_name">Listar</span>

                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </div>

                    </a>

                    <ul class="submenu collapse" id="SubmenuListar">
                        <li>
                            <a data-bs-toggle="collapse" href="#ListarAlunos" role="button" aria-expanded="true"
                                aria-controls="ListarAlunos">Alunos</a>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" href="#ListarCursos" role="button" aria-expanded="true"
                                aria-controls="ListarCursos">Cursos</a>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" href="#ListarDisciplinas" role="button" aria-expanded="true"
                                aria-controls="ListarDisciplinas">Disciplinas</a>
                        </li>
                    </ul>

                </li>

                <li>

                    <a data-bs-toggle="collapse" href="#SubmenuAlterar" role="button" aria-expanded="true"
                        aria-controls="SubmenuAlterar">

                        <div class="iocn-links">
                            <ion-icon name="construct-outline"></ion-icon>
                            <span class="link_name">Alterar</span>

                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </div>

                    </a>

                    <ul class="submenu collapse" id="SubmenuAlterar">
                        <li>
                            <a data-bs-toggle="collapse" href="#AlterarAlunos" role="button" aria-expanded="true"
                                aria-controls="AlterarAlunos">Alunos</a>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" href="#AlterarCursos" role="button" aria-expanded="true"
                                aria-controls="AlterarCursos">Cursos</a>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" href="#AlterarDisciplinas" role="button" aria-expanded="true"
                                aria-controls="AlterarDisciplinas">Disciplinas</a>
                        </li>
                    </ul>

                </li>

                <li onClick="window.location.reload()">

                    <a data-bs-toggle="collapse" href="#" role="button" aria-expanded="true" aria-controls="Recarregar">
                        <div class="iocn-links">
                            <span class="icon"><ion-icon name="reload-outline"></ion-icon></span>
                            <span class="link_name">Recarregar</span>
                        </div>
                    </a>

                </li>

            </ul>
        </div>

        <!-- Cadastrar -->

        <div class="collapse collapse-horizontal" id="CadastrarAlunos">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <form class="" name="cadastro" method="POST">

                        <legend><b> Cadastro do Aluno: </b></legend>

                        <div class="mb-3">

                            <legend><b> Dados do Aluno: </b></legend>
                            <label for="exampleInputEmail1" class="form-label"> Matrícula: </label>
                            <input class="form-control" name="txtmat" type="text" size="5" maxlength="5" placeholder="0"
                                onkeypress="return blockletras(window.event.keyCode)">
                            <br>
                            <label for="exampleInputEmail1" class="form-label"> Nome: </label>
                            <input class="form-control" name="txtnome" type="text" size="100" maxlength="100"
                                placeholder="Nome do Aluno" onkeypress="return blocknum(window.event.keyCode)">
                            <br>
                            <label for="exampleInputEmail1" class="form-label"> Endereço: </label>
                            <input class="form-control" name="txtendereco" type="text" size="50" maxlength="50"
                                placeholder="Endereço do Aluno">
                            <br>
                            <label for="exampleInputEmail1" class="form-label"> Cidade: </label>
                            <input class="form-control" name="txtcidade" type="text" size="20" maxlength="20"
                                placeholder="Cidade">
                            <br>
                            <label for="exampleInputEmail1" class="form-label"> Curso: </label>
                            <input class="form-control" name="txtcodcurso" type="text" size="2" maxlength="2"
                                placeholder="00" onkeypress="return blockletras(window.event.keyCode)">

                        </div>

                        <div class="mb-3">

                            <legend><b> Opções: </b></legend>
                            <br>
                            <button name="btEnviarCadAluno" type="submit" class="btn btn-secondary">Cadastrar</button>
                            <button type="reset" class="btn btn-dark">Limpar</button>

                        </div>

                    </form>



                </div>


            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultCadastrarAluno">

            <?php

            extract($_POST, EXTR_OVERWRITE);
            if (isset($btEnviarCadAluno)) {
                ?>

            <legend><b> Resultado da Consulta: </b></legend>

            <?php


                include_once 'aluno.php';
                $pro = new Aluno();
                $pro->setMatricula($txtmat);
                $pro->setNome($txtnome);
                $pro->setEndereco($txtendereco);
                $pro->setCidade($txtcidade);
                $pro->setCodCurso($txtcodcurso);
                echo "<h3><br><br>".$pro->salvarAluno()."</h3>";
            }

            ?>

        </div>

        <div class="collapse collapse-horizontal" id="CadastrarCursos">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <form class="" name="cadastro" method="POST">

                        <legend><b> Cadastro de Curso: </b></legend>

                        <div class="mb-3">

                            <legend><b> Dados do Curso: </b></legend>
                            <label for="exampleInputEmail1" class="form-label"> Nome: </label>
                            <input class="form-control" name="txtnomecurso" type="text" size="40" maxlength="40"
                                placeholder="Nome do Curso">
                            <br>
                            <label for="exampleInputEmail1" class="form-label"> Primeira Disciplina: </label>
                            <input class="form-control" name="txtcoddisc1" type="text" size="2" maxlength="2"
                                placeholder="00" onkeypress="return blockletras(window.event.keyCode)">
                            <br>
                            <label for="exampleInputEmail1" class="form-label"> Segunda Disciplina: </label>
                            <input class="form-control" name="txtcoddisc2" type="text" size="2" maxlength="2"
                                placeholder="00" onkeypress="return blockletras(window.event.keyCode)">
                            <br>
                            <label for="exampleInputEmail1" class="form-label"> Terceira Disciplina: </label>
                            <input class="form-control" name="txtcoddisc3" type="text" size="2" maxlength="2"
                                placeholder="00" onkeypress="return blockletras(window.event.keyCode)">

                        </div>

                        <div class="mb-3">

                            <legend><b> Opções: </b></legend>
                            <br>
                            <button name="btEnviarCadCurso" type="submit" class="btn btn-secondary">Cadastrar</button>
                            <button type="reset" class="btn btn-dark">Limpar</button>

                        </div>

                    </form>



                </div>


            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultCadastrarCurso">

            <?php

            extract($_POST, EXTR_OVERWRITE);
            if (isset($btEnviarCadCurso)) {
                ?>

            <legend><b> Resultado da Consulta: </b></legend>

            <?php

                include_once 'curso.php';
                $pro = new Curso();
                $pro->setNome($txtnomecurso);
                $pro->setCodDisc1($txtcoddisc1);
                $pro->setCodDisc2($txtcoddisc2);
                $pro->setCodDisc3($txtcoddisc3);
                echo "<h3><br><br>".$pro->salvarCurso()."</h3>";
            }

            ?>

        </div>

        <div class="collapse collapse-horizontal" id="CadastrarDisciplinas">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <form class="" name="cadastro" method="POST">

                        <legend><b> Cadastro de Disciplinas: </b></legend>

                        <div class="mb-3">

                            <legend><b> Dados da Disciplina: </b></legend>
                            <label for="exampleInputEmail1" class="form-label"> Código da Disciplina: </label>
                            <input class="form-control" name="txtcoddisc" type="text" size="2" maxlength="2"
                                placeholder="00" onkeypress="return blockletras(window.event.keyCode)">
                            <br>
                            <label for="exampleInputEmail1" class="form-label"> Nome: </label>
                            <input class="form-control" name="txtnomedisc" type="text" size="40" maxlength="40"
                                placeholder="Nome do Curso">

                        </div>

                        <div class="mb-3">

                            <legend><b> Opções: </b></legend>
                            <br>
                            <button name="btEnviarCadDisciplina" type="submit"
                                class="btn btn-secondary">Cadastrar</button>
                            <button type="reset" class="btn btn-dark">Limpar</button>

                        </div>

                    </form>



                </div>


            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultCadastrarDisciplina">

            <?php

            extract($_POST, EXTR_OVERWRITE);
            if (isset($btEnviarCadDisciplina)) {
                ?>

            <legend><b> Resultado da Consulta: </b></legend>

            <?php


                include_once 'disciplina.php';
                $pro = new Disciplina();
                $pro->setCodDisc($txtcoddisc);
                $pro->setNome($txtnomedisc);
                echo "<h3><br><br>".$pro->salvarDisciplina()."</h3>";
            }

            ?>

        </div>

        <!-- Excluir -->

        <div class="collapse collapse-horizontal" id="ExcluirAlunos">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <form name="cliente" method="POST" action="">

                        <legend><b> Exclusão de Aluno: </b></legend>

                        <div id="a">

                            <legend><b> Informe a Matrícula do Aluno desejado: </b></legend>
                            <label for="exampleInputEmail1" class="form-label"> Matrícula: </label>
                            <input class="form-control" name="txtmat" type="text" size="20" maxlength="5"
                                placeholder="Matrícula do Aluno" onkeypress="return blockletras(window.event.keyCode)">

                        </div>
                        <br>
                        <div id="b">

                            <legend><b> Opções: </b></legend>
                            <br>
                            <input name="btEnviarExcAluno" type="submit" class="btn btn-secondary" value="Excluir">
                            <input name="limpar" type="reset" class="btn btn-dark" value="Limpar">

                        </div>

                </div>

            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultExcluirAlunos">

            <div class="card-body">



                <?php

                extract($_POST, EXTR_OVERWRITE);
            if (isset($btEnviarExcAluno)) {
                ?>

                <legend><b> Resultado do Excluir: </b></legend>

                <?php

                include_once 'aluno.php';
                $pro = new Aluno();
                $pro->setMatricula($txtmat);
                echo "<h3>".$pro->ExcluirAluno()."</h3>";
            }

            ?>

            </div>

        </div>

        <div class="collapse collapse-horizontal" id="ExcluirCursos">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <form name="cliente" method="POST" action="">

                        <legend><b> Exclusão de Curso: </b></legend>

                        <div id="a">

                            <legend><b> Informe o Código do Curso desejado: </b></legend>
                            <label for="exampleInputEmail1" class="form-label"> Código do Curso: </label>
                            <input class="form-control" name="txtcodcurso" type="text" size="20" maxlength="5"
                                placeholder="Código do Curso" onkeypress="return blockletras(window.event.keyCode)">

                        </div>
                        <br>
                        <div id="b">

                            <legend><b> Opções: </b></legend>
                            <br>
                            <input name="btEnviarExcCursos" type="submit" class="btn btn-secondary" value="Excluir">
                            <input name="limpar" type="reset" class="btn btn-dark" value="Limpar">

                        </div>

                </div>

            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultExcluirCursos">

            <div class="card-body">



                <?php

                extract($_POST, EXTR_OVERWRITE);
            if (isset($btEnviarExcCursos)) {
                ?>

                <legend><b> Resultado do Excluir: </b></legend>

                <?php


                include_once 'curso.php';
                $pro = new Curso();
                $pro->setCodCurso($txtcodcurso);
                echo "<h3>".$pro->ExcluirCurso()."</h3>";
            }

            ?>

            </div>

        </div>

        <div class="collapse collapse-horizontal" id="ExcluirDisciplinas">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <form name="cliente" method="POST" action="">

                        <legend><b> Exclusão de Disciplina: </b></legend>

                        <div id="a">

                            <legend><b> Informe o Código da Disciplina desejada: </b></legend>
                            <label for="exampleInputEmail1" class="form-label"> Código da Disciplina: </label>
                            <input class="form-control" name="txtcoddisc" type="text" size="20" maxlength="5"
                                placeholder="Código da Disciplina"
                                onkeypress="return blockletras(window.event.keyCode)">

                        </div>
                        <br>
                        <div id="b">

                            <legend><b> Opções: </b></legend>
                            <br>
                            <input name="btEnviarExcDisciplinas" type="submit" class="btn btn-secondary"
                                value="Excluir">
                            <input name="limpar" type="reset" class="btn btn-dark" value="Limpar">

                        </div>

                </div>

            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultExcluirDisciplinas">

            <div class="card-body">



                <?php

                extract($_POST, EXTR_OVERWRITE);
            if (isset($btEnviarExcDisciplinas)) {
                ?>

                <legend><b> Resultado do Excluir: </b></legend>

                <?php


                include_once 'disciplina.php';
                $pro = new Disciplina();
                $pro->setCodDisc($txtcoddisc);
                echo "<h3>".$pro->ExcluirDisciplina()."</h3>";
            }

            ?>

            </div>

        </div>

        <!-- Consultar -->

        <div class="collapse collapse-horizontal" id="ConsultarAlunos">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <form name="cliente" method="POST" action="">

                        <legend><b> Consultar Alunos: </b></legend>

                        <div id="a">

                            <legend><b> Informe o nome do Aluno desejado: </b></legend>
                            <label for="exampleInputEmail1" class="form-label"> Nome: </label>
                            <input class="form-control" name="txtnome" type="text" size="40" maxlength="40"
                                placeholder="Nome do Aluno" onkeypress="return blocknum(window.event.keyCode)">

                        </div>
                        <br>
                        <div id="b">

                            <legend><b> Opções: </b></legend>
                            <br>
                            <input name="btEnviarConAlunos" type="submit" class="btn btn-secondary" value="Consultar">
                            <input name="limpar" type="reset" class="btn btn-dark" value="Limpar">

                        </div>
                        <br>


                    </form>

                </div>

            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultConsultarAlunos">

            <div class="card-body">

                <?php

            extract($_POST, EXTR_OVERWRITE);
            if (isset($btEnviarConAlunos)) {
                include_once 'aluno.php';
                $pro = new Aluno();
                $pro->setNome($txtnome.'%');
                $pro_bd=$pro->ConsultarAluno();

                ?>

                <legend><b> Resultado da Consulta: </b></legend>

                <table class="table table-striped-columns table-hover table-bordered">

                    <thead>
                        <tr>
                            <th class="table-secondary border-0" scope="col">Matrícula</th>
                            <th class="table-secondary border-0" scope="col">Nome</th>
                            <th class="table-secondary border-0" scope="col">Endereço</th>
                            <th class="table-secondary border-0" scope="col">Cidade</th>
                            <th class="table-secondary border-0" scope="col">Código do Curso</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php

                        foreach ($pro_bd as $pro_mostrar) {
                            ?>
                        <tr>
                            <td><?php echo $pro_mostrar[0]; ?></td>
                            <td><?php echo $pro_mostrar[1]; ?></td>
                            <td><?php echo $pro_mostrar[2]; ?></td>
                            <td><?php echo $pro_mostrar[3]; ?></td>
                            <td><?php echo $pro_mostrar[4]; ?></td>
                        </tr>

                        <?php

                        }
                ?>

                </table>

                <?php

            }

            ?>

            </div>

        </div>

        <div class="collapse collapse-horizontal" id="ConsultarCursos">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <form name="cliente" method="POST" action="">

                        <legend><b> Consultar Cursos: </b></legend>

                        <div id="a">

                            <legend><b> Informe o nome do Curso desejado: </b></legend>
                            <label for="exampleInputEmail1" class="form-label"> Nome: </label>
                            <input class="form-control" name="txtnomecurso" type="text" size="40" maxlength="40"
                                placeholder="Nome do Curso">

                        </div>
                        <br>
                        <div id="b">

                            <legend><b> Opções: </b></legend>
                            <br>
                            <input name="btEnviarConCursos" type="submit" class="btn btn-secondary" value="Consultar">
                            <input name="limpar" type="reset" class="btn btn-dark" value="Limpar">

                        </div>
                        <br>


                    </form>

                </div>

            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultConsultarCursos">

            <div class="card-body">

                <?php

            extract($_POST, EXTR_OVERWRITE);
            if (isset($btEnviarConCursos)) {
                include_once 'curso.php';
                $pro = new Curso();
                $pro->setNome($txtnomecurso.'%');
                $pro_bd=$pro->ConsultarCurso();

                ?>

                <legend><b> Resultado da Consulta: </b></legend>

                <table class="table table-striped-columns table-hover table-bordered">

                    <thead>
                        <tr>
                            <th class="table-secondary border-0" scope="col">Código do Curso</th>
                            <th class="table-secondary border-0" scope="col">Nome</th>
                            <th class="table-secondary border-0" scope="col">Disciplina 1</th>
                            <th class="table-secondary border-0" scope="col">Disciplina 2</th>
                            <th class="table-secondary border-0" scope="col">Disciplina 3</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php

                        foreach ($pro_bd as $pro_mostrar) {
                            ?>
                        <tr>
                            <td><?php echo $pro_mostrar[0]; ?></td>
                            <td><?php echo $pro_mostrar[1]; ?></td>
                            <td><?php echo $pro_mostrar[2]; ?></td>
                            <td><?php echo $pro_mostrar[3]; ?></td>
                            <td><?php echo $pro_mostrar[4]; ?></td>
                        </tr>

                        <?php

                        }
                ?>

                </table>

                <?php

            }

            ?>

            </div>

        </div>

        <div class="collapse collapse-horizontal" id="ConsultarDisciplinas">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <form name="cliente" method="POST" action="">

                        <legend><b> Consultar Disciplinas: </b></legend>

                        <div id="a">

                            <legend><b> Informe o nome da Disciplina desejada: </b></legend>
                            <label for="exampleInputEmail1" class="form-label"> Nome: </label>
                            <input class="form-control" name="txtnomedisc" type="text" size="40" maxlength="40"
                                placeholder="Nome da disciplina">

                        </div>
                        <br>
                        <div id="b">

                            <legend><b> Opções: </b></legend>
                            <br>
                            <input name="btEnviarConDisciplina" type="submit" class="btn btn-secondary"
                                value="Consultar">
                            <input name="limpar" type="reset" class="btn btn-dark" value="Limpar">

                        </div>
                        <br>


                    </form>

                </div>

            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultConsultarDisciplinas">

            <div class="card-body">

                <?php

            extract($_POST, EXTR_OVERWRITE);
            if (isset($btEnviarConDisciplina)) {
                include_once 'disciplina.php';
                $pro = new Disciplina();
                $pro->setNome($txtnomedisc.'%');
                $pro_bd=$pro->ConsultarDisciplina();

                ?>

                <legend><b> Resultado da Consulta: </b></legend>

                <table class="table table-striped-columns table-hover table-bordered">

                    <thead>
                        <tr>
                            <th class="table-secondary border-0" scope="col">Código da Disciplina</th>
                            <th class="table-secondary border-0" scope="col">Nome</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php

                        foreach ($pro_bd as $pro_mostrar) {
                            ?>
                        <tr>
                            <td><?php echo $pro_mostrar[0]; ?></td>
                            <td><?php echo $pro_mostrar[1]; ?></td>
                        </tr>

                        <?php

                        }
                ?>

                </table>

                <?php

            }

            ?>

            </div>

        </div>

        <!-- Listar -->

        <div class="collapse collapse-horizontal" id="ListarAlunos">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <legend><b> Listar Alunos: </b></legend>

                    <?php

                        include_once 'aluno.php';
            $e = new Aluno();
            $esc_bd=$e->ListarAlunos();

            ?>

                    <table class="table table-striped-columns table-hover table-bordered">

                        <thead>
                            <tr>
                                <th class="table-secondary border-0" scope="col">Matrícula</th>
                                <th class="table-secondary border-0" scope="col">Nome</th>
                                <th class="table-secondary border-0" scope="col">Endereço</th>
                                <th class="table-secondary border-0" scope="col">Cidade</th>
                                <th class="table-secondary border-0" scope="col">Código do Curso</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                foreach ($esc_bd as $pro_mostrar) {
                    ?>
                            <tr>
                                <td><?php echo $pro_mostrar[0]; ?>
                                </td>
                                <td><?php echo $pro_mostrar[1]; ?>
                                </td>
                                <td><?php echo $pro_mostrar[2]; ?>
                                </td>
                                <td><?php echo $pro_mostrar[3]; ?>
                                </td>
                                <td><?php echo $pro_mostrar[4]; ?>
                                </td>
                            </tr>

                            <?php
                }
            ?>
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <div class="collapse collapse-horizontal" id="ListarCursos">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <legend><b> Listar Cursos: </b></legend>

                    <?php

                        include_once 'curso.php';
            $e = new Curso();
            $esc_bd=$e->ListarCurso();

            ?>

                    <table class="table table-striped-columns table-hover table-bordered">

                        <thead>
                            <tr>
                                <th class="table-secondary border-0" scope="col">Código do Curso</th>
                                <th class="table-secondary border-0" scope="col">Nome</th>
                                <th class="table-secondary border-0" scope="col">Disciplina 1</th>
                                <th class="table-secondary border-0" scope="col">Disciplina 2</th>
                                <th class="table-secondary border-0" scope="col">Disciplina 3</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                foreach ($esc_bd as $pro_mostrar) {
                    ?>
                            <tr>
                                <td><?php echo $pro_mostrar[0]; ?>
                                </td>
                                <td><?php echo $pro_mostrar[1]; ?>
                                </td>
                                <td><?php echo $pro_mostrar[2]; ?>
                                </td>
                                <td><?php echo $pro_mostrar[3]; ?>
                                </td>
                                <td><?php echo $pro_mostrar[4]; ?>
                                </td>
                            </tr>

                            <?php
                }
            ?>
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <div class="collapse collapse-horizontal" id="ListarDisciplinas">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <legend><b> Listar Disciplinas: </b></legend>

                    <?php

                        include_once 'disciplina.php';
            $e = new Disciplina();
            $esc_bd=$e->ListarDisciplina();

            ?>

                    <table class="table table-striped-columns table-hover table-bordered">

                        <thead>
                            <tr>
                                <th class="table-secondary border-0" scope="col">Código da Disciplina</th>
                                <th class="table-secondary border-0" scope="col">Nome</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                foreach ($esc_bd as $pro_mostrar) {
                    ?>
                            <tr>
                                <td><?php echo $pro_mostrar[0]; ?>
                                </td>
                                <td><?php echo $pro_mostrar[1]; ?>
                                </td>
                            </tr>

                            <?php
                }
            ?>
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <!-- Alterar -->

        <div class="collapse collapse-horizontal" id="AlterarAlunos">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <form name="cliente" method="POST" action="">

                        <legend><b> Alterar Aluno: </b></legend>

                        <div id="a">

                            <legend><b> Informe a Matrícula do Aluno desejado: </b></legend>
                            <label for="exampleInputEmail1" class="form-label"> Matrícula: </label>
                            <input class="form-control" name="txtmat" type="text" size="20" maxlength="5"
                                placeholder="Matrícula do Aluno" onkeypress="return blockletras(window.event.keyCode)">

                        </div>
                        <br>
                        <div id="b">

                            <legend><b> Opções: </b></legend>
                            <br>
                            <button name="btEnviarAltAluno" type="submit" class="btn btn-secondary">Consultar</button>
                            <input name="limpar" type="reset" class="btn btn-dark" value="Limpar">

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultAlterarAluno1">

            <div class="card-body">

                <?php

              if (isset($btEnviarAltAluno)) {
                  $txtmat = $_POST['txtmat'];
                  include_once 'aluno.php';
                  $p = new Aluno();
                  $p->setMatricula($txtmat);
                  $pro_bd = $p->alterar();

                  ?>

                <legend><b> Alterar: </b></legend>

                <form name="cliente2" method="POST" action="">

                    <?php

                  foreach ($pro_bd as $pro_mostrar) {
                      ?>

                    <label for="exampleInputEmail1" class="form-label"> Matrícula: </label>
                    <input class="form-control" name="txtmat" size="5"
                        value='<?php echo $pro_mostrar[0]?>'
                        readonly><br>
                    <label for="exampleInputEmail1" class="form-label"> Nome: </label>
                    <input class="form-control" name="txtnome" size="50"
                        onkeypress="return blocknum(window.event.keyCode)"
                        value='<?php echo $pro_mostrar[1]?>'><br>
                    <label for="exampleInputEmail1" class="form-label"> Endereço: </label>
                    <input class="form-control" name="txtendereco" size="50"
                        value='<?php echo $pro_mostrar[2]?>'><br>
                    <label for="exampleInputEmail1" class="form-label"> Cidade: </label>
                    <input class="form-control" name="txtcidade" size="30"
                        value='<?php echo $pro_mostrar[3]?>'><br>
                    <label for="exampleInputEmail1" class="form-label"> Código do Curso: </label>
                    <input class="form-control" name="txtCodCurso" size="2"
                        onkeypress="return blockletras(window.event.keyCode)"
                        value='<?php echo $pro_mostrar[4]?>'><br>
                    <input type="submit" name="btnAlterarAluno" class="btn btn-secondary" value="Alterar">

                    <?php

                  }
              }

            ?>

                </form>

            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultAlterarAluno2">

            <div class="card-body">

                <?php
            extract($_POST, EXTR_OVERWRITE);
            if (isset($btnAlterarAluno)) {
                include_once 'aluno.php';
                $pro = new Aluno();
                $pro->setMatricula($txtmat);
                $pro->setNome($txtnome);
                $pro->setEndereco($txtendereco);
                $pro->setCidade($txtcidade);
                $pro->setCodCurso($txtCodCurso);
                echo "<br><br><h3>".$pro->alterar2()."</h3>";
            }

            ?>

            </div>

        </div>

        <div class="collapse collapse-horizontal" id="AlterarCursos">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <form name="cliente" method="POST" action="">

                        <legend><b> Alterar Curso: </b></legend>

                        <div id="a">

                            <legend><b> Informe o Código do Curso desejado: </b></legend>
                            <label for="exampleInputEmail1" class="form-label"> Código do Curso: </label>
                            <input class="form-control" name="txtcodcurso" type="text" size="20" maxlength="5"
                                placeholder="Código do Curso" onkeypress="return blockletras(window.event.keyCode)">

                        </div>
                        <br>
                        <div id="b">

                            <legend><b> Opções: </b></legend>
                            <br>
                            <button name="btEnviarAltCurso" type="submit" class="btn btn-secondary">Consultar</button>
                            <input name="limpar" type="reset" class="btn btn-dark" value="Limpar">

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultAlterarCurso1">

            <div class="card-body">

                <?php

              if (isset($btEnviarAltCurso)) {
                  $txtCodCurso = $_POST['txtcodcurso'];
                  include_once 'curso.php';
                  $p = new Curso();
                  $p->setCodCurso($txtCodCurso);
                  $pro_bd=$p->alterar();

                  ?>

                <legend><b> Alterar: </b></legend>

                <form name="cliente2" method="POST" action="">

                    <?php

                  foreach ($pro_bd as $pro_mostrar) {
                      ?>

                    <label for="exampleInputEmail1" class="form-label"> Código do Curso: </label>
                    <input class="form-control" name="txtCodCurso" size="2"
                        value='<?php echo $pro_mostrar[0]?>'
                        readonly><br>
                    <label for="exampleInputEmail1" class="form-label"> Nome: </label>
                    <input class="form-control" name="txtnome" size="50"
                        value='<?php echo $pro_mostrar[1]?>'><br>
                    <label for="exampleInputEmail1" class="form-label"> Disciplina 1: </label>
                    <input class="form-control" name="txtCodDisc1" size="2"
                        onkeypress="return blockletras(window.event.keyCode)"
                        value='<?php echo $pro_mostrar[2]?>'><br>
                    <label for="exampleInputEmail1" class="form-label"> Disciplina 2: </label>
                    <input class="form-control" name="txtCodDisc2" size="2"
                        onkeypress="return blockletras(window.event.keyCode)"
                        value='<?php echo $pro_mostrar[3]?>'><br>
                    <label for="exampleInputEmail1" class="form-label"> Disciplina 3: </label>
                    <input class="form-control" name="txtCodDisc3" size="2"
                        onkeypress="return blockletras(window.event.keyCode)"
                        value='<?php echo $pro_mostrar[4]?>'><br>
                    <input type="submit" name="btnAlterarCurso" class="btn btn-secondary" value="Alterar">

                    <?php

                  }
              }

            ?>

                </form>

            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultAlterarCurso2">

            <div class="card-body">

                <?php
            extract($_POST, EXTR_OVERWRITE);
            if (isset($btnAlterarCurso)) {
                include_once 'curso.php';
                $pro = new Curso();
                $pro->setCodCurso($txtCodCurso);
                $pro->setNome($txtnome);
                $pro->setCodDisc1($txtCodDisc1);
                $pro->setCodDisc2($txtCodDisc2);
                $pro->setCodDisc3($txtCodDisc3);
                echo "<br><br><h3>".$pro->alterar2()."</h3>";
            }

            ?>

            </div>

        </div>

        <div class="collapse collapse-horizontal" id="AlterarDisciplinas">

            <div class="card" style="width: 77rem; left: 300px; top: 20px;">

                <div class="card-body">

                    <form name="cliente" method="POST" action="">

                        <legend><b> Alterar Disciplina: </b></legend>

                        <div id="a">

                            <legend><b> Informe o Código da Disciplina desejada: </b></legend>
                            <label for="exampleInputEmail1" class="form-label"> Código da Disciplina: </label>
                            <input class="form-control" name="txtcoddisc" type="text" size="20" maxlength="5"
                                placeholder="Código da Disciplina"
                                onkeypress="return blockletras(window.event.keyCode)">

                        </div>
                        <br>
                        <div id="b">

                            <legend><b> Opções: </b></legend>
                            <br>
                            <button name="btEnviarAltDisciplina" type="submit"
                                class="btn btn-secondary">Consultar</button>
                            <input name="limpar" type="reset" class="btn btn-dark" value="Limpar">

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultAlterarDisciplina1">

            <div class="card-body">

                <?php

              if (isset($btEnviarAltDisciplina)) {
                  $txtCodDisc = $_POST['txtcoddisc'];
                  include_once 'disciplina.php';
                  $p = new Disciplina();
                  $p->setCodDisc($txtCodDisc);
                  $pro_bd=$p->alterar();

                  ?>

                <legend><b> Alterar: </b></legend>

                <form name="cliente2" method="POST" action="">

                    <?php

                  foreach ($pro_bd as $pro_mostrar) {
                      ?>

                    <label for="exampleInputEmail1" class="form-label"> Código da Disciplina: </label>
                    <input class="form-control" name="txtCodDisc" size="2"
                        value='<?php echo $pro_mostrar[0]?>'
                        readonly><br>
                    <label for="exampleInputEmail1" class="form-label"> Nome: </label>
                    <input class="form-control" name="txtnome" size="50"
                        value='<?php echo $pro_mostrar[1]?>'><br>
                    <input type="submit" name="btnAlterarDisciplina" class="btn btn-secondary" value="Alterar">

                    <?php

                  }
              }

            ?>

                </form>

            </div>

        </div>

        <div class="card border-0" style="width: 77rem; left: 300px; top: 20px;" id="ResultAlterarDisciplina2">

            <div class="card-body">

                <?php
            extract($_POST, EXTR_OVERWRITE);
            if (isset($btnAlterarDisciplina)) {
                include_once 'disciplina.php';
                $pro = new Disciplina();
                $pro->setCodDisc($txtCodDisc);
                $pro->setNome($txtnome);
                echo "<br><br><h3>".$pro->alterar2()."</h3>";
            }

            ?>

            </div>

        </div>

    </body>

</html>