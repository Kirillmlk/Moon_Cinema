<?php

namespace App\Kernel\Upload;

use App\Kernel\Upload\UploadedFileInterface;

class UploadedFile implements UploadedFileInterface
{
    public function __construct(
        private readonly string $name,
        private readonly string $type,
        private readonly string $tmpName,
        private readonly int $error,
        private readonly int $size,
    ) {

    }

    public function move(string $path, string $fileName = null): string|false
    {
        $storagePath = APP_PATH . "/storage/$path";

        if (!is_dir($storagePath)) {
            mkdir($storagePath, 0777, true);
        }
        $fileName = $fileName ?? $this->randomFileName();

        $filePath = "$storagePath/$fileName";

        if (move_uploaded_file($this->tmpName, $filePath)) {
            return "storage/$path/$fileName";
        }

        return false;
    }

    private function randomFileName(): string
    {
        return md5(uniqid(rand(), true)).".{$this->getExtension()}";
    }

    public function getExtension(): string
    {
        return pathinfo($this->name, PATHINFO_EXTENSION);
    }
}