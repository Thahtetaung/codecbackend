<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="flex min-h-screen bg-gray-100">

    <!-- Sidebar -->
    <x-sidebar />

    <!-- Content Area -->
    <div class="flex-1 flex flex-col">

        <!-- Topbar -->
        <x-topbar />

        <!-- Page Content -->
        <main class="p-10">
            {{ $slot }}
        </main>

    </div>

</div>

</body>
</html>