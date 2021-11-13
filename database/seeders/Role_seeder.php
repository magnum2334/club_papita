<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//model permission
use Spatie\Permission\Models\Role;


class Role_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=Role::create(['name' => 'UserAdmin']);
        $visitantes=Role::create([''=> 'UserVisitante']);
    }
}
