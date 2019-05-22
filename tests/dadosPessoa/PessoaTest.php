<?php

namespace MiniaturePancake\dadosPessoa;
use PHPUnit\Framework\TestCase;

class PessoaTest extends TestCase
{
    public function testVerificarNome()
    {
        $dados = new Pessoa();
        $dados->atribuirNome('João');
        $this->assertEquals('João', $dados->exibirNome());
    }
}