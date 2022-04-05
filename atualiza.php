<?php

    require_once "./cidades.php";

    $sql = "UPDATE cidades SET nome=:nome, uf=:uf WHERE id=:id";
    $query = $conexao->prepare($sql);

    $dados = array('nome'=>$this->nome, 'uf'=>$this->uf, 'id'=>$this->id);

    $resultado = $query->execute($dados);
    
    if($resultado===true){
        header('Location: ./lista_aluno.php');
    }else{
        echo "Erro ao tentar atualizar os dados";
    }


    $atualiza1->getNome()


?>