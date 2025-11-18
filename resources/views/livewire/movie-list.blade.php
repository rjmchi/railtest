<div>
    <h1 class="text-indigo-700 font-bold text-2xl">Movie List</h1>

    <div class="p-2">
        @forelse ($categories as $cat)
            <p class="text-xl font-bold text-indigo-800 my-2">{{ $cat->name }}</p>
            <div class="px-2">
                @forelse ($cat->movies as $movie)
                    <div class="grid grid-cols-6 border-b border-teal-200 py-1" wire:key='$movie->id'>
                        <span class="col-span-3">{{ $movie->title }}</span>
                        <span> {{ $movie->rank }}</span>
                        <livewire:move-item :movie="$movie" />
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
