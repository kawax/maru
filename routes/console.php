<?php

use Carbon\Carbon;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('maru:clean', function () {
    collect(Storage::disk('public')->files(''))
        ->reject(function ($file) {
            return Str::startsWith($file, '.');
        })
        ->each(function ($file) {
            $data = Carbon::createFromTimestamp(Storage::disk('public')->lastModified($file));
            if ($data->isBefore(now()->subDay())) {
                Storage::disk('public')->delete($file);
            }
        });
})->purpose('未削除ファイルを削除');
