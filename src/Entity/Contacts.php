<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacts.
 *
 * @ORM\Table(name="contacts", indexes={@ORM\Index(name="clients_id", columns={"clients_id"})})
 * @ORM\Entity
 */
class Contacts
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type_job", type="string", length=255, nullable=false)
     */
    private $typeJob;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255, nullable=false)
     */
    private $notes;

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clients_id", referencedColumnName="id")
     * })
     */
    private $clientsId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTypeJob(): ?string
    {
        return $this->typeJob;
    }

    public function setTypeJob(string $typeJob): self
    {
        $this->typeJob = $typeJob;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getClientsId(): ?Clients
    {
        return $this->clientsId;
    }

    public function setClientsId(?Clients $clientsId): self
    {
        $this->clientsId = $clientsId;

        return $this;
    }
}
