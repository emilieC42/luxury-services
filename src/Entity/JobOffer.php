<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * JobOffer
 *
 * @ORM\Table(name="job_offer", indexes={@ORM\Index(name="contact_id", columns={"contact_id"}), @ORM\Index(name="clients_id", columns={"clients_id"}), @ORM\Index(name="categories_id", columns={"categories_id"})})
 * @ORM\Entity
 */
class JobOffer
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
     * @ORM\Column(name="job_reference", type="text", length=65535, nullable=false)
     */
    private $jobReference;

    /**
     * @var string
     *
     * @ORM\Column(name="name_society", type="string", length=255, nullable=false)
     */
    private $nameSociety;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=10, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=false)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="job_title", type="text", length=65535, nullable=false)
     */
    private $jobTitle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=false)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="job_categorie", type="string", length=255, nullable=false)
     */
    private $jobCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="job_type", type="string", length=255, nullable=false)
     */
    private $jobType;

    /**
     * @var \Contacts
     *
     * @ORM\ManyToOne(targetEntity="Contacts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contact_id", referencedColumnName="id")
     * })
     */
    private $contact;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categories_id", referencedColumnName="id")
     * })
     */
    private $categories;

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clients_id", referencedColumnName="id")
     * })
     */
    private $clients;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Candidate", mappedBy="idJob")
     */
    private $idCandidate;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCandidate = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobReference(): ?string
    {
        return $this->jobReference;
    }

    public function setJobReference(string $jobReference): self
    {
        $this->jobReference = $jobReference;

        return $this;
    }

    public function getNameSociety(): ?string
    {
        return $this->nameSociety;
    }

    public function setNameSociety(string $nameSociety): self
    {
        $this->nameSociety = $nameSociety;

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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }

    public function setJobTitle(string $jobTitle): self
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getJobCategorie(): ?string
    {
        return $this->jobCategorie;
    }

    public function setJobCategorie(string $jobCategorie): self
    {
        $this->jobCategorie = $jobCategorie;

        return $this;
    }

    public function getJobType(): ?string
    {
        return $this->jobType;
    }

    public function setJobType(string $jobType): self
    {
        $this->jobType = $jobType;

        return $this;
    }

    public function getContact(): ?Contacts
    {
        return $this->contact;
    }

    public function setContact(?Contacts $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getCategories(): ?Categories
    {
        return $this->categories;
    }

    public function setCategories(?Categories $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getClients(): ?Clients
    {
        return $this->clients;
    }

    public function setClients(?Clients $clients): self
    {
        $this->clients = $clients;

        return $this;
    }

    /**
     * @return Collection|Candidate[]
     */
    public function getIdCandidate(): Collection
    {
        return $this->idCandidate;
    }

    public function addIdCandidate(Candidate $idCandidate): self
    {
        if (!$this->idCandidate->contains($idCandidate)) {
            $this->idCandidate[] = $idCandidate;
            $idCandidate->addIdJob($this);
        }

        return $this;
    }

    public function removeIdCandidate(Candidate $idCandidate): self
    {
        if ($this->idCandidate->contains($idCandidate)) {
            $this->idCandidate->removeElement($idCandidate);
            $idCandidate->removeIdJob($this);
        }

        return $this;
    }

}
