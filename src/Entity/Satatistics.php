<?php

namespace App\Entity;

use App\Repository\SatatisticsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SatatisticsRepository::class)]
class Satatistics
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $totalUsers = null;

    #[ORM\Column]
    private ?int $totalQuizzes = null;

    #[ORM\Column]
    private ?int $totalParticipations = null;

    #[ORM\Column]
    private ?float $moyenneScore = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalUsers(): ?int
    {
        return $this->totalUsers;
    }

    public function setTotalUsers(int $totalUsers): static
    {
        $this->totalUsers = $totalUsers;

        return $this;
    }

    public function getTotalQuizzes(): ?int
    {
        return $this->totalQuizzes;
    }

    public function setTotalQuizzes(int $totalQuizzes): static
    {
        $this->totalQuizzes = $totalQuizzes;

        return $this;
    }

    public function getTotalParticipations(): ?int
    {
        return $this->totalParticipations;
    }

    public function setTotalParticipations(int $totalParticipations): static
    {
        $this->totalParticipations = $totalParticipations;

        return $this;
    }

    public function getMoyenneScore(): ?float
    {
        return $this->moyenneScore;
    }

    public function setMoyenneScore(float $moyenneScore): static
    {
        $this->moyenneScore = $moyenneScore;

        return $this;
    }
}
