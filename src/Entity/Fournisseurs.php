<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseurs
 *
 * @ORM\Table(name="fournisseurs")
 * @ORM\Entity
 */
class Fournisseurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="idf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idf;

    /**
     * @var string
     *
     * @ORM\Column(name="nomf", type="string", length=255, nullable=false)
     */
    private $nomf;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomf", type="string", length=255, nullable=false)
     */
    private $prenomf;

    /**
     * @var string
     *
     * @ORM\Column(name="catf", type="string", length=255, nullable=false)
     */
    private $catf;

    /**
     * @var int
     *
     * @ORM\Column(name="telf", type="integer", nullable=false)
     */
    private $telf;

    /**
     * @var string
     *
     * @ORM\Column(name="addf", type="string", length=255, nullable=false)
     */
    private $addf;

    public function getIdf(): ?int
    {
        return $this->idf;
    }

    public function getNomf(): ?string
    {
        return $this->nomf;
    }

    public function setNomf(string $nomf): self
    {
        $this->nomf = $nomf;

        return $this;
    }

    public function getPrenomf(): ?string
    {
        return $this->prenomf;
    }

    public function setPrenomf(string $prenomf): self
    {
        $this->prenomf = $prenomf;

        return $this;
    }

    public function getCatf(): ?string
    {
        return $this->catf;
    }

    public function setCatf(string $catf): self
    {
        $this->catf = $catf;

        return $this;
    }

    public function getTelf(): ?int
    {
        return $this->telf;
    }

    public function setTelf(int $telf): self
    {
        $this->telf = $telf;

        return $this;
    }

    public function getAddf(): ?string
    {
        return $this->addf;
    }

    public function setAddf(string $addf): self
    {
        $this->addf = $addf;

        return $this;
    }


}
