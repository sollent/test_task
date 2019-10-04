<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Vacancy
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\VacancyRepository")
 */
class Vacancy
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="title", type="string")
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(name="company_name", type="string")
     */
    private $companyName;

    /**
     * @var string
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     * @ORM\Column(name="salary", type="integer")
     */
    private $salary;

    /**
     * @var string
     * @ORM\Column(name="region", type="string")
     */
    private $region;

    /**
     * @var string
     * @ORM\Column(name="employment_type", type="string")
     */
    private $employmentType;

    /**
     * @var string
     * @ORM\Column(name="work_experience", type="string")
     */
    private $workExperience;

    /**
     * @var string
     * @ORM\Column(name="schedule_type", type="string")
     */
    private $scheduleType;

    /**
     * @var \DateTime
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var boolean
     * @ORM\Column(name="is_publish", type="boolean")
     */
    private $isPublish = 0;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Vacancy
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Vacancy
     */
    public function setTitle(string $title): Vacancy
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return Vacancy
     */
    public function setCompanyName(string $companyName): Vacancy
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Vacancy
     */
    public function setDescription(string $description): Vacancy
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalary(): ?int
    {
        return $this->salary;
    }

    /**
     * @param int $salary
     * @return Vacancy
     */
    public function setSalary(int $salary): Vacancy
    {
        $this->salary = $salary;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return Vacancy
     */
    public function setRegion(string $region): Vacancy
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmploymentType(): ?string
    {
        return $this->employmentType;
    }

    /**
     * @param string $employmentType
     * @return Vacancy
     */
    public function setEmploymentType(string $employmentType): Vacancy
    {
        $this->employmentType = $employmentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkExperience(): ?string
    {
        return $this->workExperience;
    }

    /**
     * @param string $workExperience
     * @return Vacancy
     */
    public function setWorkExperience(string $workExperience): Vacancy
    {
        $this->workExperience = $workExperience;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param string $scheduleType
     * @return Vacancy
     */
    public function setScheduleType(string $scheduleType): Vacancy
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return bool
     */
    public function isPublish(): ?bool
    {
        return $this->isPublish;
    }

    /**
     * @param bool $isPublish
     */
    public function setIsPublish(bool $isPublish): void
    {
        $this->isPublish = $isPublish;
    }
}