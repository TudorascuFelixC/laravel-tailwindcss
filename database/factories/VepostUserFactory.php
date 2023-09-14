<?php

// VepostUserFactory.php

namespace Database\Factories;

use App\Models\VepostUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VepostUserFactory extends Factory
{
    protected $model = VepostUser::class;

    public function definition()
    {
        return [
            'username' => $this->faker->unique()->userName,
            'displayname' => $this->faker->name,
            'vepost_addr' => Str::random(16),
            'password' => 'password',  // You should hash this password in the actual code
            'role' => 'user'
        ];
    }
}
