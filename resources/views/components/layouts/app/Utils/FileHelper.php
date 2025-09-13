<?php

namespace App\Utils;

use Illuminate\Support\Facades\File;

class FileHelper
{

    /**
     * Ensure a folder exists, Recursive create (-included true) if it doesn't.
     *
     * @param string $path Absolute path
     * @param int $permissions
     * @return void
     */
    public static function createFolderIfNotExists(string $path, int $permissions = 0755): void
    {
        if (!File::exists($path)) {
            File::makeDirectory($path, $permissions, true);
        }
    }
}
