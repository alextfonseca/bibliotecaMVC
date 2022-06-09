<?php
namespace Biblioteca\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios")
 */
class Usuario
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
     * @ORM\Column(type="string", length=255, unique=true) 
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=60)
     */
    private $senha;

    public function getId() {
        return $this->id;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }

    public function setSenha(string $senha) {
        $this->senha = password_hash($senha, PASSWORD_BCRYPT);
    }
    public function getSenha() {
        return $this->senha;
    }

    public function verificarSenha(string $senhaInformada): bool
    {
        return password_verify($senhaInformada, $this->senha);
    }
}
