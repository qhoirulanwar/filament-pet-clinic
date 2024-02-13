<x-filament-panels::page>
    <x-filament::tabs label="Content tabs">
        <x-filament::tabs.item>
            Tab 1
        </x-filament::tabs.item>

        <x-filament::tabs.item>
            Tab 2
        </x-filament::tabs.item>

        <x-filament::tabs.item>
            Tab 2
        </x-filament::tabs.item>
    </x-filament::tabs>

    <x-filament::modal>
        <x-slot name="trigger">
            <x-filament::button>
                Open modal
            </x-filament::button>
        </x-slot>

        {{-- Modal content --}}
        <h1>JANCOOOOOK</h1>
    </x-filament::modal>

    {{ $this->table }}
</x-filament-panels::page>