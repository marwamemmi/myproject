<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="fk_idclientt", columns={"id_client"})})
 * @ORM\Entity
 */
class Avis
{
    /**
     * @var int
     *
     * @ORM\Column(name="idavis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idavis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateavis", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateavis = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="Like", type="integer", nullable=false)
     */
    private $like;

    /**
     * @var int
     *
     * @ORM\Column(name="Deslike", type="integer", nullable=false)
     */
    private $deslike;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionavis", type="string", length=255, nullable=false)
     */
    private $descriptionavis;

    /**
     * @var \Clientinfo
     *
     * @ORM\ManyToOne(targetEntity="Clientinfo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
     * })
     */
    private $idClient;

    public function getIdavis(): ?int
    {
        return $this->idavis;
    }

    public function getDateavis(): ?\DateTimeInterface
    {
        return $this->dateavis;
    }

    public function setDateavis(\DateTimeInterface $dateavis): self
    {
        $this->dateavis = $dateavis;

        return $this;
    }

    public function getLike(): ?int
    {
        return $this->like;
    }

    public function setLike(int $like): self
    {
        $this->like = $like;

        return $this;
    }

    public function getDeslike(): ?int
    {
        return $this->deslike;
    }

    public function setDeslike(int $deslike): self
    {
        $this->deslike = $deslike;

        return $this;
    }

    public function getDescriptionavis(): ?string
    {
        return $this->descriptionavis;
    }

    public function setDescriptionavis(string $descriptionavis): self
    {
        $this->descriptionavis = $descriptionavis;

        return $this;
    }

    public function getIdClient(): ?Clientinfo
    {
        return $this->idClient;
    }

    public function setIdClient(?Clientinfo $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }


}
