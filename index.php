<?php
require("funcoes.php");

    $funcionarios = lerArquivo("empresaX.json");

    if(isset($_GET["buscarNomeFuncionario"])){
        $funcionarios = buscarNomeFuncionario($funcionarios, $_GET["buscarNomeFuncionario"]);
    }
    else if(isset($_GET["buscarSobrenomeFuncionario"])){
        $funcionarios = buscarSobrenomeFuncionario($funcionarios, $_GET["buscarSobrenomeFuncionario"]);
    }
    else if(isset($_GET["buscarDepartamentoFuncionario"])){
        $funcionarios = buscarDepartamentoFuncionario($funcionarios, $_GET["buscarDepartamentoFuncionario"]);
    }


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css">

    <title>Atividade Principal</title>
</head>
<body>
    
    <div>
        <input type="text" name="buscarFuncionario" id="buscarFuncionario" placeholder="Digite o nome">
        <button><i class="material-icons">search</i></button>
    </div>
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

   
</body>
</html>