<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = config('constants.roles');

        foreach ($roles as $index => $role)
        {
            if ( ! Role::query()->where('slug', $role['slug'])->exists())
            {
                Role::query()->create([
                    'id'   => ++$index,
                    'name' => $role['name'],
                    'slug' => $role['slug'],
                ]);
            }
        }
    }
}
