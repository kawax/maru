<?php

namespace Tests\Feature;

use App\Http\Livewire\Upload;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class ImageTest extends TestCase
{
    public function testUpload()
    {
        Storage::fake('public');

        $file = UploadedFile::fake()->image('test.png');

        Livewire::test(Upload::class)
                ->set('image', $file)
                ->call('save')
                ->assertEmitted('imageUploaded');
    }
}
