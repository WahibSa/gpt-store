<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }}</title>
</head>

<body class="grid grid-cols-12">
    <x-admin.sidebar />
    <div class="col-span-10">
        <x-admin.navbar />
        <main class="px-4">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
