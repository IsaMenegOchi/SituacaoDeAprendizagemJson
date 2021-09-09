<?php

require("funcoes.php");

    $funcionarios = lerArquivo("empresaX.json");


    if(isset($_GET["buscarFuncionario"])){
        $funcionarios = buscarFuncionario($funcionarios, $_GET["buscarFuncionario"]);
    }

    // else if(isset($_POST["cadastrarFuncionario"]) && isset($_POST["idFuncionario"]) && isset($_POST["nomeFuncionario"]) 
    // && isset($_POST["sobrenomeFuncionario"]) && isset($_POST["emailFuncionario"]) && isset($_POST["generoFuncionario"])
    // && isset($_POST["enderecoIpFuncionario"]) && isset($_POST["paisFuncionario"]) && isset($_POST["departamentoFuncionario"]))
    
    else if(isset($_POST["departamentoFuncionario"]))
    {
        $listaFunc = cadastrarFuncionario(
            $funcionarios,
            $id = $_POST["idFuncionario"],
            $first_name = $_POST["nomeFuncionario"],
            $last_name = $_POST["sobrenomeFuncionario"],
            $email = $_POST["emailFuncionario"],
            $gender = $_POST["generoFuncionario"],
            $ip_address = $_POST["enderecoIpFuncionario"],
            $country= $_POST["paisFuncionario"],
            $department= $_POST["departamentoFuncionario"]
        );

      escrevendoJson("empresaX.json", $listaFunc);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
    <script src="script.js" defer></script>
    <title>Atividade Principal</title>
</head>
<body>
    <section>
        <h1>EmpresaX</h1>
        <form>
                <input type="text" value="<?=isset($_GET["buscarFuncionario"])? $_GET["buscarFuncionario"] : ""?>" name="buscarFuncionario" id="buscarFuncionario" placeholder="Digite o nome">
                <button><i class="material-icons">search</i></button>
        </form>
            <button onclick="showCadastro()" class="cadastrar">Cadastrar</button>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Sexo</th>
                <th>Endereço IP</th>
                <th>País</th>
                <th>Departamento</th>
            </tr>
            <?php
                foreach($funcionarios as $funcionario):
            ?>
                <tr>
                    <td><?= $funcionario->id?></td>
                    <td><?= $funcionario->first_name?></td>
                    <td><?= $funcionario->last_name?></td>
                    <td><?= $funcionario->email?></td>
                    <td><?= $funcionario->gender?></td>
                    <td><?= $funcionario->ip_address?></td>
                    <td><?= $funcionario->country?></td>
                    <td><?= $funcionario->department?></td>
                </tr>
            <?php
            endforeach;
            ?>
        </table>
    </section>
    <div class="container-form-cadastro">
        <form method="POST">
            <input type="number" name="idFuncionario"  id="idFuncionario" placeholder="digite o id">
            <input type="text" name="nomeFuncionario" id="nomeFuncionario" placeholder="digite o nome">
            <input type="text" name="sobrenomeFuncionario" id="sobrenomeFuncionario" placeholder="digite o sobrenome">
            <input type="text" name="emailFuncionario"  id="emailFuncionario" placeholder="digite e-mail">
            <input type="text" name="generoFuncionario" id="generoFuncionario" placeholder="digite o genero">
            <input type="text" name="enderecoIpFuncionario"  id="enderecoIpFuncionario" placeholder="digite o endereço IP">
            <input type="text" name="paisFuncionario" id="paisFuncionario" placeholder="digite o país">
            <input type="text" name="departamentoFuncionario" id="departamentoFuncionario" placeholder="digite o departamento">

            <!-- <input type="hidden" id="nomeAluno" name="nomeAluno"> -->
            <button>Cadastrar</button>
        </form>
    </div>
</body>
</html>