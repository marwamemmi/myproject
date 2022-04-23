<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Branche
 *
 * @ORM\Table(name="branche")
 * @ORM\Entity
 */
class Branche
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idbranche", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbranche;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombranche", type="string", length=255, nullable=false)
     */
    private $nombranche;

    /**
     * @var int
     *
     * @ORM\Column(name="Contact", type="integer", nullable=false)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="Emplacement", type="string", length=225, nullable=false)
     */
    private $emplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="Heureo", type="string", length=255, nullable=false)
     */
    private $heureo;

    /**
     * @var string
     *
     * @ORM\Column(name="Heuref", type="string", length=255, nullable=false)
     */
    private $heuref;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    public function getIdbranche(): ?int
    {
        return $this->idbranche;
    }

    public function getNombranche(): ?string
    {
        return $this->nombranche;
    }

    public function setNombranche(string $nombranche): self
    {
        $this->nombranche = $nombranche;

        return $this;
    }

    public function getContact(): ?int
    {
        return $this->contact;
    }

    public function setContact(int $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getHeureo(): ?string
    {
        return $this->heureo;
    }

    public function setHeureo(string $heureo): self
    {
        $this->heureo = $heureo;

        return $this;
    }

    public function getHeuref(): ?string
    {
        return $this->heuref;
    }

    public function setHeuref(string $heuref): self
    {
        $this->heuref = $heuref;

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


}
