<!DOCTYPE html>

<html>

<head>
    <title>The Healthy Habit</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-nav />
    {{$slot}}
    <x-footer />
</body>

</html>