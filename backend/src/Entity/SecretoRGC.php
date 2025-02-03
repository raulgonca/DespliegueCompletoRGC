<?php

 namespace App\Entity;
 use Doctrine\ORM\Mapping as ORM;
 #[ORM\Entity]
 #[ORM\Table(name: "secretoRGC")]
 class SecretoRGC
 {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;
    #[ORM\Column(type: "string", length: 255)]
    private string $fraseRGC;
    public function getId(): int
    {
        return $this->id;
    }
    public function getFraseRGC(): string
    {
        return $this->fraseRGC;
    }
    public function setFraseRGC(string $fraseRGC): self
    {
        $this->fraseRGC = $fraseRGC;
        return $this;
    }
 }