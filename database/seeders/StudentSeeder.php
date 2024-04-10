<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['name' => 'Muhammad Ilham', 'gender' => 'L', 'nis' => '1152000005', 'class_id' => 1],
        //     ['name' => 'Rofid Nasif Annafie', 'gender' => 'L', 'nis' => '1152000034', 'class_id' => 2],
        //     ['name' => 'Muhammad Rafli Rahmatullah', 'gender' => 'L', 'nis' => '1152000035', 'class_id' => 1],
        //     ['name' => 'Naba Elang Pamulat', 'gender' => 'L', 'nis' => '1152000088', 'class_id' => 2],
        // ];

        // foreach ($data as $value) {
        //     Student::insert([
        //         'name' => $value['name'],
        //         'gender' => $value['gender'],
        //         'nis' => $value['nis'],
        //         'class_id' => $value['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);
        // }

        Student::factory()->count(20)->create();

    }
}
