<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\User\UserInterface;


class UserController extends Controller
{
    private $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return $this->user->indexView();
    }

    public function create(Request $request)
    {
        return $this->user->addUser($request->toArray());
    }
}
