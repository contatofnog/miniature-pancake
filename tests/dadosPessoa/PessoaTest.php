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
        $this->assertSame($pNome, $dados->exibirNome());
    }

    public function testVerificarIdade()
    {
        $pIdade = 22;

        $dados = new Pessoa();
        $dados->atribuirIdade($pIdade);
        $this->assertSame($pIdade, $dados->exibirIdade());
    }

    public function testVerificarEmail()
    {
        $pEmail = 'joaosilva@email.com';

        $dados = new Pessoa();
        $dados->atribuirEmail($pEmail);
        $this->assertSame(
            $pEmail, 
            $dados->exibirEmail(),
            filter_var($dados->exibirEmail(), FILTER_VALIDATE_EMAIL)
        );
    }
}
