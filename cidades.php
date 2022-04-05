<?php

class Cidades {
    
    private $nome;
    private $uf;




    public function getNome() {
        return $this->nome;
    }

    public function getUF() {
        return $this->uf;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setUF($uf) {
        $this->uf = $uf;
    }
    
    public function update($id) {
        include_once('./conexao.php');
        $sql = "UPDATE Cidades SET  nome =:nome , uf =:uf  where id = $id";
        $query = $conexao->prepare($sql);
    
        $dados = array('nome'=>$this->nome, 'uf'=>$this->uf); 
        $resultado = $query->execute($dados);
        
        echo $resultado;

        // Atualiza a tabela cidades onde o nome da coluna = var nome, nome da coluna uf = var uf, where(onde)
        // o id da tabela for igual ao id da função.
    }

    public function setData() {
        include_once('./conexao.php');

    $sql = "INSERT INTO cidades(nome, uf) VALUES(:nome, :uf)";

    }


}

$cidade1 = new Cidades();

$cidade1->setNome('Carazinho');
$cidade1->setUF('RS');
$cidade1->update(2);

echo $cidade1->setData();





?>