<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FlotaRepository")
 */
class Flota
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Model;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Marka;

    public function getId()
    {
        return $this->id;
    }

    public function getModel()
    {
        return $this->Model;
    }

    public function setModel(string $Model): self
    {
        $this->Model = $Model;

        return $this;
    }

    public function getMarka()
    {
        return $this->Marka;
    }

    public function setMarka(string $Marka): self
    {
        $this->Marka = $Marka;

        return $this;
    }
}
