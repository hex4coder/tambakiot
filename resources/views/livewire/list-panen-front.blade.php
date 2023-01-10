<div>
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-6 w-[100%]">
        @foreach ($data as $p)
            <livewire:item-panen :item="$p" />
        @endforeach
    </div>
</div>
