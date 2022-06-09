<?php
namespace Biblioteca\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="livros")
 */
class Livro
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;
    /**
     * @ORM\Column(type="string", length=255) 
     */
    private $categoria;

        /**
     * @ORM\Column(type="string", length=255) 
     */
    private $autor;

    public function getId() {
        return $this->id;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setCategoria(string $categoria) {
        $this->categoria = $categoria;
    }
    public function getCategoria() {
        return $this->categoria;
    }

    public function setAutor(string $autor) {
        $this->autor = $autor;
    }
    public function getAutor() {
        return $this->autor;
    }
}
