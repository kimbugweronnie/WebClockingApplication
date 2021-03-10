<?php

namespace Database\Factories;

use App\Models\Attendance;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attendance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
              'name' => $this->faker->name,
                'timeIn' => $this->faker->timeIn,
                  'timeOut' => $this->faker->timeOut,
                    'date' => $this->faker->date,
                    'email' => $this->faker->email,
        ];
    }
}
