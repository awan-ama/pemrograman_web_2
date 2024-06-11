<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Logout extends Controller
{
    public function index()
    {
        $userData = [
            'id',      
            'username', 
            'email',
            'logged_in'
        ];
        session()->remove($userData);
        return redirect()->to(base_url(''));
    }
}