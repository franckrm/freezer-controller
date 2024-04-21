<?php

namespace Database\Seeders;
use App\Enums\PanelTypeEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'panel' =>  PanelTypeEnum::ADMIN,
            'password' => bcrypt('password'),

        ]);
    }
}
