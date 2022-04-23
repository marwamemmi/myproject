<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stocks
 *
 * @ORM\Table(name="stocks", indexes={@ORM\Index(name="fk_idf", columns={"idf"})})
 * @ORM\Entity
 */
class Stocks
{
    /**
     * @var int
     *
     * @ORM\Column(name="ids", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ids;

    /**
     * @var int
     *
     * @ORM\Column(name="idf", type="integer", nullable=false)
     */
    private $idf;

    /**
     * @var string
     *
     * @ORM\Column(name="noms", type="string", length=255, nullable=false)
     */
    private $noms;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout_s", type="date", nullable=false)
     */
    private $dateAjoutS;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_s", type="date", nullable=false)
     */
    private $dateFinS;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_s", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixS;

    /**
     * @var int
     *
     * @ORM\Column(name="qt_s", type="integer", nullable=false)
     */
    private $qtS;

    public function getIds(): ?int
    {
        return $this->ids;
    }

    public function getIdf(): ?int
    {
        return $this->idf;
    }

    public function setIdf(int $idf): self
    {
        $this->idf = $idf;

        return $this;
    }

    public function getNoms(): ?string
    {
        return $this->noms;
    }

    public function setNoms(string $noms): self
    {
        $this->noms = $noms;

        return $this;
    }

    public function getDateAjoutS(): ?\DateTimeInterface
    {
        return $this->dateAjoutS;
    }

    public function setDateAjoutS(\DateTimeInterface $dateAjoutS): self
    {
        $this->dateAjoutS = $dateAjoutS;

        return $this;
    }

    public function getDateFinS(): ?\DateTimeInterface
    {
        return $this->dateFinS;
    }

    public function setDateFinS(\DateTimeInterface $dateFinS): self
    {
        $this->dateFinS = $dateFinS;

        return $this;
    }

    public function getPrixS(): ?float
    {
        return $this->prixS;
    }

    public function setPrixS(float $prixS): self
    {
        $this->prixS = $prixS;

        return $this;
    }

    public function getQtS(): ?int
    {
        return $this->qtS;
    }

    public function setQtS(int $qtS): self
    {
        $this->qtS = $qtS;

        return $this;
    }


}
