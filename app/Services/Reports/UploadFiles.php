<?php

namespace App\Services\Reports;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UploadFiles
{
    public function execute(UploadedFile $file)
    {
        $extension = $file->getClientOriginalExtension();

        $filename = md5( now() . uniqid() ) . '.' . $extension;

        $path = $file->storeAs('files', $filename);

        return $path;
    }
}