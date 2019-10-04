<?php

namespace App\DTO;

use App\Interfaces\IFilter;

/**
 * Class VacancyDTO
 * @package App\DTO
 */
class VacancyDTO implements IFilter
{
    /**
     * @var integer
     */
    private $salary;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $employmentType;

    /**
     * @var string
     */
    private $workExperience;

    /**
     * @var string
     */
    private $scheduleType;

    /**
     * @var array
     */
    private $conditions;

    /**
     * VacancyDTO constructor.
     * @param int $salary
     * @param string $region
     * @param string $employmentType
     * @param string $workExperience
     * @param string $scheduleType
     */
    public function __construct(
        ?int $salary,
        ?string $region,
        ?string $employmentType,
        ?string $workExperience,
        ?string $scheduleType
    ) {
        $this->salary = $salary;
        $this->region = $region;
        $this->employmentType = $employmentType;
        $this->workExperience = $workExperience;
        $this->scheduleType = $scheduleType;

        $this->setConditions(compact(
            'salary',
            'region',
            'employmentType',
            'workExperience',
            'scheduleType'
        ));
    }

    /**
     * @param array $criterias
     */
    public function setConditions(array $criterias)
    {
        $this->conditions = [];

        foreach ($criterias as $key => $criteria) {
            if ($criteria)
                $this->conditions[$key] = $criteria;
        }
    }

    public function getConditions()
    {
        return $this->conditions;
    }
}