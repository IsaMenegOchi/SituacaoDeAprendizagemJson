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


  function buscarFuncionario($listaFuncionario, $caracteristicaFuncionario){

    $funcionariosPesquisados = [];

    foreach($listaFuncionario as $funcionario){
      if($funcionario->first_name == $caracteristicaFuncionario){
          $funcionariosPesquisados[] = $funcionario;
      }
      else if($funcionario->last_name == $caracteristicaFuncionario){
          $funcionariosPesquisados[] = $funcionario;
      }
      else if($funcionario->department == $caracteristicaFuncionario){
        $funcionariosPesquisados[] = $funcionario;
      }
    }
    return $funcionariosPesquisados;
  }

?>