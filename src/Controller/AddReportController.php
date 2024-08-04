<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\RenderService;
use App\Service\ReportService;
use AppLogger;
use Laminas\Diactoros\Response\JsonResponse;
use Laminas\Diactoros\ServerRequest;
use Monolog\Logger;
use Psr\Http\Message\ResponseInterface;

class AddReportController
{
    private Logger $logger;

    public function __construct()
    {
        $this->logger = AppLogger::getLogger();
    }

    public function index(ServerRequest $request): ResponseInterface
    {
        $body = $request->getBody()->getContents();
        try {
            $data = json_decode($body, true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Невалидный JSON',
            ], 400);
        }

        try {
            $report = new RenderService();

            $reportService = new ReportService();
            $result = $reportService->create($report, $data);

            if (!$result->reportContent) {
                throw new \RuntimeException('Невозможно создать отчет');
            }

            return new JsonResponse([
                'success' => true,
                'file_path' => $result->filePath,
                'file_url' => $result->fileUrl,
            ]);
        } catch (\Throwable $e) {
            $this->logger->error('Cannot create a report. Message: ' . $e->getMessage());

            return new JsonResponse([
                'success' => false,
                'message' => 'Ошибка генерирования отчета',
            ], 500);
        }
    }
}
