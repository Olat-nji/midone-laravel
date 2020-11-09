<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input =[
            'name' => 'Olayemi Olatunji',
                'email' => 'olayemi289@gmail.com',
                'password' => Hash::make('olayemi289@gmail.com')
        ];
         DB::transaction(function () use ($input) {
             tap(User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => $input['password'],
            ]), function (User $user) {
                $this->createTeam($user);
            });
        });

    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
