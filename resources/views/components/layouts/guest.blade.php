<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body>
    <div class="p-2">
        {{ $slot }}
    </div>

    @fluxScripts

</body>

</html>
