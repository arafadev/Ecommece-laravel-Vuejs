<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function createCustomer()
    {
      $user         =  new User();
      $user->name   =  'Developer';
      $user->email   =  'developer1@gmail.com';
      $user->password = Hash::make('1234');
      $user->save();
 
      $admin = Role::where('slug','admin')->first();
 
      $user->roles()->attach($admin);
    }
}
