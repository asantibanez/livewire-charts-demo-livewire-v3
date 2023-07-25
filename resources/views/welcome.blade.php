<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Livewire Charts</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>

    @livewireStyles
</head>
<body>
<div class="container mx-auto py-8">
    <livewire:charts-container />
</div>
@livewireScripts
@livewireChartsScripts
</body>
</html>
