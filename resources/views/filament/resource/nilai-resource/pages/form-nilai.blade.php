<x-filament-panels::page>
    <form method="post" wire:submit="save">
        {{ $this->form }}
        <button type='submit' class="mt-4 bg-green-400 w-40 hover:bg-green-700 text-black font-bold py-2 px-4 rounded">
            Save
        </button>
    </form>
</x-filament-panels::page>
