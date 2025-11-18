<div>
    <h1 class="text-indigo-700 font-bold text-2xl">Movie List</h1>

    <div class="p-2">
        @forelse ($categories as $cat)
            <p class="text-xl font-bold text-indigo-800 my-2">{{ $cat->name }}</p>
            <div class="px-2">
                @forelse ($cat->movies as $movie)
                    <p>{{ $movie->title }}</p>

                @empty
                    <h1>No Movies</h1>
                @endforelse
            </div>
        @empty
            <p>No Categories</p>
        @endforelse
    </div>
</div>
