<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    public function login() {
        $Username = '';
        $Password = '';
        if (isset($_GET['username'])) {
            $Username = $_GET['username'];
        }
        if (isset($_GET['password'])) {
            $Password = $_GET['password'];
        }
        return view('login', ['Username' => $Username, 'Password' => $Password]);
    }

    public function register() {
        $Username = '';
        $Email = '';
        $Password = '';
        if (isset($_GET['username'])) {
            $Username = $_GET['username'];
        }
        if (isset($_GET['email'])) {
            $Email = $_GET['email'];
        }
        if (isset($_GET['password'])) {
            $Password = $_GET['password'];
        }
        return view('register', ['Username' => $Username, 'Email' => $Email, 'Password' => $Password]);
    }
}
