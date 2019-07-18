<?php

namespace MiniaturePancake\dadosPessoa;
use PHPUnit\Framework\TestCase;

class PessoaTest extends TestCase
{
    public function testVerificarNome()
    {
        $pNome = 'João';

        $dados = new Pessoa();
        $dados->atribuirNome($pNome);
        $this->assertEquals($pNome, $dados->exibirNome());
        $this->assertTrue(is_string($dados->exibirNome()));
    }

    public function testVerificarIdade()
    {
        $pIdade = 22;

        $dados = new Pessoa();
        $dados->atribuirIdade($pIdade);
        $this->assertEquals($pIdade, $dados->exibirIdade());
        $this->assertTrue(is_integer($dados->exibirIdade()));
    }

    public function testVerificarEmail()
    {
        $pEmail = 'example@example.com';

        $dados = new Pessoa();
        $dados->atribuirEmail($pEmail);
        $this->assertEquals($pEmail, $dados->exibirEmail());
        $this->assertEquals($pEmail, $dados->exibirEmail());
        $this->assertEquals(
            $pEmail, filter_var($dados->exibirEmail(), FILTER_VALIDATE_EMAIL) 
        );
    }
}
