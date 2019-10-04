<?php

namespace App\Controller;

use App\DTO\VacancyDTO;
use App\Repository\VacancyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class VacancyController
 * @package App\Controller
 */
class VacancyController extends AbstractController
{
    /**
     * @var VacancyRepository
     */
    private $vacancyRepository;

    /**
     * VacancyController constructor.
     * @param VacancyRepository $vacancyRepository
     */
    public function __construct(VacancyRepository $vacancyRepository)
    {
        $this->vacancyRepository = $vacancyRepository;
    }

    /**
     * @Route(
     *     "/index",
     *     name="index-action"
     * )
     * @param Request $request
     */
    public function indexAction(Request $request)
    {
        $params = $request->query;

        $vacancyDTO = new VacancyDTO(
            $params->get('salary'),
            $params->get('region'),
            $params->get('employmentType'),
            $params->get('workExperience'),
            $params->get('scheduleType')
        );

        $paginator = $this->vacancyRepository->findByFilter($vacancyDTO, 10);
        dump($paginator->getIterator());
        exit();
    }
}