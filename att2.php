<?php

class Pessoas
{
    //atriutos
    private string $nome;
    private string $sobrenome;
    private int $idade;

    //construct
    public function __construct($n,$s,$i)
    {
        $this->nome = $n;
        $this->sobrenome = $s;
        $this->idade= $i;
    }
    //metodos
    public function __toString()
    {
        return $this->nome . " " . $this->sobrenome . ", ". $this->idade . " anos.";
    }

    //gets e sets

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

$escolha = 0;
$pessoas = array();
do 
{
    print "\n-----------MENU-----------\n";
    print "1- Cadastrar\n";
    print "2- Listar\n";
    print "0- SAIR\n";
    $escolha = readline("Escolha a opção: ");
    switch($escolha) 
    {
    case 0:
        print "\nPrograma encerrado!\n";
    break;

    case 1:
        $pessoa = new Pessoas(readline("Insira o nome: "), readline("Insira o sobrenome: "), readline("Insira a idade: "));
        array_push($pessoas, $pessoa);
    break;

    case 2:
        if (count($pessoas) > 0) 
        {
            print "\nPessoas cadastradas:\n";
            foreach ($pessoas as $pessoa) 
            {
                print $pessoa . "\n";
            }
        }
        else
        {
            print "Não há pessoas cadastradas";
        }
       
    break;

    default:
        print "Opção inválida\n";
    }
}while($escolha != 0);

