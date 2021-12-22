<?php

namespace Alura\Doctrine\Entity;

use Alura\Doctrine\Entity\Aluno;
/**
 * @Entity
 */
class Telefone
{
    /**
     * @Id
     * @GeneratedValue 
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $numero;
    /**
     * @ManyToOne(targetEntity="Aluno")
     */
    private $aluno;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero($numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    public function getAluno(): Aluno
    {
        return $this->aluno;
    }

    public function setAluno(Aluno $aluno):self
    {
        $this->aluno = $aluno;
        return $this;
    }
}