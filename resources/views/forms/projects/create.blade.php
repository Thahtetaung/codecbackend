<x-layout>
    <div class="min-h-screen py-10 px-4 z-99">
        <div class="max-w-lg mx-auto bg-white shadow-xl rounded-2xl p-8">

            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-gray-800">Create New Project</h1>
                <p class="text-gray-500 text-sm">Add project details and upload media</p>
            </div>

            <form class="space-y-8">

                <!-- Project Info -->
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6">

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Project Name</label>
                        <input type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:outline-none">
                    </div>
{{-- 
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Client</label>
                        <input type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:outline-none">
                    </div> --}}

                </div>

                {{-- <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea rows="4" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:outline-none"></textarea>
                </div> --}}

                <!-- Category + Subcategory -->
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6">

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                        <select class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:outline-none">
                            <option>Select Category</option>
                            <option>Photography</option>
                            <option>Video</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Subcategory</label>
                        <select class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:outline-none">
                            <option>Select Subcategory</option>
                            <option>Event</option>
                            <option>Product</option>
                            <option>Portrait</option>
                        </select>
                    </div>

                </div>

                <!-- File Upload -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload Images</label>

                    <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-black transition cursor-pointer">
                        <p class="text-gray-500 text-sm">Drag & drop images here or click to upload</p>
                        <input type="file" multiple class="hidden">
                    </div>

                    <!-- Preview Grid (Static UI example) -->
                    {{-- <div class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="relative group">
                            <img src="https://via.placeholder.com/300" class="rounded-lg object-cover w-full h-32">
                            <button class="absolute top-2 right-2 bg-black text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition">
                                Remove
                            </button>
                        </div>

                        <div class="relative group">
                            <img src="https://via.placeholder.com/300" class="rounded-lg object-cover w-full h-32">
                            <button class="absolute top-2 right-2 bg-black text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition">
                                Remove
                            </button>
                        </div>
                    </div> --}}
                </div>

                <!-- Submit -->
                <div class="flex justify-end gap-4 pt-4 border-t">
                    <button type="button" class="px-6 py-2 rounded-lg border text-gray-600 hover:bg-gray-100 transition">
                        Cancel
                    </button>

                    <button type="submit" class="px-6 py-2 rounded-lg bg-black text-white hover:bg-gray-800 transition shadow-md">
                        Create Project
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-layout>
