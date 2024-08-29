<?php

class Robo{
    private string $nome;
    private string $tipo;
    private int $qntSensores;

    //construtor
    public function __construct($nome="",$tipo="",$qntSensores=0)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->qntSensores = $qntSensores;
    }

    //metodos
    public function __toString()
    {
        return $this->nome . "|" . $this->tipo . "|" . $this->qntSensores;
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

    public function getTipo(): int
    {
        return $this->tipo;
    }

    public function setTipo(int $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getQntSensores(): int
    {
        return $this->qntSensores;
    }

    public function setQntSensores(int $qntSensores): self
    {
        $this->qntSensores = $qntSensores;

        return $this;
    }
}

$robo1 = new Robo();
$robo1->setNome("Máquina Mistério")->setTipo("Arduino")->setQntSensores(4);

$robo2 = new Robo();
$robo2->setNome("Charles Lecrash")->setTipo("Lego")->setQntSensores(2);

$robo3 = new Robo();
$robo3->setNome("Juliette")->setTipo("Arduino")->setQntSensores(3);

$robos = array($robo1, $robo2);
print $robos[1]->getNome() . "\n";

array_push($robos,$robo3);
print $robos[2]->getTipo() . "\n";
print $robos[2];

array_push($robos, new Robo("Laercio", "Arduino", 3));

//for
for ($i=0; $i < count($robos); $i++) 
{ 
    print $robos[$i]->getNome() . "\n";
}

foreach ($robos as $robozinho)
{
    print $robozinho->getQntSensores();
}
