<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Schedule;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
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
                'firstname' => 'مهدی',
                'lastname' => 'حشمتی',
                'email' => 'm.heshmati@yahoo.com',
                'mobile' => '09121112233',
                'birth_date' => '1983-09-06',
                'gender' => 'male',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
            [
                'firstname' => 'ناهید',
                'lastname' => 'صالحی',
                'email' => 'example@gmail.com',
                'mobile' => '09141112233',
                'birth_date' => '1983-09-06',
                'gender' => 'female',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
            [
                'firstname' => 'محمدرضا',
                'lastname' => 'طاهرآبادی',
                'email' => 'example2@gmail.com',
                'mobile' => '09191112233',
                'birth_date' => '1983-09-06',
                'gender' => 'male',
                'status' => 'active',
                'password' => bcrypt('password'),
            ]
        ];

        User::insert($users);
    }
}
