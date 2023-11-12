<div>
    {{-- Be like water. --}}
   <div class="border border-red-500">
        <h1>
            Hello livewire
        </h1>
        <h2>
            The current time is: {{ time() }}
        </h2>
        <h3>
            The date  is: {{ date('d/m/Y') }}
        </h3>
   </div>

   <button wire:click="$refresh">
        Refresh
   </button>
</div>
