<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidatureRepository")
 */
class Candidature
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $candidat_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $job_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCandidatId(): ?int
    {
        return $this->candidat_id;
    }

    public function setCandidatId(int $candidat_id): self
    {
        $this->candidat_id = $candidat_id;

        return $this;
    }

    public function getJobId(): ?int
    {
        return $this->job_id;
    }

    public function setJobId(int $job_id): self
    {
        $this->job_id = $job_id;

        return $this;
    }
}
