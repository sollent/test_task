<?php

namespace App\Interfaces;

/**
 * Interface IFilter
 * @package App\Interfaces
 */
interface IFilter
{
    public function getConditions();

    public function setConditions(array $criterias);
}