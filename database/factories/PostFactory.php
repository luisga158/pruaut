<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Tema;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $count = User::count();
        $countema = Tema::count();
        $tema = Tema::all();
        $allusersdata = User::all();
        $iduser = $this->faker->numberBetween(1, $count);
        $userdata = $allusersdata->where('id', $iduser);
        $username = $allusersdata->find($iduser)->name;
        return [
            'user_id' => $iduser,
            'title' => $this->faker->text($maxNbChars = 100),
            'content' => $this->faker->text($maxNbChars = 1000),
            'tema' => $tema->find($this->faker->numberBetween(1, $countema))->nombretema,
            'autor' => $username,
        ];
    }
}