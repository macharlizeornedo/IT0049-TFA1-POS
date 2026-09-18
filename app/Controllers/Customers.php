<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Maria Charlize G. Ornedo',
                'email'     => 'MariaCharlize.G.Ornedo@example.com',
                'phone'     => '09123456789',
            ],

            [
                'full_name' => 'Shae G. Ornedo',
                'email'     => 'Shae.G.Ornedo@example.com',
                'phone'     => '09121682611',
            ],

            [
                'full_name' => 'Kenneth G. Ornedo',
                'email'     => 'Kenneth.G.Ornedo@example.com',
                'phone'     => '09121682612',
            ],

            [
                'full_name' => 'Charlie G. Ornedo',
                'email'     => 'Charlie.G.Ornedo@example.com',
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
