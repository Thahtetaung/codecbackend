<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex bg-gray-200 min-h-screen">
        <x-navbar />

        <main class="mx-auto">

            {{$slot}}

        <main>
    </div>

</body>
</html>
