<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectMedia;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {}

    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('forms.projects.create', compact('categories', 'subcategories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => ['required', 'string', 'max:50'],
            'category_id'    => ['required', 'exists:categories,id'],
            'subcategory_id' => ['required', 'exists:subcategories,id'],
            'thumbnail'      => ['required', 'array', 'min:1'],
            'thumbnail.*'    => ['image', 'max:10240'],
        ]);

        $project = Project::create([
            'title' => $validated['title'],
        ]);

        foreach ($request->file('thumbnail') as $file) {
            $path = $file->store('projects', 'public');

            ProjectMedia::create([
                'project_id'     => $project->id,
                'thumbnail'      => $path,
                'category_id'    => $validated['category_id'],
                'subcategory_id' => $validated['subcategory_id'],
            ]);
        }

        return redirect('/projects')->with('success', 'Project created successfully.');
    }

    public function show(Project $project) {}

    public function edit(Project $project) {}

    public function update(Request $request, Project $project) {}

    public function destroy(Project $project) {}
}