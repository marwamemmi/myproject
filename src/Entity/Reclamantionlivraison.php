<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamantionlivraison
 *
 * @ORM\Table(name="reclamantionlivraison", indexes={@ORM\Index(name="idlivvv", columns={"id_livraison"})})
 * @ORM\Entity
 */
class Reclamantionlivraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="idreclivv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreclivv;

    /**
     * @var string
     *
     * @ORM\Column(name="reclamation", type="string", length=255, nullable=false)
     */
    private $reclamation;

    /**
     * @var \Livraison
     *
     * @ORM\ManyToOne(targetEntity="Livraison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_livraison", referencedColumnName="id_livraison")
     * })
     */
    private $idLivraison;

    public function getIdreclivv(): ?int
    {
        return $this->idreclivv;
    }

    public function getReclamation(): ?string
    {
        return $this->reclamation;
    }

    public function setReclamation(string $reclamation): self
    {
        $this->reclamation = $reclamation;

        return $this;
    }

    public function getIdLivraison(): ?Livraison
    {
        return $this->idLivraison;
    }

    public function setIdLivraison(?Livraison $idLivraison): self
    {
        $this->idLivraison = $idLivraison;

        return $this;
    }


}
