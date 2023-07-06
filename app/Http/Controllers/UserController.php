<?php

namespace App\Http\Controllers;

use App\Models\ModelHasPermission;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        $arrayUsers = $users->map(function ($value) {

            $modelPermission = ModelHasPermission::with('permission')->where('model_id', $value['id'])->first();

            $newUser = [
                'name' => $value['name'],
                'email' => $value['email'],
                'tipo' => $modelPermission->permission->name,
            ];

            return $newUser;
        });

        return view('user.index', ['users' => $arrayUsers]);
    }
}
