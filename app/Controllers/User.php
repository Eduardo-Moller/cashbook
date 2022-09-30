<?php

namespace App\Controllers;

class User extends BaseController
{

    function __construct()
    {
        $modelUser = model("User");
    }

    function auth()
    {
        $email = $this->request->getPost("email");
        $password = $this->request->getPost("password");

        $this->modelUser->find();
    }

    function login()
    {

        return view("user/login");
    }
}
