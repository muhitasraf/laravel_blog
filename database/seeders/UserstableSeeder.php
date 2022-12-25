<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fullname' => "Muhit",
            'email' => 'muhit@gmail.com',
            'mobile_number' => "0198274744",
            'address' => "Dhaka-1216",
            'password' => bcrypt(123456),
            'photo' => "image_63a52a13a92434.23625471seBzMwCY3Y.jpg",
        ]);
    }
}
