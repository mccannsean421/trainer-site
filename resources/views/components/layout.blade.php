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

    <script>
        function toggleDropdown(event) {
            // get reference to the target dropdown
            const dropdownButton = document.getElementById(event.target.id);
            const targetDropdown = document.getElementById(dropdownButton.dataset.dropdownToggle);
            
            // toggle the open classes for the dropdown
            targetDropdown.classList.toggle('hidden');
        }
    </script>
</body>

</html>