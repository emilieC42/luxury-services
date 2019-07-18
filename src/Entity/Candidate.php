<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Candidate.
 *
 * @ORM\Table(name="candidate", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D649E7927C74", columns={"email"})})
 * @ORM\Entity
 */
class Candidate implements UserInterface
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
     * @var array|null
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $gender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nationality", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $nationality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="passport", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $passport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="curriculum_vitae", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $curriculumVitae;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profil_picture", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $profilPicture;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birthday", type="date", nullable=true, options={"default"="NULL"})
     */
    private $birthday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="place_birthday", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $placeBirthday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="experience", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $experience;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="availability", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $availability;

    /**
     * @var string|null
     *
     * @ORM\Column(name="files", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $files;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_deleted", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateDeleted;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_updated", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateUpdated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_created", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateCreated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_candidate", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $descriptionCandidate;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;
    public $passwordValidation;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     * })
     */
    private $categorie;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->idJob = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGender(): ?array
    {
        return $this->gender;
    }

    public function setGender(?array $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getPassport(): ?string
    {
        return $this->passport;
    }

    public function setPassport(?string $passport): self
    {
        $this->passport = $passport;

        return $this;
    }

    public function getCurriculumVitae(): ?string
    {
        return $this->curriculumVitae;
    }

    public function setCurriculumVitae(?string $curriculumVitae): self
    {
        $this->curriculumVitae = $curriculumVitae;

        return $this;
    }

    public function getProfilPicture(): ?string
    {
        return $this->profilPicture;
    }

    public function setProfilPicture(?string $profilPicture): self
    {
        $this->profilPicture = $profilPicture;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getPlaceBirthday(): ?string
    {
        return $this->placeBirthday;
    }

    public function setPlaceBirthday(?string $placeBirthday): self
    {
        $this->placeBirthday = $placeBirthday;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(?string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getAvailability(): ?string
    {
        return $this->availability;
    }

    public function setAvailability(?string $availability): self
    {
        $this->availability = $availability;

        return $this;
    }

    public function getFiles(): ?string
    {
        return $this->files;
    }

    public function setFiles(?string $files): self
    {
        $this->files = $files;

        return $this;
    }

    public function getDateDeleted(): ?\DateTimeInterface
    {
        return $this->dateDeleted;
    }

    public function setDateDeleted(?\DateTimeInterface $dateDeleted): self
    {
        $this->dateDeleted = $dateDeleted;

        return $this;
    }

    public function getDateUpdated(): ?\DateTimeInterface
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated(?\DateTimeInterface $dateUpdated): self
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(?\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDescriptionCandidate(): ?string
    {
        return $this->descriptionCandidate;
    }

    public function setDescriptionCandidate(?string $descriptionCandidate): self
    {
        $this->descriptionCandidate = $descriptionCandidate;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    public function getCategorie(): ?Categories
    {
        return $this->categorie;
    }

    public function setCategorie(?Categories $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection|JobOffer[]
     */
    public function getIdJob(): ArrayCollection
    {
        return $this->idJob;
    }

    public function addIdJob(JobOffer $idJob): self
    {
        if (!$this->idJob->contains($idJob)) {
            $this->idJob[] = $idJob;
        }

        return $this;
    }

    public function removeIdJob(JobOffer $idJob): self
    {
        if ($this->idJob->contains($idJob)) {
            $this->idJob->removeElement($idJob);
        }

        return $this;
    }

    public function getRoles()
    {
        // if ($this->isAdmin == true) {
        //     return ['ROLE_USER', 'ROLE_ADMIN'];
        // }

        return ['ROLE_USER'];
    }

    public function getSalt()
    {
    }

    public function eraseCredentials()
    {
    }

    public function getUsername()
    {
        return $this->email;
    }
}
