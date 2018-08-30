<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
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
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255, nullable=false)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=10, nullable=false)
     */
    private $gender;

    /**
     * @var int
     *
     * @ORM\Column(name="promotion", type="integer", nullable=false)
     */
    private $promotion;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="institution", type="string", length=255, nullable=false)
     */
    private $institution;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=false)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="birthday_date", type="string", length=15, nullable=false)
     */
    private $birthdayDate;

    /**
     * @var string
     *
     * @ORM\Column(name="birthday_place", type="string", length=50, nullable=false)
     */
    private $birthdayPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=false)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="district", type="string", length=255, nullable=false)
     */
    private $district;

    /**
     * @var string
     *
     * @ORM\Column(name="current_activity", type="string", length=255, nullable=false)
     */
    private $currentActivity;

    /**
     * @var string
     *
     * @ORM\Column(name="current_function", type="string", length=255, nullable=false)
     */
    private $currentFunction;

    /**
     * @var string
     *
     * @ORM\Column(name="current_company", type="string", length=255, nullable=false)
     */
    private $currentCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="hobbies", type="string", length=10000, nullable=false)
     */
    private $hobbies;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getPromotion(): ?int
    {
        return $this->promotion;
    }

    public function setPromotion(int $promotion): self
    {
        $this->promotion = $promotion;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getInstitution(): ?string
    {
        return $this->institution;
    }

    public function setInstitution(string $institution): self
    {
        $this->institution = $institution;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getBirthdayDate(): ?string
    {
        return $this->birthdayDate;
    }

    public function setBirthdayDate(string $birthdayDate): self
    {
        $this->birthdayDate = $birthdayDate;

        return $this;
    }

    public function getBirthdayPlace(): ?string
    {
        return $this->birthdayPlace;
    }

    public function setBirthdayPlace(string $birthdayPlace): self
    {
        $this->birthdayPlace = $birthdayPlace;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(string $district): self
    {
        $this->district = $district;

        return $this;
    }

    public function getCurrentActivity(): ?string
    {
        return $this->currentActivity;
    }

    public function setCurrentActivity(string $currentActivity): self
    {
        $this->currentActivity = $currentActivity;

        return $this;
    }

    public function getCurrentFunction(): ?string
    {
        return $this->currentFunction;
    }

    public function setCurrentFunction(string $currentFunction): self
    {
        $this->currentFunction = $currentFunction;

        return $this;
    }

    public function getCurrentCompany(): ?string
    {
        return $this->currentCompany;
    }

    public function setCurrentCompany(string $currentCompany): self
    {
        $this->currentCompany = $currentCompany;

        return $this;
    }

    public function getHobbies(): ?string
    {
        return $this->hobbies;
    }

    public function setHobbies(string $hobbies): self
    {
        $this->hobbies = $hobbies;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

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


}
