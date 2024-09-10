<?php

namespace Database\Factories;

use App\Models\Customer;

//use Faker\Factory as Faker;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_customer'    => $this->faker->firstName,
            'phone_customer'   => $this->faker->phoneNumber,
            'address_customer' => $this->faker->address,
            'email_customer'   => $this->faker->unique()->safeEmail,
            'city_customer'    => $this->faker->city,
        ];
    }

}
