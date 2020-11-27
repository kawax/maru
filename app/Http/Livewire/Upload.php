<?php

namespace App\Http\Livewire;

use Illuminate\Http\UploadedFile;
use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    /**
     * @var UploadedFile
     */
    public $image;

    /**
     * @var bool
     */
    public $disabled;

    protected $listeners = ['imageConverted' => 'imageConverted'];

    public function updatedImage()
    {
        $this->validate([
            'image' => 'required|image|max:10240',
        ]);
    }

    public function save()
    {
        if (empty($this->image)) {
            $this->addError('image', 'ファイルを選択してください。');

            return;
        }

        $this->disabled = true;

        $image = $this->image->store('', 'public');

        $this->emit('imageUploaded', $image);
    }

    public function imageConverted()
    {
        $this->disabled = false;
    }

    public function render()
    {
        return view('livewire.upload');
    }
}
