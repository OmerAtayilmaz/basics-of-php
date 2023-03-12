<?php
return [
    'database' =>  [
        'host' => 'localhost',
        'dbname' => 'test',
        'port' => 3306,
        'charset' => 'utf8mb4'
    ],
    'services' => [
        'mail' => [
            'host' => 'smtp.mailtrap.io',
            'port' => 2525,
            'username' => 'your_username',
            'password' => 'your_password'
        ],
         'google' => [
            'client_id' => 'your_client_id',
            'client_secret' => 'your_client_secret',
            'redirect_uri' => 'your_redirect_uri'
        ]
    ]
];