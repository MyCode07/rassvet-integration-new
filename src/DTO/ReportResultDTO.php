<?php

declare(strict_types=1);

namespace App\DTO;

final class ReportResultDTO
{
    public function __construct(
        public string $filePath,
        public string $fileUrl,
        public string $reportContent,
    ) {}
}
