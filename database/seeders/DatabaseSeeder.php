<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Role;
use App\Models\Service;
use App\Models\User;
use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();
        // Work::factory(10)->create();

        Role::create([
            'name' => 'Front-end Developer',
            'slug' => 'front-end-developer',
        ]);

        Role::create([
            'name' => 'Back-end Developer',
            'slug' => 'back-end-developer',
        ]);

        Role::create([
            'name' => 'Mobile Developer',
            'slug' => 'mobile-developer',
        ]);

        Role::create([
            'name' => 'Visual Designer',
            'slug' => 'visual-designer',
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Muhammad Abdurahman Salsabil',
            'username' => 'mabdurahmans',
            'email' => 'abil7540@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => '85155426763',
            'alamat' => 'Cirebon',
            'image' => 'user-images/eibil.jpeg'
        ]);

        User::create([
            'role_id' => 4,
            'name' => 'Dzikra Fisichella',
            'username' => 'dzikra',
            'email' => 'dzikra@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => '85155426763',
            'alamat' => 'Cirebon',
        ]);

        User::create([
            'role_id' => 1,
            'name' => 'Dzakky Fawwaz',
            'username' => 'dzakky',
            'email' => 'dzakky@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => '85155426763',
            'alamat' => 'Cirebon',
        ]);

        Service::create([
            'name' => 'work'
        ]);

        Service::create([
            'name' => 'blog'
        ]);

        Category::create([
            'name' => 'Website',
            'slug' => 'website',
            'service_id' => 1
        ]);

        Category::create([
            'name' => 'Mobile app',
            'slug' => 'mobile-app',
            'service_id' => 1
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design',
            'service_id' => 1
        ]);

        Category::create([
            'name' => 'Branding',
            'slug' => 'branding',
            'service_id' => 1
        ]);
    }
}
