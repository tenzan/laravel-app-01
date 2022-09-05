<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Locations</h1>
<ul>
    @foreach($locations as $location)
        <li>{{ $location->name }}</li>
    @endforeach
</ul>

</body>
</html>
