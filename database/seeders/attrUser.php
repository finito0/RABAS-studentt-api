<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class attrUser extends Seeder
{

    public function run(): void
    {
        User::factory()->create([
            'firstname' => 'Will',
            'lastname' => 'Smith',
            'age' => '20',
            'nickname' => 'Willy',
        ]);
    }
}