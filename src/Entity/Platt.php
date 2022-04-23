<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Platt
 *
 * @ORM\Table(name="platt", indexes={@ORM\Index(name="fkl_idcatt", columns={"idcatt"})})
 * @ORM\Entity
 */
class Platt
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idplat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idplat;

    /**
     * @var string
     *
     * @ORM\Column(name="Descplat", type="string", length=255, nullable=false)
     */
    private $descplat;

    /**
     * @var string
     *
     * @ORM\Column(name="Nomplat", type="string", length=255, nullable=false)
     */
    private $nomplat;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_plat", type="integer", nullable=false)
     */
    private $prixPlat;

    /**
     * @var int
     *
     * @ORM\Column(name="q_plat", type="integer", nullable=false)
     */
    private $qPlat;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer", nullable=false)
     */
    private $stock;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcatt", referencedColumnName="idcatt")
     * })
     */
    private $idcatt;

    public function getIdplat(): ?int
    {
        return $this->idplat;
    }

    public function getDescplat(): ?string
    {
        return $this->descplat;
    }

    public function setDescplat(string $descplat): self
    {
        $this->descplat = $descplat;

        return $this;
    }

    public function getNomplat(): ?string
    {
        return $this->nomplat;
    }

    public function setNomplat(string $nomplat): self
    {
        $this->nomplat = $nomplat;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPrixPlat(): ?int
    {
        return $this->prixPlat;
    }

    public function setPrixPlat(int $prixPlat): self
    {
        $this->prixPlat = $prixPlat;

        return $this;
    }

    public function getQPlat(): ?int
    {
        return $this->qPlat;
    }

    public function setQPlat(int $qPlat): self
    {
        $this->qPlat = $qPlat;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getIdcatt(): ?Categorie
    {
        return $this->idcatt;
    }

    public function setIdcatt(?Categorie $idcatt): self
    {
        $this->idcatt = $idcatt;

        return $this;
    }


}
