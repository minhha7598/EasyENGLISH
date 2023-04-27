<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classroom;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classRoom = [
            ['name' => 'Room 1', 'address' => 'EasyENGLISH center 1', 'location' => 'floor 1', 'description' => 'Good quality'],
            ['name' => 'Room 2', 'address' => 'EasyENGLISH center 1', 'location' => 'floor 1', 'description' => 'Good quality'],
            ['name' => 'Room 3', 'address' => 'EasyENGLISH center 1', 'location' => 'floor 2', 'description' => 'Good quality'],
            ['name' => 'Room 4', 'address' => 'EasyENGLISH center 1', 'location' => 'floor 2', 'description' => 'Good quality'],
            ['name' => 'Room 5', 'address' => 'EasyENGLISH center 1', 'location' => 'floor 2', 'description' => 'Good quality'],
            ['name' => 'Room 6', 'address' => 'EasyENGLISH center 1', 'location' => 'floor 3', 'description' => 'Good quality'],
            ['name' => 'Room 7', 'address' => 'EasyENGLISH center 1', 'location' => 'floor 3', 'description' => 'Good quality'],
            ['name' => 'Room 8', 'address' => 'EasyENGLISH center 1', 'location' => 'floor 3', 'description' => 'Good quality'],
            ['name' => 'Room 9', 'address' => 'EasyENGLISH center 1', 'location' => 'floor 4', 'description' => 'Good quality'],
            ['name' => 'Room 10', 'address' => 'EasyENGLISH center 1', 'location' => 'floor 4', 'description' => 'Good quality'],
        ];
        Classroom::query()->insert($classRoom);
    }
}
