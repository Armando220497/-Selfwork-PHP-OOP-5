<?php
abstract class Categoria
{
    protected $nome;

    abstract public function getMyCategory();
}

class Attualita extends Categoria
{
    public function __construct()
    {
        $this->nome = "Attualita'";
    }
    public function getMyCategory()
    {
        echo "Nome della categoria " . $this->nome . "\n";
    }
}

class Sport extends Categoria
{
    public function __construct()
    {
        $this->nome = "Sport";
    }
    public function getMyCategory()
    {
        echo "Nome della categoria " . $this->nome . "\n";
    }
}

class Gossip extends Categoria
{
    public function __construct()
    {
        $this->nome = "Gossip";
    }
    public function getMyCategory()
    {
        echo "Nome della categoria " . $this->nome . "\n";
    }
}

class Storia extends Categoria
{
    public function __construct()
    {
        $this->nome = "Storia";
    }
    public function getMyCategory()
    {
        echo "Nome della categoria " . $this->nome . "\n";
    }
}

// Esempio di utilizzo
$attualita = new Attualita();
$attualita->getMyCategory();

$sport = new Sport();
$sport->getMyCategory();

$gossip = new Gossip();
$gossip->getMyCategory();

$storia = new Storia();
$storia->getMyCategory();
