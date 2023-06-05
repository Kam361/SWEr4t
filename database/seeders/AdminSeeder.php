<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use faker\factory as f;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user=new User;
       $user->name='Muhammad Kamran';
       $user->email='allahho.kamran@gmail.com';
       $user->role=1;
       $user->password='kamrankam';
       $user->save();
    }
}