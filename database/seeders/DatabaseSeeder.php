<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CommissionPercent;
use App\Models\RegularExpenses;
use App\Models\SalaryPercent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RoomSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(WeekDaySeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(CommissionPercentSeeder::class);
        $this->call(SalaryPercentSeeder::class);
        $this->call(RegularExpensesSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(ParentSeeder::class);
        $this->call(StudentSeeder::class);
    }
}
