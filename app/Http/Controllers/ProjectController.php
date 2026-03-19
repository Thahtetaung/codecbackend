<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectMedia;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('forms.projects.create' , compact('categories','subcategories'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['string' , 'required' , 'max:50'],
            'category_id' => ['required' , 'exists:categories,id'],
            'subcategory_id' => ['required' , 'exists:subcategories,id']
        ]);

        Project::create($validated);
        ProjectMedia::create([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id
        ]);
        return redirect ('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
