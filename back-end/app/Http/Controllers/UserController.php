<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Httpp\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return UserResource::collection(User::all());
    }
}
