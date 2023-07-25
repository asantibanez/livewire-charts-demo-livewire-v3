<div>
    <div class="space-x-4">
        <button wire:click="setLightMode" class="border rounded p-1">
            Set Light Mode
        </button>
        <button wire:click="setDarkMode" class="border rounded p-1">
            Set Dark Mode
        </button>
    </div>

    <div class="my-4 border bg-gray-200 w-full rounded p-3">
        Current Theme: {{ $isInDarkMode ? 'Dark' : 'Light' }}
    </div>

    <div class="space-y-8">
        <div class="border shadow rounded">
            <livewire:pie-chart-example :is-in-dark-mode="$isInDarkMode"/>
        </div>
        <div class="border shadow rounded">
            <livewire:column-chart-example :is-in-dark-mode="$isInDarkMode"/>
        </div>
        <div class="border shadow rounded">
            <livewire:tree-map-example :is-in-dark-mode="$isInDarkMode"/>
        </div>
    </div>
</div>
