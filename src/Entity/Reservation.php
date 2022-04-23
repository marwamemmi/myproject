<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="resId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="string", length=100, nullable=true)
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="view", type="string", length=50, nullable=true)
     */
    private $view;

    /**
     * @var int|null
     *
     * @ORM\Column(name="guestNum", type="integer", nullable=true)
     */
    private $guestnum;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="resDate", type="date", nullable=true)
     */
    private $resdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eventType", type="string", length=50, nullable=true)
     */
    private $eventtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="branchLocation", type="string", length=20, nullable=true)
     */
    private $branchlocation;

    public function getResid(): ?int
    {
        return $this->resid;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getView(): ?string
    {
        return $this->view;
    }

    public function setView(?string $view): self
    {
        $this->view = $view;

        return $this;
    }

    public function getGuestnum(): ?int
    {
        return $this->guestnum;
    }

    public function setGuestnum(?int $guestnum): self
    {
        $this->guestnum = $guestnum;

        return $this;
    }

    public function getResdate(): ?\DateTimeInterface
    {
        return $this->resdate;
    }

    public function setResdate(?\DateTimeInterface $resdate): self
    {
        $this->resdate = $resdate;

        return $this;
    }

    public function getEventtype(): ?string
    {
        return $this->eventtype;
    }

    public function setEventtype(?string $eventtype): self
    {
        $this->eventtype = $eventtype;

        return $this;
    }

    public function getBranchlocation(): ?string
    {
        return $this->branchlocation;
    }

    public function setBranchlocation(?string $branchlocation): self
    {
        $this->branchlocation = $branchlocation;

        return $this;
    }


}
