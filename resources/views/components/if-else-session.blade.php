<div class="mt-2 py-4 px-4 text-center @if(session()->get('success')) border border-green-500 @endif rounded-lg">
    @if (session()->has('success'))
        <p class="text-2xl font-semibold">
            {{ session()->get('success')}}
        </p>
    @else
        <p class="text-2xl font-semibold">
            {{ session()->get('error')}}
        </p>
    @endif
</div>
