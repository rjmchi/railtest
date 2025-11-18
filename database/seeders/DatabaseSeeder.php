<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Robert',
            'email' => 'robert@test.com',
            'password'=>'kether1330',
        ]);

        $c = Category::create(['name'=>'Movies']);
        $c->movies()->create([
            'title'=>'An Affair To Remember',
            'rank'=> 1,
        ]);
        $c = Category::create(['name'=>'Musicals']);
        $c->movies()->create([
            'title'=>'West Side Story',
            'rank'=> 2,
        ]);
        $c->movies()->create([
            'title'=>'Singing in the Rain',
            'rank'=> 1,
        ]);
    }
}
