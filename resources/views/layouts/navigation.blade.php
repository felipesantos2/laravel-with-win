<div>
    <nav class="p-5">
        @if(Route::is('account.index'))
            <a wire:navigate class=" font-mono border border-rose-700 p-2 bg-yellow-500 m-2" href="/">Início</a>
            <a wire:navigate class=" font-mono border border-rose-700 p-2 bg-yellow-500 m-2" href="/account/create">Adicionar Nova conta</a>
        @elseif(Route::is('account.create'))
            <a wire:navigate class=" font-mono border border-rose-700 p-2 bg-yellow-500 m-2" href="/">Início</a>
            <a wire:navigate class=" font-mono border border-rose-700 p-2 bg-yellow-500 m-2" href="/account">Todas as Contas</a>
        @else
            <a wire:navigate class=" font-mono border border-rose-700 p-2 bg-yellow-500 m-2" href="/account/create">Adicionar Nova conta</a>
            <a wire:navigate class=" font-mono border border-rose-700 p-2 bg-yellow-500 m-2" href="/account">Todas as Contas</a>
        @endif
    </nav>
</div>
