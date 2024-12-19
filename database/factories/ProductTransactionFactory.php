<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ProductTransaction;
use App\Models\User;

class ProductTransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductTransaction::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'total_amount' => $this->faker->numberBetween(-10000, 10000),
            'is_paid' => $this->faker->boolean(),
            'address' => $this->faker->text(),
            'city' => $this->faker->city(),
            'post_code' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'phone_number' => $this->faker->phoneNumber(),
            'notes' => $this->faker->text(),
            'proof' => $this->faker->text(),
        ];
    }
}
