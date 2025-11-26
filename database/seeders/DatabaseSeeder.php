<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User erstellen
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.org',
            'password' => Hash::make('john.doe@example.org'),
        ]);

        $this->call([
            BookSeeder::class,
        ]);
    }
}
