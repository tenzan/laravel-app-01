<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Locations</h1>
<ul>
    @forelse($locations as $location)
        <li>
            <a href="{{ $location->path() }}">{{ $location->name }}</a>
        </li>
    @empty
        <li>No locations yet</li>
    @endforelse
</ul>

</body>
</html>
