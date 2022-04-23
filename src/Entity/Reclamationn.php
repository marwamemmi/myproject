<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamationn
 *
 * @ORM\Table(name="reclamationn", indexes={@ORM\Index(name="fkidppppppp", columns={"Idp"})})
 * @ORM\Entity
 */
class Reclamationn
{
    /**
     * @var int
     *
     * @ORM\Column(name="idrec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrec;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionrec", type="string", length=255, nullable=false)
     */
    private $descriptionrec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterec", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $daterec = 'CURRENT_TIMESTAMP';

    /**
     * @var \Personnell
     *
     * @ORM\ManyToOne(targetEntity="Personnell")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Idp", referencedColumnName="Idp")
     * })
     */
    private $idp;

    public function getIdrec(): ?int
    {
        return $this->idrec;
    }

    public function getDescriptionrec(): ?string
    {
        return $this->descriptionrec;
    }

    public function setDescriptionrec(string $descriptionrec): self
    {
        $this->descriptionrec = $descriptionrec;

        return $this;
    }

    public function getDaterec(): ?\DateTimeInterface
    {
        return $this->daterec;
    }

    public function setDaterec(\DateTimeInterface $daterec): self
    {
        $this->daterec = $daterec;

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


}
