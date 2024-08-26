<?php

require_once 'class.php';

class Post
{
    private $titolo;
    private $categoria;
    private $tag;

    public function __construct($titolo, Categoria $categoria, $tag)
    {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function mostraPost()
    {
        echo "Titolo: " . $this->titolo . "\n";

        $this->categoria->getMyCategory();
        echo "Tag: " . implode(", ", $this->tag) . "\n";
    }
}


echo "\n";
$post1 = new Post("La nuova riforma del lavoro", new Attualita(), ["politica", "economia"]);
$post2 = new Post("Le Olimpiadi 2024", new Sport(), ["olimpiadi", "sport"]);
$post3 = new Post("L'ultimo scoop sulle celebrità", new Gossip(), ["celebrità", "scandali"]);
$post4 = new Post("La Seconda Guerra Mondiale", new Storia(), ["guerra", "storia moderna"]);

$post1->mostraPost();
echo "\n";
$post2->mostraPost();
echo "\n";
$post3->mostraPost();
echo "\n";
$post4->mostraPost();
