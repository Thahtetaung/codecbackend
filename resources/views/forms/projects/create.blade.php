<x-layout.admin>
    <div class="min-h-screen bg-gray-50 py-12 px-4">
        <div class="max-w-2xl mx-auto">

            <!-- Header -->
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Create New Project</h1>
                <p class="text-gray-500 text-sm mt-1">Add project details and upload media</p>
            </div>

            <form method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl shadow-sm border border-gray-200 divide-y divide-gray-100">
                @csrf

                <!-- Project Info -->
                <div class="p-6 space-y-5">
                    <h2 class="text-xs font-semibold text-gray-400 uppercase tracking-widest">Project Info</h2>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Project Name</label>
                        <input type="text" name="title" placeholder="e.g. Brand Redesign" class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg bg-gray-50 focus:bg-white focus:ring-2 focus:ring-black focus:border-transparent outline-none transition">
                    </div>
                </div>

                <!-- Category -->
                <div class="p-6 space-y-5">
                    <h2 class="text-xs font-semibold text-gray-400 uppercase tracking-widest">Classification</h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Category</label>
                            <select id="categoryid" name="category_id" class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg bg-gray-50 focus:bg-white focus:ring-2 focus:ring-black focus:border-transparent outline-none transition appearance-none cursor-pointer">
                                <option selected>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Subcategory</label>
                            <select id="subcategoryid" name="subcategory_id" class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg bg-gray-50 focus:bg-white focus:ring-2 focus:ring-black focus:border-transparent outline-none transition appearance-none cursor-pointer">
                                <option selected>Select Subcategory</option>
                                @foreach($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}" data-category="{{ $subcategory->category_id }}">
                                    {{ $subcategory->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- File Upload -->
                <div class="p-6 space-y-5">
                    <h2 class="text-xs font-semibold text-gray-400 uppercase tracking-widest">Link for project</h2>

                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Link for project</label>
                            <input type="text" name="link" placeholder="Link for project" class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg bg-gray-50 focus:bg-white focus:ring-2 focus:ring-black focus:border-transparent outline-none transition">
                        </div>
                    </div>
                </div>
                <!-- File Upload -->
                <div class="p-6 space-y-4">
                    <h2 class="text-xs font-semibold text-gray-400 uppercase tracking-widest">Media</h2>

                    <label id="uploadBox" class="group flex flex-col items-center justify-center border-2 border-dashed border-gray-200 rounded-xl p-10 text-center cursor-pointer hover:border-black hover:bg-gray-50 transition-all">
                        <div class="w-12 h-12 rounded-full bg-gray-100 group-hover:bg-black flex items-center justify-center mb-3 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-700">Click to upload images</p>
                        <p class="text-xs text-gray-400 mt-1">PNG, JPG, WEBP supported</p>

                        <div id="previewContainer" class="mt-5 grid grid-cols-3 sm:grid-cols-4 gap-3 w-full"></div>

                        <input id="fileInput" type="file" name="thumbnail" multiple class="hidden" accept="image/*">
                    </label>
                </div>

                <!-- Footer / Submit -->
                <div class="px-6 py-4 flex items-center justify-between bg-gray-50 rounded-b-2xl">
                    <p class="text-xs text-gray-400">All fields are required</p>
                    <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 bg-black text-white text-sm font-medium rounded-lg hover:bg-gray-800 active:scale-95 transition-all shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Create Project
                    </button>
                </div>

            </form>
        </div>
    </div>

    <script>
        // Category → Subcategory filter
        const category = document.getElementById('categoryid');
        const subcategory = document.getElementById('subcategoryid');

        category.addEventListener('change', function() {
            const selected = this.value;

            Array.from(subcategory.options).forEach(option => {
                if (!option.dataset.category) return;
                option.style.display = option.dataset.category === selected ? '' : 'none';
            });

            subcategory.value = '';
        });

        // Image upload & preview
        const input = document.getElementById('fileInput');
        const preview = document.getElementById('previewContainer');
        let filesArray = [];

        input.addEventListener('change', function(e) {
            Array.from(e.target.files).forEach(file => {
                filesArray.push(file);

                const reader = new FileReader();
                reader.onload = function(event) {
                    const div = document.createElement('div');
                    div.className = 'relative group rounded-lg overflow-hidden border border-gray-200';

                    div.innerHTML = `
                        <img src="${event.target.result}" class="w-full h-24 object-cover">
                        <button type="button" class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-xs font-medium">
                            Remove
                        </button>
                    `;

                    div.querySelector('button').addEventListener('click', (ev) => {
                        ev.preventDefault();
                        div.remove();
                        filesArray = filesArray.filter(f => f !== file);
                        syncFiles();
                    });

                    preview.appendChild(div);
                };

                reader.readAsDataURL(file);
            });

            syncFiles();
        });

        function syncFiles() {
            const dataTransfer = new DataTransfer();
            filesArray.forEach(file => dataTransfer.items.add(file));
            input.files = dataTransfer.files;
        }

    </script>
</x-layout.admin>
