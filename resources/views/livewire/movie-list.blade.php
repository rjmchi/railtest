<div>
    <h1 class="text-indigo-700 font-bold text-2xl">Movie List</h1>

    <div class="p-2">
        @forelse ($categories as $cat)
            <p class="text-xl font-bold text-indigo-800 my-2">{{ $cat->name }}
                <flux:button wire:click="reorder({{ $cat }})">Reorder</flux:button>
                <flux:button wire:click="sortBy('title')">Sort By Title</flux:button>
                <flux:button wire:click="sortBy('rank')">Sort By Rank</flux:button>

            </p>
            <div class="px-2">
                @forelse ($cat->movies as $movie)
                    <div class="grid grid-cols-6 border-b border-teal-200 py-1" wire:key="{{ $movie->id }}">
                        <span> {{ $movie->rank }}</span>
                        <span class="col-span-3">{{ $movie->title }}</span>
                        <livewire:move-item :movie="$movie" wire:key="{{ $movie->id }}" />
                    </div>

                @empty
                    <h1>No Movies</h1>
                @endforelse
            </div>
        @empty
            <p>No Categories</p>
        @endforelse
    </div>
</div>
