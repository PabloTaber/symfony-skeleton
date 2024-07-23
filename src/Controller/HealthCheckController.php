<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthCheckController
{

    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('/health', name: 'health_check', methods: ['GET'])]
    public function __invoke(): Response
    {
        $this->logger->info('Este es el controlador HealthCheckController');

        return new JsonResponse(['status' => 'ok']);
    }
}