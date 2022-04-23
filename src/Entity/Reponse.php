<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="fk_rrjujjn", columns={"idrec"})})
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="idrep", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrep;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=10000, nullable=false)
     */
    private $reponse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterep", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $daterep = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="idrec", type="integer", nullable=false)
     */
    private $idrec;

    public function getIdrep(): ?int
    {
        return $this->idrep;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getDaterep(): ?\DateTimeInterface
    {
        return $this->daterep;
    }

    public function setDaterep(\DateTimeInterface $daterep): self
    {
        $this->daterep = $daterep;

        return $this;
    }

    public function getIdrec(): ?int
    {
        return $this->idrec;
    }

    public function setIdrec(int $idrec): self
    {
        $this->idrec = $idrec;

        return $this;
    }


}
