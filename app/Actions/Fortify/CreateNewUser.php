<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $nohp = $input['phone_number'];
        if(substr(trim($nohp), 0, 1)=='0'){
            $nohp = '62'.substr(trim($nohp), 1);
        }
        Validator::make($input, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'school' => $input['school'],
            'phone_number' => $nohp,
            'role' => "user"
        ]);
    }
}
