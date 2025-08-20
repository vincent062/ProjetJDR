<?php

namespace App\Entity;

use App\Repository\TableRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TableRepository::class)]
#[ORM\Table(name: '`table`')]
class Table
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $MJ = null;

    #[ORM\Column(length: 255)]
    private ?string $Licence = null;

    #[ORM\Column]
    private ?int $places = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $jours_joués = null;

    #[ORM\Column(length: 255)]
    private ?string $horaires = null;

    #[ORM\Column(length: 255)]
    private ?string $type_de_table = null;

    #[ORM\Column(nullable: true)]
    private ?int $place_occupée = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMJ(): ?string
    {
        return $this->MJ;
    }

    public function setMJ(string $MJ): static
    {
        $this->MJ = $MJ;

        return $this;
    }

    public function getLicence(): ?string
    {
        return $this->Licence;
    }

    public function setLicence(string $Licence): static
    {
        $this->Licence = $Licence;

        return $this;
    }

    public function getPlaces(): ?int
    {
        return $this->places;
    }

    public function setPlaces(int $places): static
    {
        $this->places = $places;

        return $this;
    }

    public function getJoursJoués(): ?string
    {
        return $this->jours_joués;
    }

    public function setJoursJoués(?string $jours_joués): static
    {
        $this->jours_joués = $jours_joués;

        return $this;
    }

    public function getHoraires(): ?string
    {
        return $this->horaires;
    }

    public function setHoraires(string $horaires): static
    {
        $this->horaires = $horaires;

        return $this;
    }

    public function getTypeDeTable(): ?string
    {
        return $this->type_de_table;
    }

    public function setTypeDeTable(string $type_de_table): static
    {
        $this->type_de_table = $type_de_table;

        return $this;
    }

    public function getPlaceOccupée(): ?int
    {
        return $this->place_occupée;
    }

    public function setPlaceOccupée(?int $place_occupée): static
    {
        $this->place_occupée = $place_occupée;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }
}

