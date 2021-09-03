<?php

  function lerArquivo($nomeArquivo){
    //criamos uma variavel que possui a função de pegar 
    //o conteudo do arquivo e nome do arquivo colocado como paremetro
    $arquivo = file_get_contents($nomeArquivo);
    //criamos outra variavel que possui a função de transformar 
    //string em array, sendo colocado como paremetro a variavel que possui o conteudo do arquivo em questão
    $jsonArray = json_decode($arquivo);
    //retornamos a variavel que possui o array
    return $jsonArray;
  }  


//   function buscarFuncionario($listaFuncionario, $nome, $sobrenome, $departamento){

//     $funcionariosPesquisados = [];

//     foreach($listaFuncionario as $funcionario){
//         if($funcionario->first_name == $nome){
//             $funcionariosPesquisados[] = $funcionario;
//             print_r("departamento");
//         }
        
//         else if($funcionario->last_name == $sobrenome){
//             $funcionariosPesquisados[] = $funcionario;
//             print_r("departamento");
//         }
//         else if($funcionario->department == $departamento){
//             $funcionariosPesquisados[] = $funcionario;
//             print_r("departamento");
//         }
//         else{
//             echo "Inexistente no sistema";
//         }
//     }

//   }

function buscarNomeFuncionario($listaFuncionario, $nome){

    $funcionariosPesquisados=[];

    foreach($listaFuncionario as $funcionarios)
    if($funcionarios->first_name == $nome){
        $funcionariosPesquisados[] = $funcionarios;
        print_r("Nome");
    }
}

function buscarSobrenomeFuncionario($listaFuncionario, $sobrenome){

    $funcionariosPesquisados=[];

    foreach($listaFuncionario as $funcionarios)
    if($funcionarios->last_name == $sobrenome){
        $funcionariosPesquisados[] = $funcionarios;
        print_r("Nome");
    }
}

function buscarDepartamentoFuncionario($listaFuncionario, $departamento){

    $funcionariosPesquisados=[];

    foreach($listaFuncionario as $funcionarios)
    if($funcionarios->department == $departamento){
        $funcionariosPesquisados[] = $funcionarios;
        print_r("Nome");
    }
}

?>