<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'name' => 'Danieke',
            'email' => 'danieke@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'has_premium' => true,
        ]);

        $otherUsers = User::factory()
            ->count(10)
            ->create();

        $users = $otherUsers->concat([$admin]);

        $articles = Article::factory()
            ->count(200)
            ->recycle($users)
            ->create();

        Comment::factory()
            ->count(40)
            ->recycle($users)
            ->recycle($articles)
            ->create();

        $categories = Category::factory()
            ->count(10)
            ->create();

        // attach 3 to 5 random categories to each article
        foreach ($articles as $article) {
            $article->categories()->saveMany($categories->random(rand(3, 5)));
        }
    }
}
