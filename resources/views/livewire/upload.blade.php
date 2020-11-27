<div>
    <form wire:submit.prevent="save">

        <x-jet-input type="file" wire:model="image" class="bg-white border"></x-jet-input>

        <x-jet-input-error for="image"></x-jet-input-error>

        <div class="pt-6">
            @if($disabled)
                <x-jet-button disabled>アップロードしています...</x-jet-button>
            @else
                <x-jet-button>アップロード</x-jet-button>
            @endif
        </div>
    </form>
</div>
