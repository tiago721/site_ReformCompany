<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Cadastro Fornecedor</title>
    <link rel="stylesheet" type="text/css" href="css/fornecedor.css">

</head>

<body>
    <header id="cab_profile">
        <nav>
            <div class="cabecalho">
                <a href="index.html">
                    <img src="img/image1.png">
                </a>
            </div>
            <div class="topnav">
                <a href="index.html">Home</a>
                <a class="active" href="fornecedor.html">Cadastro Fornecedores</a>
                <a href="consumidor.html">Cadastro Consumidor</a>
                <a href="servicos.php">Serviços</a>
                <a href="contato.html">Contato</a>
                <a href="login.html">Login</a>
            </div>
        </nav>
    </header>


    <section>
        <div id="mainSec">
            <br><br>
            <div class="marginleft" style="margin: auto;">
                <font color="green">
                    <h1>
                        <?php

                        require_once "conexao.php";

                        //entrada de dados do feita no site
                        $nome_for = $_POST['nome_for'];
                        $cpf_for = $_POST['cpf_cnpj'];
                        $email_for = $_POST['email_for'];
                        $descricao_for = $_POST['descricao'];
                        $password1_for = ($_POST['password1_for']);
                        $password2_for = ($_POST['password2_for']);
                        $tel_01_for = $_POST['tel_01_for'];
                        $tel_02_for = $_POST['tel_02_for'];
                        $cep_for = $_POST['cep_for'];
                        $num_for = $_POST['num_for'];
                        $comp_for  = $_POST['comp_for'];
                        $bairro_for = $_POST['bairro_for'];
                        $cidade_for = $_POST['cidade_for'];
                        $estado_for = $_POST['estado_for'];

                        //verificando as checkbox selecionadas pelo usuario
                        if (isset($_POST['checkeletricista'])) {
                            $query = mysqli_query($con, ("INSERT INTO eletricista VALUE
 ('$nome_for' , '$cpf_for' , '$email_for', '$descricao_for','$password1_for' , '$password2_for', '$tel_01_for' ,'$tel_02_for','$cep_for', '$num_for' ,'$comp_for' , '$bairro_for', '$cidade_for' , '$estado_for' )"));
                            echo "Cadastro do eletricista com sucesso<br>";
                            header("refresh:3; url=fornecedor.html");
                        }

                        if (isset($_POST['checkencanador'])) {
                            $query = mysqli_query($con, ("INSERT INTO encanador VALUE
 ('$nome_for' , '$cpf_for' , '$email_for', '$descricao_for','$password1_for' , '$password2_for', '$tel_01_for' ,'$tel_02_for','$cep_for', '$num_for' ,'$comp_for' , '$bairro_for', '$cidade_for' , '$estado_for' )"));
                            echo "Cadastro do encanador com sucesso<br>";
                            header("refresh:3; url=fornecedor.html");
                        }

                        if (isset($_POST['checkjardineiro'])) {
                            $query = mysqli_query($con, ("INSERT INTO jardineiro VALUE
 ('$nome_for' , '$cpf_for' , '$email_for', '$descricao_for','$password1_for' , '$password2_for', '$tel_01_for' ,'$tel_02_for','$cep_for', '$num_for' ,'$comp_for' , '$bairro_for', '$cidade_for' , '$estado_for' )"));
                            echo "Cadastro do jardineiro com sucesso<br>";
                            header("refresh:3; url=fornecedor.html");
                        }

                        if (isset($_POST['checklimpeza'])) {
                            $query = mysqli_query($con, ("INSERT INTO limpeza VALUE
 ('$nome_for' , '$cpf_for' , '$email_for', '$descricao_for','$password1_for' , '$password2_for', '$tel_01_for' ,'$tel_02_for','$cep_for', '$num_for' ,'$comp_for' , '$bairro_for', '$cidade_for' , '$estado_for' )"));
                            echo "Cadastro da limpeza com sucesso<br>";
                            header("refresh:3; url=fornecedor.html");
                        }

                        if (isset($_POST['checkpedreiro'])) {
                            $query = mysqli_query($con, ("INSERT INTO pedreiro VALUE
 ('$nome_for' , '$cpf_for' , '$email_for', '$descricao_for','$password1_for' , '$password2_for', '$tel_01_for' ,'$tel_02_for','$cep_for', '$num_for' ,'$comp_for' , '$bairro_for', '$cidade_for' , '$estado_for' )"));
                            echo "Cadastro do pedreiro com sucesso<br>";
                            header("refresh:3; url=fornecedor.html");
                        }

                        if (isset($_POST['checkpintor'])) {
                            $query = mysqli_query($con, ("INSERT INTO pintor VALUE
 ('$nome_for' , '$cpf_for' , '$email_for', '$descricao_for','$password1_for' , '$password2_for', '$tel_01_for' ,'$tel_02_for','$cep_for', '$num_for' ,'$comp_for' , '$bairro_for', '$cidade_for' , '$estado_for' )"));
                            echo "Cadastro do pintor com sucesso<br>";
                            header("refresh:3; url=fornecedor.html");
                        }

                        ?></h1>
                </font>
                <div class="info">
                    <div class="formulario_fornecedor">
                        <fieldset style="border-radius: 10px;">
                            <div id="title_form">
                                <h1>Cadastro de Fornecedor</h1>
                            </div>
                            <form id="form_cad" action="cadastro_fornecedor.php" method="post">
                                <div id="f_div_1">
                                    <label for="nome">Nome/Razão Social</label><br>
                                    <input class="box_form" style="width: 280px;" type="text" name="nome_for" required><br>

                                    <label for="cpf_cnpj">CPF/CNPJ</label><br>
                                    <input class="box_form2" type="text" name="cpf_cnpj" id="cpf_cnpj" required><br>

                                    <label for="especialidade">Especialidade</label><br>
                                    <div style="float: left;">
                                        <div>
                                            <input class="form-check-input" type="checkbox" name="checkeletricista" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Eletricista</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" name="checkencanador" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Encanador</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" name="checkjardineiro" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Jardineiro</label>
                                        </div>
                                    </div>
                                    <div style="float: right;">
                                        <div>
                                            <input class="form-check-input" type="checkbox" name="checklimpeza" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Limpeza Geral</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" name="checkpedreiro" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Pedreiro</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" name="checkpintor" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Pintor</label>
                                        </div>
                                    </div><br><br><br><br><br><br><br>

                                    <label for="descricao">Descrição</label><br>
                                    <input class="box_form" style="height: 70px; width: 700px;" type="text" name="descricao" id="descricao" required><br>
                                </div>

                                <div id="f_div_2">
                                    <label for="tel_1">Telefone 01</label><br>
                                    <input class="box_form2" type="text" name="tel_01_for" id="tel_01_for" required><br>

                                    <label for="tel_02">Telefone 02</label><br>
                                    <input class="box_form2" type="text" name="tel_02_for" id="tel_02_for"><br>

                                    <label for="email">Email</label><br>
                                    <input class="box_form2" style="width: 280px;" type="text" name="email_for" id="email_for" required><br>

                                    <label for="password1">Senha</label><br>
                                    <input class="box_form2" style="width: 280px;" type="password" name="password1_for" id="password1_for" required><br>

                                    <label for="password2">Repita sua Senha</label><br>
                                    <input class="box_form2" style="width: 280px;" type="password" name="password2_for" id="password2_for" required><br>
                                </div>
                                <div id="f_div_3">
                                    <label for="cep">CEP</label><br>
                                    <input class="box_form2" type="text" name="cep_for" id="cep_for" required><br>

                                    <label for="num">Número</label><br>
                                    <input class="box_form2" type="text" name="num_for" id="num_for" required><br>

                                    <label for="comp">Complemento</label><br>
                                    <input class="box_form2" type="text" name="comp_for" id="comp_for"><br>

                                    <label for="foto">Carregar uma foto:</label>
                                    <input type="file" id="foto" name="foto" accept="image/png, image/jpeg">
                                </div>

                                <div id="f_div_4">
                                    <label for="bairro">Bairro</label><br>
                                    <input class="box_form2" style="width: 280px;" type="text" name="bairro_for" id="bairro_for"><br>

                                    <label for="cidade">Cidade</label><br>
                                    <input class="box_form2" style="width: 280px;" type="text" name="cidade_for" id="cidade_for"><br>

                                    <label for="estado">Estado</label><br>
                                    <input class="box_form2" type="text" name="estado_for" id="estado_for">
                                </div>
                                <div id="f_div_5">

                                    <button style="height: 50px; width: 100px; border: solid 1px #b8b6b6;" type="submit">
                                        <span>ENVIAR</span>
                                    </button>

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