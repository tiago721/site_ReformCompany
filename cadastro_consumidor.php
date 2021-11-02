<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Cadastro Consumidor</title>
    <link rel="stylesheet" type="text/css" href="css/consumidor.css">

</head>

<body>
    <header id="cab_profile">
        <nav>
            <div class="cabecalho">
                <a href="Paginainicial.html">
                    <img src="img/image1.png">
                </a>
            </div>
            <div class="topnav">
                <a href="Paginainicial.html">Home</a>
                <a href="fornecedor.html">Cadastro Fornecedores</a>
                <a class="active" href="consumidor.html">Cadastro Consumidor</a>
                <a href="servicos.php">Serviços</a>
                <a href="contato.html">Contato</a>
                <a href="login.html">Login</a>
            </div>
        </nav>
    </header>



    <section style="width: 100%; height: 100%; background-color: #f5f5f5; border-top: solid 2px #9397b3;">
        <div id="secDiv" style="width: 715px; height: 100%; border-radius: 10px; margin: auto;">
            <br><br>
<font color="green"><h1>
<?php

                require_once "conexao.php";

                $nome = $_POST['nome'];
                $cpf = $_POST['cpf'];
                $email = $_POST['email'];
                $password1 = ($_POST['password1']);
                $password2 = ($_POST['password2']);
                $tel_01 = $_POST['tel_01'];
                $tel_02 = $_POST['tel_02'];
                $cep = $_POST['cep'];
                $num = $_POST['num'];
                $comp  = $_POST['comp'];
                $bairro = $_POST['bairro'];
                $cidade = $_POST['cidade'];
                $estado = $_POST['estado'];


                $query = mysqli_query($con, ("INSERT INTO consumidores VALUE
 ('$nome' , '$cpf' , '$email', '$password1' , '$password2', '$tel_01' ,'$tel_02','$cep', '$num' ,'$comp' , '$bairro', '$cidade' , '$estado' )"));
                echo "cadastro com sucesso";
                header("refresh:1; url=consumidor.html");


?>
</font></h1>
            <div>
                <div class="info">
                    <div class="formulario_fornecedor">
                        <fieldset style="border-radius: 10px;">
                            <div id="title_form">
                                <h1>Cadastro de Consumidor</h1>
                            </div>
                            <form id="form_cad" action="conexao_consumidor.php" method="post">
                                <div id="c_div_1">
                                    <label for="nome">Nome Completo</label><br>
                                    <input class="box_form" style="width: 280px;" type="text" name="nome" id="nome" required><br>

                                    <label for="cpf">CPF</label><br>
                                    <input class="box_form2" type="text" name="cpf" id="cpf" required><br><br><br>

                                    <label for="email">Email</label><br>
                                    <input class="box_form2" style="width: 280px;" type="text" name="email" id="email" required><br>

                                    <label for="password1">Senha</label><br>
                                    <input class="box_form2" style="width: 280px;" type="password" name="password1" id="password1" required><br>

                                    <label for="password2">Repita sua Senha</label><br>
                                    <input class="box_form2" style="width: 280px;" type="password" name="password2" id="password2" required><br>
                                </div>

                                <div id="c_div_2">
                                    <label for="tel_1">Telefone 01</label><br>
                                    <input class="box_form2" type="text" name="tel_01" id="tel_01" required><br>

                                    <label for="tel_02">Telefone 02</label><br>
                                    <input class="box_form2" type="text" name="tel_02" id="tel_02"><br>

                                </div>
                                <div id="c_div_3">
                                    <label for="cep">CEP</label><br>
                                    <input class="box_form2" type="text" name="cep" id="cep" required><br>

                                    <label for="num">Número</label><br>
                                    <input class="box_form2" type="text" name="num" id="num" required><br>

                                    <label for="comp">Complemento</label><br>
                                    <input class="box_form2" type="text" name="comp" id="comp" required><br><br>

                                    <label for="foto">Carregar uma foto:</label>
                                    <input type="file" id="foto" name="foto" accept="image/png, image/jpeg">
                                </div>

                                <div id="c_div_4">
                                    <label for="bairro">Bairro</label><br>
                                    <input class="box_form2" style="width: 280px;" type="text" name="bairro" id="bairro" required><br>

                                    <label for="cidade">Cidade</label><br>
                                    <input class="box_form2" style="width: 280px;" type="text" name="cidade" id="cidade" required><br>

                                    <label for="estado">Estado</label><br>
                                    <input class="box_form2" type="text" name="estado" id="estado" required>
                                </div>
                                <form id="conexao" action="conexao_consumidor.php" method="post">
                                    <div id="c_div_5">
                                        <button style="height: 50px; width: 100px; border: solid 1px #b8b6b6;" type="submit">
                                            <span>ENVIAR</span>
                                        </button>
                                </form>
                    </div>
                    </form>
                    <div id="box_check">
                        <br><br><br>
                        <img src="img/form_check.png" alt="" srcset="">
                    </div>




                    </fieldset>
                </div>
            </div>
        </div>
        <br><br><br><br>
        </div>
    </section>
</body>

<html>