<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email'     => 'juan@example.com',
                'phone'     => '09123456789',
            ],

            [
                'full_name' => 'Shae Ornedo',
                'email'     => 'Shae.com',
                'phone'     => '09121682611',
            ],

            [
                'full_name' => 'Kenneth Ornedo',
                'email'     => 'Kenneth.com',
                'phone'     => '09121682612',
            ],

            [
                'full_name' => 'Emelyn Ornedo',
                'email'     => 'Emelyn.com',
                'phone'     => '09121682613',
            ],

            [
                'full_name' => 'Charlie Ornedo',
                'email'     => 'Charlie.com',
                'phone'     => '09121682614',
            ],

        ];

        $data = [
            'title'     => 'Customer Accounts',
            'customers' => $customers,
        ];

        return view('customers/index', $data);
    }
}