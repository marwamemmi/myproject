<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison", indexes={@ORM\Index(name="fk_liv", columns={"Idp"}), @ORM\Index(name="fk_pan", columns={"Idpanier"})})
 * @ORM\Entity
 */
class Livraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_livraison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLivraison;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string", length=255, nullable=false, options={"default"="en cours"})
     */
    private $etat = 'en cours';

    /**
     * @var \Personnell
     *
     * @ORM\ManyToOne(targetEntity="Personnell")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Idp", referencedColumnName="Idp")
     * })
     */
    private $idp;

    /**
     * @var \Panier
     *
     * @ORM\ManyToOne(targetEntity="Panier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Idpanier", referencedColumnName="Idpanier")
     * })
     */
    private $idpanier;

    public function getIdLivraison(): ?int
    {
        return $this->idLivraison;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdp(): ?Personnell
    {
        return $this->idp;
    }

    public function setIdp(?Personnell $idp): self
    {
        $this->idp = $idp;

        return $this;
    }

    public function getIdpanier(): ?Panier
    {
        return $this->idpanier;
    }

    public function setIdpanier(?Panier $idpanier): self
    {
        $this->idpanier = $idpanier;

        return $this;
    }


}
