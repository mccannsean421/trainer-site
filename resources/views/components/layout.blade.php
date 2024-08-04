<!DOCTYPE html>

<html>

<head>
    <title>@yield('title', 'Peraonal Training Kildare | The Healthy Habit')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    @vite('resources/css/app.css')
</head>

<body>
    <x-nav />
    {{$slot}}
    <x-footer />

    <script>
        function toggleDropdown(targetId) {
            // get reference to the target dropdown
            const dropdownButton = document.getElementById(targetId);
            const targetDropdown = document.getElementById(dropdownButton.dataset.dropdownToggle);
            
            // toggle the open classes for the dropdown
            targetDropdown.classList.toggle('hidden');
        }
    </script>
    @vite('resources/js/app.js')
    {{-- <script src="@vite('resources/js/app.js')"></script> --}}
</body>

</html>