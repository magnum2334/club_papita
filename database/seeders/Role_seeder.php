<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//model permission
use Spatie\Permission\Models\Role;


class Role_seeder extends Seeder
{
    /**
     * Run the database seeds.
     * roles
     * @return void
     */

    public function run()
    {   
        Role::create([
            'name'         => 'UserAdmin',
            'display_name' => 'Admin',
            'removable'    => false,
        ]);
        
    }
}
