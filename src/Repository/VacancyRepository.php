<?php

namespace App\Repository;

use App\DTO\VacancyDTO;
use App\Entity\Vacancy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * Class VacancyRepository
 * @package App\Repository
 */
class VacancyRepository extends ServiceEntityRepository
{
    /**
     * VacancyRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vacancy::class);
    }

    /**
     * @param VacancyDTO $vacancyDTO
     * @param int $limit
     * @return Paginator
     */
    public function findByFilter(VacancyDTO $vacancyDTO, int $limit): Paginator
    {
        $queryBuilder = $this->createQueryBuilder('v');

        foreach ($vacancyDTO->getConditions() as $key => $condition) {
            $queryBuilder
                ->andWhere("v.$key=:$key")
                ->setParameter($key, $condition);
        }

        $query = $queryBuilder
            ->orderBy('v.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery();

        $paginator = $this->paginate($query, 1, $limit);

        return $paginator;
    }

    /**
     * @param $dql
     * @param int $page
     * @param int $limit
     * @return Paginator
     */
    public function paginate($dql, $page = 1, $limit = 5): Paginator
    {
        $paginator = new Paginator($dql);

        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1)) // Offset
            ->setMaxResults($limit); // Limit

        return $paginator;
    }
}