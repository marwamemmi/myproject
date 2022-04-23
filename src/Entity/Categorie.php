<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcatt", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcatt;

    /**
     * @var string
     *
     * @ORM\Column(name="Nomcat", type="string", length=255, nullable=false)
     */
    private $nomcat;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="blob", length=65535, nullable=false)
     */
    private $image;

    public function getIdcatt(): ?int
    {
        return $this->idcatt;
    }

    public function getNomcat(): ?string
    {
        return $this->nomcat;
    }

    public function setNomcat(string $nomcat): self
    {
        $this->nomcat = $nomcat;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }


}
