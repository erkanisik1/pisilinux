<?php return
[
    /*
    |--------------------------------------------------------------------------
    | User
    |--------------------------------------------------------------------------
    |
    | Includes configurations for the User library.
    |
    | encode: When the user is registered in, the algorithm to encrypt the 
    | password is set.
    |
    | spectator: Allows navigation of other users' accounts.
    |
    | matching: It specifies which tables and columns the User class will use.
    |
    | joining: This setting is used if the users table consists of joined 
    | tables.
    |
    | emailSenderInfo: This is to specify the sender name and email 
    | information of the e-mail to be sent during the activation process or 
    | password forgotten operations.
    |
    */

    'encode'    => 'super',
    'spectator' => '',
    'matching'  =>
    [
        'table'   => 'user',
        'columns' =>
        [
            'username'     => 'name', # Required
            'password'     => 'password', # Required
            'email'        => 'mail', # Relative
            'active'       => 'status', # Relative
            'banned'       => 'banned', # Relative
            'activation'   => 'activation', # Relative
            'verification' => '', # Relative
            'otherLogin'   => ['mail']  # Relative
        ]
    ],
    'joining' =>
    [
        'column' => '',
        'tables' => []
    ],
    'emailSenderInfo' =>
    [
        'name' => '',
        'mail' => ''
    ],

    /*
    |--------------------------------------------------------------------------
    | Permission
    |--------------------------------------------------------------------------
    |
    | Includes configurations for the Permission library.
    | 
    | method : It is used to set which id value will use which method of sending.
    | page   : It is used to set which id value will use which page.
    | process: It is used to set which id value will use which object.
    |
    | Example Usage
    |
    | [
    |     '1' => 'any',
    |     '2' => ['noperm'  => ['delete', 'update']],
    |     '3' => ['perm'    => ['delete', 'update']],
    |     '4' => ['noperm'  => ['delete', 'update', 'add']],
    |     '5' => 'all'
    | ]
    |
    */

    'method'  => [],
    'page'    => [],
    'process' => []
];
