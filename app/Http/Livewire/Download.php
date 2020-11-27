<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\Component;

class Download extends Component
{
    /**
     * @var string
     */
    public $image;

    protected $listeners = ['imageUploaded' => 'imageUploaded'];

    public function imageUploaded($image)
    {
        $upload = Image::make(Storage::disk('public')->get($image))->encode('png');

        $width = $upload->width();
        $height = $upload->height();
        $size = min($width, $height);

        $circle = Image::canvas($size, $size)
                       ->circle($size, $size / 2, $size / 2, function ($draw) {
                           $draw->background('#000');
                       });

        $upload->mask($circle, true);

        $upload->save(Storage::disk('public')->path($image));

        $this->image = $image;

        $this->emit('imageConverted');
    }

    public function download()
    {
        return response()->download(Storage::disk('public')->path($this->image))
                         ->deleteFileAfterSend();
    }

    public function render()
    {
        return view('livewire.download');
    }
}
