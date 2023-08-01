<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class insert_records_in_users_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@api.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'john',
                'email' => 'johnn@api.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'mark',
                'email' => 'mark@api.com',
                'password' => bcrypt('123456')
            ],
        ];
        User::insert($users);
    }
}
