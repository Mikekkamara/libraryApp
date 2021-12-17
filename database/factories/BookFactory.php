<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bookTitle' => $this->faker->words(6,true),
            'Author' => $this->faker->name(),
            'shelfNumber' => $this->faker->numberBetween(1,80),
            'status' => $this->faker->boolean(60)
        ];
    }
}
