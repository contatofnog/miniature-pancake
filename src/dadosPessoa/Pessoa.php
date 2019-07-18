<?php

namespace MiniaturePancake\dadosPessoa;

class Pessoa
{
    private $nome;
    private $idade;
    private $email;

    public function atribuirNome($nome)
    {
      $this->nome = $nome;
    }

    public function atribuirIdade($idade)
    {
      $this->idade = $idade;
    }

    public function atribuirEmail($email)
    {
      return $this->email = $email;
    }

    public function exibirNome()
    {
      return $this->nome;
    }

    public function exibirIdade()
    {
      return $this->idade;
    }

    public function exibirEmail()
    {
      return $this->email;
    }
}
