<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Serviços</title>
    <link rel="stylesheet" type="text/css" href="css/servicos.css">

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
                <a href="fornecedor.html">Cadastro Fornecedores</a>
                <a href="consumidor.html">Cadastro Consumidor</a>
                <a class="active" href="servicos.html">Serviços</a>
                <a href="contato.html">Contato</a>
                <a href="login.html">Login</a>
            </div>
        </nav>
    </header>

    <section>
        <div id="servicos">

            <div class="f1">
                <fieldset style="width: 225px; height: 260px; background-color: white; border-radius: 10px;">
                    <img class="pedreiro" src="img/pedreiro.png" width=200px height=150px title="pedreiro" />
                    <div id="caixaTexto">
                        <p>
                            O pedreiro que cumpre o prazo
                        </p>
                    </div>

                    <a href="#openPedreiro" ; style="text-decoration:none">
                        <center><button>Pedreiro</button></center>

                </fieldset>
                <div id="openPedreiro" class="modalDialog" style="overflow: auto;">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Lista de Pedreiros</h2>

                        <table style="overflow: auto;">

                            <?php
                            require_once "conexao.php";
                            include "conexao.php";

                            $consulta = "SELECT * FROM pedreiro";

                            //$con = $mysqli->query($consulta) or die($mysqli->error);
                            $resultado = mysqli_query($con, $consulta) or die("Erro ao retornar dados");

                            echo "<table width=1000 border=1 align=center";
                            echo "<tr>";
                            echo "<td>Nome</td>";                            
                            echo "<td>Email</td>";                                                    
                            echo "<td>Tel_01</td>";                            
                            echo "<td>Cep</td>";
                            echo "<td>Num</td>";                          
                            echo "<td>Bairro</td>";
                            echo "<td>Cidade</td>";
                            echo "<td>Estado</td>";

                            echo "</tr>";

                            while ($registro = mysqli_fetch_array($resultado)) {
                                echo "<tr>";
                                echo "<td>" . $registro["nome_for"] . "</td>";                            
                                echo "<td>" . $registro["email_for"] . "</td>";                               
                                echo "<td>" . $registro["tel_01_for"] . "</td>";
                                echo "<td>" . $registro["cep_for"] . "</td>";
                                echo "<td>" . $registro["num_for"] . "</td>";                              
                                echo "<td>" . $registro["bairro_for"] . "</td>";
                                echo "<td>" . $registro["cidade_for"] . "</td>";
                                echo "<td>" . $registro["estado_for"] . "</td>";

                                echo "</tr>";                            }


                            echo "</table>";

                            mysqli_close($con);

                            ?>


                        </table>
                    </div>
                </div>
            </div>

            <div class="f2">
                <fieldset style="width: 225px; height: 260px; background-color: white; border-radius: 10px;">
                    <img class="encanador" src="img/encanador.png" width=200px height=150px title="encanador" />
                    <div id="caixaTexto">
                        <p>
                            O melhor encanador da regiao.
                        </p>
                    </div>
                    <a href="#openEncanador">
                        <center><button>Encanador</button></center>
                    </a>
                </fieldset>
                <div id="openEncanador" class="modalDialog" style="overflow: auto;">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Lista de Encanadores</h2>
                        <table>

                            <?php
                            require_once "conexao.php";
                            include "conexao.php";

                            $consulta = "SELECT * FROM encanador";

                            //$con = $mysqli->query($consulta) or die($mysqli->error);
                            $resultado = mysqli_query($con, $consulta) or die("Erro ao retornar dados");

                            echo "<table width=1000 border=1 align=center";
                            echo "<tr>";
                            echo "<td>Nome</td>";                            
                            echo "<td>Email</td>";                                                    
                            echo "<td>Tel_01</td>";                            
                            echo "<td>Cep</td>";
                            echo "<td>Num</td>";                          
                            echo "<td>Bairro</td>";
                            echo "<td>Cidade</td>";
                            echo "<td>Estado</td>";

                            echo "</tr>";

                            while ($registro = mysqli_fetch_array($resultado)) {
                                echo "<tr>";
                                echo "<td>" . $registro["nome_for"] . "</td>";                            
                                echo "<td>" . $registro["email_for"] . "</td>";                               
                                echo "<td>" . $registro["tel_01_for"] . "</td>";
                                echo "<td>" . $registro["cep_for"] . "</td>";
                                echo "<td>" . $registro["num_for"] . "</td>";                              
                                echo "<td>" . $registro["bairro_for"] . "</td>";
                                echo "<td>" . $registro["cidade_for"] . "</td>";
                                echo "<td>" . $registro["estado_for"] . "</td>";

                                echo "</tr>";         
                               }

                            echo "</table>";

                            mysqli_close($con);
                            ?>

                        </table>
                    </div>
                </div>
            </div>


            <div class="f3">
                <fieldset style="width: 225px; height: 260px; background-color: white; border-radius: 10px;">
                    <img class="eletricista" src="img/eletricista.png" width=200px height=150px title="eletricista" />
                    <div id="caixaTexto">
                        <p>
                            O eletricista que vai resolver seus problemas.
                        </p>
                    </div>
                    <a href="#openEletricista">
                        <center><button>Eletricista</button></center>
                    </a>
                </fieldset>
                <div id="openEletricista" class="modalDialog" style="overflow: auto;">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Lista de Eletricistas</h2>
                        <table>

                            <?php
                            require_once "conexao.php";
                            include "conexao.php";

                            $consulta = "SELECT * FROM eletricista";

                            //$con = $mysqli->query($consulta) or die($mysqli->error);
                            $resultado = mysqli_query($con, $consulta) or die("Erro ao retornar dados");

                            echo "<table width=1000 border=1 align=center";
                            echo "<tr>";
                            echo "<td>Nome</td>";                            
                            echo "<td>Email</td>";                                                    
                            echo "<td>Tel_01</td>";                            
                            echo "<td>Cep</td>";
                            echo "<td>Num</td>";                          
                            echo "<td>Bairro</td>";
                            echo "<td>Cidade</td>";
                            echo "<td>Estado</td>";

                            echo "</tr>";

                            while ($registro = mysqli_fetch_array($resultado)) {
                                echo "<tr>";
                                echo "<td>" . $registro["nome_for"] . "</td>";                            
                                echo "<td>" . $registro["email_for"] . "</td>";                               
                                echo "<td>" . $registro["tel_01_for"] . "</td>";
                                echo "<td>" . $registro["cep_for"] . "</td>";
                                echo "<td>" . $registro["num_for"] . "</td>";                              
                                echo "<td>" . $registro["bairro_for"] . "</td>";
                                echo "<td>" . $registro["cidade_for"] . "</td>";
                                echo "<td>" . $registro["estado_for"] . "</td>";

                                echo "</tr>";                            }


                            echo "</table>";

                            mysqli_close($con);

                            ?>


                        </table>
                    </div>
                </div>
            </div>

            <div class="f4">
                <fieldset style="width: 225px; height: 260px; background-color: white; border-radius: 10px;">
                    <img class="diarista" src="img/diarista.png" width=200px height=150px title="diarista" />
                    <div id="caixaTexto">
                        <p>
                            A sua diarista de confiança.
                        </p>
                    </div>
                    <a href="#openLimpeza">
                        <center><button>Limpeza Geral</button></center>
                    </a>
                </fieldset>
                <div id="openLimpeza" class="modalDialog" style="overflow: auto;">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Lista Limpeza Geral</h2>
                        <table>

                            <?php
                            require_once "conexao.php";
                            include "conexao.php";

                            $consulta = "SELECT * FROM limpeza";

                            //$con = $mysqli->query($consulta) or die($mysqli->error);
                            $resultado = mysqli_query($con, $consulta) or die("Erro ao retornar dados");

                            echo "<table width=1000 border=1 align=center";
                            echo "<tr>";
                            echo "<td>Nome</td>";                            
                            echo "<td>Email</td>";                                                    
                            echo "<td>Tel_01</td>";                            
                            echo "<td>Cep</td>";
                            echo "<td>Num</td>";                          
                            echo "<td>Bairro</td>";
                            echo "<td>Cidade</td>";
                            echo "<td>Estado</td>";

                            echo "</tr>";

                            while ($registro = mysqli_fetch_array($resultado)) {
                                echo "<tr>";
                                echo "<td>" . $registro["nome_for"] . "</td>";                            
                                echo "<td>" . $registro["email_for"] . "</td>";                               
                                echo "<td>" . $registro["tel_01_for"] . "</td>";
                                echo "<td>" . $registro["cep_for"] . "</td>";
                                echo "<td>" . $registro["num_for"] . "</td>";                              
                                echo "<td>" . $registro["bairro_for"] . "</td>";
                                echo "<td>" . $registro["cidade_for"] . "</td>";
                                echo "<td>" . $registro["estado_for"] . "</td>";

                                echo "</tr>";                            }


                            echo "</table>";

                            mysqli_close($con);

                            ?>


                        </table>
                    </div>
                </div>
            </div>

            <div class="f5">
                <fieldset style="width: 225px; height: 260px; background-color: white; border-radius: 10px;">
                    <img class="motorista" src="img/jardineiro.png" width=200px height=150px title="motorista" />
                    <div id="caixaTexto">
                        <p>
                            O melhor motorista para te deslocar durante o seu dia.
                        </p>
                    </div>
                    <a href="#openJardineiro">
                        <center><button>Jardineiro</button></center>
                    </a>
                </fieldset>
                <div id="openJardineiro" class="modalDialog" style="overflow: auto;">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Lista de Jardineiros</h2>
                        <table>

                            <?php
                            require_once "conexao.php";
                            include "conexao.php";

                            $consulta = "SELECT * FROM jardineiro";

                            //$con = $mysqli->query($consulta) or die($mysqli->error);
                            $resultado = mysqli_query($con, $consulta) or die("Erro ao retornar dados");

                            echo "<table width=1000 border=1 align=center";
                            echo "<tr>";
                            echo "<td>Nome</td>";                            
                            echo "<td>Email</td>";                                                    
                            echo "<td>Tel_01</td>";                            
                            echo "<td>Cep</td>";
                            echo "<td>Num</td>";                          
                            echo "<td>Bairro</td>";
                            echo "<td>Cidade</td>";
                            echo "<td>Estado</td>";

                            echo "</tr>";

                            while ($registro = mysqli_fetch_array($resultado)) {
                                echo "<tr>";
                                echo "<td>" . $registro["nome_for"] . "</td>";                            
                                echo "<td>" . $registro["email_for"] . "</td>";                               
                                echo "<td>" . $registro["tel_01_for"] . "</td>";
                                echo "<td>" . $registro["cep_for"] . "</td>";
                                echo "<td>" . $registro["num_for"] . "</td>";                              
                                echo "<td>" . $registro["bairro_for"] . "</td>";
                                echo "<td>" . $registro["cidade_for"] . "</td>";
                                echo "<td>" . $registro["estado_for"] . "</td>";

                                echo "</tr>";                            }


                            echo "</table>";

                            mysqli_close($con);

                            ?>


                        </table>
                    </div>
                </div>
            </div>

            <div class="f6">
                <fieldset style="width: 225px; height: 260px; background-color: white; border-radius: 10px;">
                    <img class="pintor" src="img/pintor.png" width=200px height=150px title="pintor" />
                    <div id="caixaTexto">
                        <p>
                            O pintor mais caprichoso que você vai conhecer.
                        </p>
                    </div>
                    <a href="#openPintor">
                        <center><button>Pintor</button></center>
                    </a>
                </fieldset>
                <div id="openPintor" class="modalDialog" style="overflow: auto;">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Lista de Pintores</h2>
                        <table>

                            <?php
                            require_once "conexao.php";
                            include "conexao.php";

                            $consulta = "SELECT * FROM pintor";

                            //$con = $mysqli->query($consulta) or die($mysqli->error);
                            $resultado = mysqli_query($con, $consulta) or die("Erro ao retornar dados");

                            echo "<table width=1000 border=1 align=center";
                            echo "<tr>";
                            echo "<td>Nome</td>";                            
                            echo "<td>Email</td>";                                                    
                            echo "<td>Tel_01</td>";                            
                            echo "<td>Cep</td>";
                            echo "<td>Num</td>";                          
                            echo "<td>Bairro</td>";
                            echo "<td>Cidade</td>";
                            echo "<td>Estado</td>";

                            echo "</tr>";

                            while ($registro = mysqli_fetch_array($resultado)) {
                                echo "<tr>";
                                echo "<td>" . $registro["nome_for"] . "</td>";                            
                                echo "<td>" . $registro["email_for"] . "</td>";                               
                                echo "<td>" . $registro["tel_01_for"] . "</td>";
                                echo "<td>" . $registro["cep_for"] . "</td>";
                                echo "<td>" . $registro["num_for"] . "</td>";                              
                                echo "<td>" . $registro["bairro_for"] . "</td>";
                                echo "<td>" . $registro["cidade_for"] . "</td>";
                                echo "<td>" . $registro["estado_for"] . "</td>";

                                echo "</tr>";                            }


                            echo "</table>";

                            mysqli_close($con);

                            ?>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<html>