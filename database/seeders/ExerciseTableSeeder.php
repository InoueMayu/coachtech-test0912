<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Seeder;

class ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'Taro',
            'email' => 'test1@example.com',
            'profile' => 'I am Taro'
        ];
        $exercise = new Exercise;
        $exercise->fill($param)->save();
        $param = [
            'name' => 'Taro2',
            'email' => 'test2@example.com',
            'profile' => 'I am Taro'
        ];
        $exercise = new Exercise();
        $exercise->fill($param)->save();
        $param = [
            'name' => 'Taro3',
            'email' => 'test3@example.com',
            'profile' => 'I am Taro'
        ];
        $exercise = new Exercise();
        $exercise->fill($param)->save();

    }
}
