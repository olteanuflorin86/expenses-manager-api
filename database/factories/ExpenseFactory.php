<?php

namespace Database\Factories;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ExpenseFactory extends Factory
{
      /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition() 
    {
      return [
        'name' => $this->faker->name,
        'description' => $this->faker->sentence($nbWords = 10, $variableNbWords = true),
        'amount' => $this->faker->randomDigit,
      ];
    }

}
