<div>
    @if($image)
        <div class="max-w-sm bg-white rounded border shadow-lg p-6 mb-6">
            <img src="{{ Storage::disk('public')->url($image) }}">
        </div>

        <x-jet-button wire:click="download">
            ダウンロード
        </x-jet-button>
    @endif
</div>
