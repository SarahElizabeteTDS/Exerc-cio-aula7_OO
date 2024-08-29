<?php

class Escola
{
    //atributos
    private string $nome;
    private string $endereco;
    private int $qntAlunos;

    public function __construct($n,$e,$a)
    {
        $this->nome = $n;
        $this->endereco = $e;
        $this->qntAlunos = $a;
    }

    //metodos
    public function __toString()
    {
        return "A escola: " . $this->nome . "\nEndereço: " . $this->endereco . "\nPossui " . $this->qntAlunos . " alunos.\n\n";
    }

    //gets and sets
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getQntAlunos(): int
    {
        return $this->qntAlunos;
    }

    public function setQntAlunos(int $qntAlunos): self
    {
        $this->qntAlunos = $qntAlunos;

        return $this;
    }
}
//1.1
for ($i=0; $i < 4; $i++) 
{ 
    $escola[$i] = new Escola(readline("Insira o nome da escola: "), readline("Insira o endereço da escola: "), readline("Insira a quantidade de alunos: "));
}
//1.2
foreach($escola as $es)
{
    print $es;
}
//1.3
$escolasMaisAlunos = $escolas[0];
foreach($escola as $es)
{
    if ($es->getQntAlunos() > $escolasMaisAlunos) 
    {
        $escolasMaisAlunos = $es;
    }
    print "A escola com mais alunos é a escola:\n" . $es;
}
