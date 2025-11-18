<x-layouts.guest>

    <h1 class="text-indigo-700 font-bold text-2xl">Movie List</h1>

    @forelse ($movies as $movie)
        <p>{{ $movie->title }}</p>

    @empty
        <h1>No Movies</h1>
    @endforelse


    @foreach ($movies as $movie)
        <p>{{ $movie->title }}</p>
    @endforeach

</x-layouts.guest>
