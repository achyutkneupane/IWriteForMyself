<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    // Define a public $content variable.
    public $content = null;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        collect($this->faker->paragraphs($this->faker->numberBetween(3,5),false))->map(function($text) { $this->content .= '<p>'.$text.'</p>'; });
        $title = $this->faker->sentence($this->faker->numberBetween(3,7));
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'category_id' => $this->faker->numberBetween(1,5),
            'writer_id' => 1,
            'views' => 0,
            'content' => $this->content,
            'description' => $this->faker->text($this->faker->numberBetween(300,750)),
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
