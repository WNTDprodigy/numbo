<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Cadastro | NUMBO</title>
    <style>         
         *{

            margin: 0px;


         }
         body{
            font-family: 'Poppins';
            overflow: auto;
         }
        .box{
            color: white;
            position: absolute;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            top: 90%;
            left: 50%;
            margin-top: 3 id="nav"0px;
        }
      
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nasc{
            border: none;
            padding: 15px;
            border-radius: 10px;
            outline: none;
            font-size: 20px;
        }
        #submit{
            font-family: 'Poppins';
            text-decoration: none;
            font-style: bold;
            color: white;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-right: 30px;
            padding-left: 30px;
            border-radius: 15px;
            border-color: rgb(27, 31, 252);
            background-color: rgba(0, 0, 0, 0.6);
            box-shadow:  100px black;
            font-size: 15px;
            margin-right: 15px;
        }
        #reset{
            font-family: 'Poppins';
            text-decoration: none;
            font-style: bold;
            color: white;
            padding:20px ;
            border-radius: 15px;
            border-color: rgb(27, 31, 252);
            background-color: rgba(0, 0, 0, 0.6);
            box-shadow:  100px black;
            font-size: 15px;
        }
        #reset:hover, #submit:hover{
            background-color: rgb(27, 31, 252);
            border: none;
            letter-spacing: 2px;
        }
        nav {

            width: 100%;

            display: flex;

            position: fixed;

            background-color: #4857BD;

            z-index: 99;

            }

        nav a {

              color: white;

              margin: auto 20px auto 40px;

              text-decoration: none;

              font-weight: bold;

              }

        nav li {

               float: left;

               list-style: none;

               margin-left: 20px;

               }
        h2{
            font-style: normal;
            font-size: 25px;
        }
        h1{
            font-size: 50px;
            font-style: bold;
            margin: 10px;
        }
        #data_nasc, #dataLabel{
            margin-left: 25px;
        }
        #UF{
            font-family: 'Poppins';
            background: none;
            border-radius: 15px;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            height: 30px;
            letter-spacing: 2px;
        }
        #UF:hover{
            color: black;
        }

    </style>
</head>
<body>
<header>
        <div id="title">
            <img src="img/numbo.png" width="200px" height="100px">
        </div>

        <ul>
            <a id="nav" href="index.php"><li>Início</li></a>
            <a id="nav" href=""><li>Serviços</li></a>
            <a id="nav" href=""><li>Sobre</li></a>
            <a id="nav" href=""><li>Contato</li></a>
            <a href="login.html" id="login-btn"><li>Login</li></a>
        </ul>
    </header>
    <div class="titulo">
    
        </div>

    <div class="box">



        <form action="formulario.php" method="POST">
          
                <h1>Cadastro</h1><br><br>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div><br><br>
                <h3>Sexo:</h3>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento" id="dataLabel"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nasc" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                <select id="UF" name="UF">
                    <option value="">Selecione</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <p><center>
                <input type="submit" name="enviar" id="submit">
                <input type="reset"  name="limpar" id="reset">
                </center></p>
        </form>
    </div><br><br><br><br><br><br>
</body>
</html>