<?php


namespace App\Services\User;


interface UserInterface
{
    public function indexView();

    public function addUser(array $data);
}
