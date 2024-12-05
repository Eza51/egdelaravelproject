<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//codeby nowshinjerineza

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        DB::table('employees')->insert([
            [ //codeby nowshinjerineza
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'age' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'age' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'age' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Brown',
                'email' => 'bob@example.com',
                'age' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Charlie Davis',
                'email' => 'charlie@example.com',
                'age' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
//codeby nowshinjerineza