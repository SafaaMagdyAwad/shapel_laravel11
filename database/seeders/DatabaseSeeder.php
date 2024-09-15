<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Service;
use App\Models\Testimonial;
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
        Blog::factory(10)->create();
        Gallery::factory(10)->create();
        Service::factory(6)->create();
        Testimonial::factory(10)->create();
        user::factory(10)->create();
        Message::factory(10)->create();


    }
}
