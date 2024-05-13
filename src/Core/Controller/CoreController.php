<?php

namespace App\Core\Controller;

use App\Core\Services\UploadFileServices;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CoreController extends AbstractController
{
    public function __construct(
        protected readonly EntityManagerInterface $entityManager,
        protected readonly UploadFileServices $uploadFileServices,
    ){}

    public static function getSubscribedServices(): array
    {
        return
            parent::getSubscribedServices();
         // TODO: Change the autogenerated stub
    }
}