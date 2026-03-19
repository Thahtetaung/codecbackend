<x-layout.admin>
    <div class="min-h-screen py-10 px-4 z-99">
        <div class="max-w-lg mx-auto bg-white shadow-xl rounded-2xl p-8">

            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-gray-800">Create New Project</h1>
                <p class="text-gray-500 text-sm">Add project details and upload media</p>
            </div>

            <form class="space-y-8" method="post">
                @csrf

                <!-- Project Info -->
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6">

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Project Name</label>
                        <input type="text" name="title" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:outline-none">
                    </div>


                </div>


                <!-- Category + Subcategory -->
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6">

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                        <select id="categoryid" name="category_id" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:outline-none">
                            <option>Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Subcategory</label>
                        <select id="subcategoryid" name="subcategory_id" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:outline-none" placeholder="Select a subcategory">
                            @foreach($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}" data-category="{{$subcategory->category_id}}">
                                {{$subcategory->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <!-- File Upload -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload Images</label>

                    <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-black transition cursor-pointer">
                        <p class="text-gray-500 text-sm">Drag & drop images here or click to upload</p>
                        <input type="file" name="file_path" multiple class="hidden">
                    </div>
                </div>

                <!-- Submit -->
                <div class="flex justify-end gap-4 pt-4 border-t">
                    <button type="submit" class="px-6 py-2 rounded-lg bg-black text-white hover:bg-gray-800 transition shadow-md">
                        Create Project
                    </button>
                </div>

            </form>
        </div>
    </div>
    <script>
        const category = document.getElementById('categoryid');
        const subcategory = document.getElementById('subcategoryid');

        category.addEventListener('change', function() {
            const selected = this.value;

            Array.from(subcategory.options).forEach(option => {
                if (!option.dataset.category) return;

                if (option.dataset.category === selected) {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
            });

            subcategory.value = '';
        });

    </script>
</x-layout.admin>
