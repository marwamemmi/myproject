<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog
 *
 * @ORM\Table(name="blog")
 * @ORM\Entity
 */
class Blog
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idblog", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idblog;

    /**
     * @var string
     *
     * @ORM\Column(name="titreblog", type="string", length=200, nullable=false)
     */
    private $titreblog;

    /**
     * @var string
     *
     * @ORM\Column(name="descblog", type="string", length=200, nullable=false)
     */
    private $descblog;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    public function getIdblog(): ?int
    {
        return $this->idblog;
    }

    public function getTitreblog(): ?string
    {
        return $this->titreblog;
    }

    public function setTitreblog(string $titreblog): self
    {
        $this->titreblog = $titreblog;

        return $this;
    }

    public function getDescblog(): ?string
    {
        return $this->descblog;
    }

    public function setDescblog(string $descblog): self
    {
        $this->descblog = $descblog;

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
