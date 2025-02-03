<?php
 namespace App\Entity;
 use Doctrine\ORM\Mapping as ORM;
 #[ORM\Entity]
 #[ORM\Table(name: "messages")]
 class Message
 {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;
    #[ORM\Column(type: "string", length: 255)]
    private string $content;
    public function getId(): int
    {
        return $this->id;
    }
    public function getContent(): string
    {
        return $this->content;
    }
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }
 }