<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnell
 *
 * @ORM\Table(name="personnell", indexes={@ORM\Index(name="iduser", columns={"id"})})
 * @ORM\Entity
 */
class Personnell
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idp;

    /**
     * @var string
     *
     * @ORM\Column(name="nomp", type="string", length=255, nullable=false)
     */
    private $nomp;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomp", type="string", length=255, nullable=false)
     */
    private $prenomp;

    /**
     * @var int
     *
     * @ORM\Column(name="cinp", type="integer", nullable=false)
     */
    private $cinp;

    /**
     * @var int
     *
     * @ORM\Column(name="telp", type="integer", nullable=false)
     */
    private $telp;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="Salaire", type="integer", nullable=false)
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Specialite", type="string", length=255, nullable=false)
     */
    private $specialite;

    /**
     * @var int
     *
     * @ORM\Column(name="nbheure", type="integer", nullable=false)
     */
    private $nbheure;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_embauche", type="date", nullable=false)
     */
    private $dateEmbauche;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DisponibilitÃ©", type="string", length=255, nullable=true)
     */
    private $disponibilitã©;

    /**
     * @var int
     *
     * @ORM\Column(name="taux_horaire", type="integer", nullable=false, options={"default"="50"})
     */
    private $tauxHoraire = 50;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prime", type="float", precision=10, scale=0, nullable=true)
     */
    private $prime;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zonegeo", type="string", length=255, nullable=true)
     */
    private $zonegeo;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    public function getIdp(): ?int
    {
        return $this->idp;
    }

    public function getNomp(): ?string
    {
        return $this->nomp;
    }

    public function setNomp(string $nomp): self
    {
        $this->nomp = $nomp;

        return $this;
    }

    public function getPrenomp(): ?string
    {
        return $this->prenomp;
    }

    public function setPrenomp(string $prenomp): self
    {
        $this->prenomp = $prenomp;

        return $this;
    }

    public function getCinp(): ?int
    {
        return $this->cinp;
    }

    public function setCinp(int $cinp): self
    {
        $this->cinp = $cinp;

        return $this;
    }

    public function getTelp(): ?int
    {
        return $this->telp;
    }

    public function setTelp(int $telp): self
    {
        $this->telp = $telp;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSalaire(): ?int
    {
        return $this->salaire;
    }

    public function setSalaire(int $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getNbheure(): ?int
    {
        return $this->nbheure;
    }

    public function setNbheure(int $nbheure): self
    {
        $this->nbheure = $nbheure;

        return $this;
    }

    public function getDateEmbauche(): ?\DateTimeInterface
    {
        return $this->dateEmbauche;
    }

    public function setDateEmbauche(\DateTimeInterface $dateEmbauche): self
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    public function getDisponibilitã©(): ?string
    {
        return $this->disponibilitã©;
    }

    public function setDisponibilitã©(?string $disponibilitã©): self
    {
        $this->disponibilitã© = $disponibilitã©;

        return $this;
    }

    public function getTauxHoraire(): ?int
    {
        return $this->tauxHoraire;
    }

    public function setTauxHoraire(int $tauxHoraire): self
    {
        $this->tauxHoraire = $tauxHoraire;

        return $this;
    }

    public function getPrime(): ?float
    {
        return $this->prime;
    }

    public function setPrime(?float $prime): self
    {
        $this->prime = $prime;

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

    public function getZonegeo(): ?string
    {
        return $this->zonegeo;
    }

    public function setZonegeo(?string $zonegeo): self
    {
        $this->zonegeo = $zonegeo;

        return $this;
    }

    public function getId(): ?Users
    {
        return $this->id;
    }

    public function setId(?Users $id): self
    {
        $this->id = $id;

        return $this;
    }


}
