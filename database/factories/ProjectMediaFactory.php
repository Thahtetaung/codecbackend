<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectMedia>
 */
class ProjectMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = \App\Models\Category::inRandomOrder()->first();

        $subcategory = \App\Models\Subcategory::where('category_id', $category->id)
            ->inRandomOrder()
            ->first();

        return [
            'project_id' => \App\Models\Project::inRandomOrder()->first()->id,
            'file_path' => 'projects/' . fake()->imageUrl(),
            'category_id' => $category->id,
            'subcategory_id' => $subcategory->id,
        ];
    }
}
