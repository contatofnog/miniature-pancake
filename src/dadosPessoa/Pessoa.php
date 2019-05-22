<?php

namespace MiniaturePancake\dadosPessoa;

class Pessoa
{
    private $nome;

    public function atribuirNome($nome)
    {
      $this->nome = $nome;
    }

    public function exibirNome()
    {
      return $this->nome;
    }
}
