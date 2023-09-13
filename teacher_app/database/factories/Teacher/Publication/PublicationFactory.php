<?php

namespace Database\Factories\Teacher\Publication;

use App\Models\Teacher\Publication\Journal;
use App\Models\Teacher\Publication\ScienceField;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher\Publication\Publication>
 */
class PublicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->country(),
            'science_field_id' => ScienceField::get()->random()->id,
            'publication_date' => $this->faker->date(),
            'journal_id' => Journal::get()->random()->id,
            'university_id' => $this->faker->numberBetween(1, 10),
            'is_together_with_student' => $this->faker->numberBetween(1, 10),
        ];
    }
}
