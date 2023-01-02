<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $titreCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $textCommentaire = null;

    #[ORM\Column(length: 2)]
    private ?string $note = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;


    

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreCommentaire(): ?string
    {
        return $this->titreCommentaire;
    }

    public function setTitreCommentaire(string $titreCommentaire): self
    {
        $this->titreCommentaire = $titreCommentaire;

        return $this;
    }

    public function getTextCommentaire(): ?string
    {
        return $this->textCommentaire;
    }

    public function setTextCommentaire(string $textCommentaire): self
    {
        $this->textCommentaire = $textCommentaire;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

 
    
}
