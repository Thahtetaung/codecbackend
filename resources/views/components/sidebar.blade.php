<aside class="w-64 bg-white border-r shadow-sm flex flex-col">

    <div class="p-6 border-b">
        <h2 class="text-xl font-bold">Admin</h2>
    </div>

    <nav class="flex-1 p-4 space-y-2">

        <a href="/dashboard"
           class="block px-4 py-2 rounded-lg 
           {{ request()->is('dashboard') ? 'bg-black text-white' : 'hover:bg-gray-100' }}">
           Dashboard
        </a>

        <a href="/projects"
           class="block px-4 py-2 rounded-lg 
           {{ request()->is('projects*') ? 'bg-black text-white' : 'hover:bg-gray-100' }}">
           Projects
        </a>

        <a href="/team"
           class="block px-4 py-2 rounded-lg 
           {{ request()->is('team*') ? 'bg-black text-white' : 'hover:bg-gray-100' }}">
           Team Member
        </a>

    </nav>

</aside>