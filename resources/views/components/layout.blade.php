<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex bg-gray-200">
        <x-navbar />

        <main class="border-2 border-green-400 mx-auto">

            {{$slot}}

        <main>
    </div>

</body>
</html>
