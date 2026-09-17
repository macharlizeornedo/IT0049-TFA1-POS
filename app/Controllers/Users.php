<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
{
    $users = [
        [
            'username'  => 'admin01',
            'full_name' => 'Alex Santos',
            'role'      => 'Administrator',
        ],
        [
            'username'  => 'manager01',
            'full_name' => 'Bianca Reyes',
            'role'      => 'Manager',
        ],
        [
            'username'  => 'cashier01',
            'full_name' => 'Carlo Mendoza',
            'role'      => 'Cashier',
        ],
        [
            'username'  => 'inventory01',
            'full_name' => 'Diana Flores',
            'role'      => 'Inventory Staff',
        ],
        [
            'username'  => 'sales01',
            'full_name' => 'Ethan Garcia',
            'role'      => 'Sales Staff',
        ],
    ];

    $data = [
        'title' => 'User Accounts',
        'users' => $users,
    ];

    return view('users/index', $data);
}
}