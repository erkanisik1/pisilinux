<?php return
[
    /*
    |--------------------------------------------------------------------------
    | Uri
    |--------------------------------------------------------------------------
    |
    | Contains URI related settings.
    |
    | lang: Language abbreviation becomes available at URI.
    |
    */
    
    'uri' =>
    [
        'lang' => false
    ],

   /*
    |--------------------------------------------------------------------------
    | Email
    |--------------------------------------------------------------------------
    |
    | Contains settings related to Email library. 
    | 
    | driver: Email send drivers. [smtp, mail, send, pipe, imap]
    | smtp: Send settings via SMTP.
    | general: General e-mail settings.
    |
    */

    'email' =>
    [        
       'driver' => 'smtp',
       'smtp' => 
        [
            'host'          => 'smtp.yandex.com',
            'user'          => 'form@pisilinux.org',
            'password'      => 'ncgdhomqywkedjbz',
            'port'          => 587,
            'keepAlive'     => false,
            'timeout'       => 10,
            'encode'        => 'tls',   // empty, tls, ssl
            'dsn'           => false,
            'auth'          => true
        ],
        'general' =>
        [
            'senderMail'    => '',                  # Default Sender E-mail Address.
            'senderName'    => '',                  # Default Sender Name.
            'priority'      => 3,                   # 1, 2, 3, 4, 5
            'charset'       => 'UTF-8',             # Charset Type
            'contentType'   => 'html',              # plain, html
            'multiPart'     => 'mixed',             # mixed, related, alternative
            'xMailer'       => 'ZN',
            'encoding'      => '8bit',              # 8bit, 7bit
            'mimeVersion'   => '1.0',               # MIME Version
            'mailPath'      => '/usr/sbin/sendmail' # Default Mail Path
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Processor
    |--------------------------------------------------------------------------
    |
    | Contains Processor library related settings.
    |
    | driver: It is specified which function the Processor::exec() method 
    |         will use.
    |         Options: exec, shell, system, ssh
    | path: The current PHP path. Especially necessary for crontab.
    |
    */
    'processor' =>
    [
        'driver' => 'ssh',      
        'path'   => '/usr/bin/php'
    ],

    /*
    |--------------------------------------------------------------------------
    | SSH
    |--------------------------------------------------------------------------
    |
    | Includes SSH connection settings.
    |
    */

    'ssh' =>
    [
        'host'          => '31.207.86.43', 
        'user'          => 'root',  
        'password'      => '39VFYoiwt0vo',  
        'port'          => 23422, 
        'methods'       => [],  
        'callbacks'     => []  
    ],

    /*
    |--------------------------------------------------------------------------
    | FTP
    |--------------------------------------------------------------------------
    |
    | Includes FTP connection settings.
    |
    */

    'ftp' =>
    [
        'host'       => '',  
        'user'       => '',   
        'password'   => '',   
        'timeout'    => 90, 
        'port'       => 21, 
        'sslConnect' => false 
    ]
];
