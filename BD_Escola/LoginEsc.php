<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>

        <script language="javascript">
            function blockletras(keypress) {

                if (keypress >= 48 && keypress <= 57) {

                    return true;

                } else {

                    return false;

                }

            }
        </script>

    </head>

    <body>



        <div class="card" style="margin: auto; width: 25%; text-align: center;">

            <div class="card-body position-relative">

                <form class="" name="login" method="POST">

                    <legend><b> Login: </b></legend>
                    <br><br>

                    <div class="row justify-content-md-center">

                        <div class="col col-lg-auto">
                            <ion-icon name="person-outline"></ion-icon>
                        </div>
                        <div class="col col-lg-auto">
                            <input class="form-control" name="txtusu" type="text" size="10" maxlength="5"
                                placeholder="Usuário" required>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-md-center">
                        <div class="col col-lg-auto">
                            <ion-icon name="key-outline"></ion-icon>
                        </div>
                        <div class="col col-lg-auto">
                            <input class="form-control" name="txtsenha" type="password" size="10" maxlength="3"
                                placeholder="Senha" required onkeypress="return blockletras(window.event.keyCode)">
                        </div>
                    </div>

                    <br><br>

                    <div class="mb-3">

                        <legend><b> Opções: </b></legend>
                        <br><br>
                        <button name="btlogar" type="submit" class="btn btn-secondary">Login</button>
                        <button type="reset" class="btn btn-dark">Limpar</button>

                    </div>

                </form>

                <?php

            extract($_POST, EXTR_OVERWRITE);
                if (isset($btlogar)) {
                    include_once 'models\usuario.php';
                    $u = new Usuario();
                    $u->setLogin($txtusu);
                    $u->setSenha($txtsenha);
                    $pro_bd=$u->Logar();

                    $existe = false;
                    foreach ($pro_bd as $pro_mostrar) {
                        $existe = true;
                        ?>
                <br><b>
                    <?php echo "Bem vindo(a)! Usuário: " . $pro_mostrar[0]; ?>
                </b> <br><br>

                <center>
                    <a href="menuEsc.php"><button name="btEntrar" class="btn btn-dark">Entrar</button></a>
                </center>
                <?php
                    }
                    if ($existe==false) {
                        echo "Acesso negado! Usuário ou senha incorretos ou inexistentes.";
                    }
                }

                ?>

            </div>

        </div>





    </body>

</html>