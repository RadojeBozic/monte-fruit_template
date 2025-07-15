<?php

return [
    'seeders' => [
        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => 'Sadržaj stranice O nama',
                    'title'   => 'O nama',
                ],
                'contact-us' => [
                    'content' => 'Sadržaj stranice Kontakt',
                    'title'   => 'Kontakt',
                ],
                'customer-service' => [
                    'content' => 'Sadržaj stranice Korisnička podrška',
                    'title'   => 'Korisnička podrška',
                ],
                'payment-policy' => [
                    'content' => 'Sadržaj stranice Politika plaćanja',
                    'title'   => 'Politika plaćanja',
                ],
                'privacy-policy' => [
                    'content' => 'Sadržaj stranice Politika privatnosti',
                    'title'   => 'Politika privatnosti',
                ],
                'refund-policy' => [
                    'content' => 'Sadržaj stranice Politika refundacije',
                    'title'   => 'Politika refundacije',
                ],
                'return-policy' => [
                    'content' => 'Sadržaj stranice Politika povraćaja',
                    'title'   => 'Politika povraćaja',
                ],
                'shipping-policy' => [
                    'content' => 'Sadržaj stranice Politika isporuke',
                    'title'   => 'Politika isporuke',
                ],
                'terms-conditions' => [
                    'content' => 'Sadržaj stranice Uslovi i odredbe',
                    'title'   => 'Uslovi i odredbe',
                ],
                'terms-of-use' => [
                    'content' => 'Sadržaj stranice Uslovi korišćenja',
                    'title'   => 'Uslovi korišćenja',
                ],
                'whats-new' => [
                    'content' => 'Sadržaj stranice Šta je novo',
                    'title'   => 'Šta je novo',
                ],
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'title' => 'Instalacija sistema',
            'welcome-title' => 'Dobrodošli u Bagisto instalaciju',
            'installation-description' => 'Instalacija Bagisto platforme',
            'continue' => 'Nastavi',
            'create-administrator' => [
                'admin'            => 'Administrator',
                'bagisto'          => 'Bagisto',
                'confirm-password' => 'Potvrdi lozinku',
                'email'            => 'Email',
                'email-address'    => 'admin@example.com',
                'password'         => 'Lozinka',
                'title'            => 'Kreiraj administratora',
            ],
        ],

        'start' => [
            'title'         => 'Vaša Bagisto instalacija',
            'welcome-title' => 'Dobrodošli u Bagisto',
            'main'          => 'Započni',
            'select-locale' => 'Izaberi jezik',
        ],

        'installation-processing' => [
            'title'        => 'Instalacija',
            'bagisto'      => 'Instalacija Bagisto',
            'bagisto-info' => 'Kreiranje baza podataka, može potrajati nekoliko trenutaka',
        ],

        'installation-completed' => [
            'title'                      => 'Instalacija završena',
            'title-info'                 => 'Bagisto je uspešno instaliran na vašem sistemu.',
            'admin-panel'                => 'Administratorski panel',
            'customer-panel'             => 'Panel korisnika',
            'bagisto-forums'             => 'Bagisto Forum',
            'explore-bagisto-extensions' => 'Istraži Bagisto ekstenzije',
        ],

        'ready-for-installation' => [
            'title'                   => 'Spremno za instalaciju',
            'install'                 => 'Instaliraj',
            'start-installation'      => 'Počni instalaciju',
            'install-info'            => 'Bagisto za instalaciju',
            'install-info-button'     => 'Kliknite dugme ispod da',
            'create-databsae-table'   => 'Kreiraj tabele baze podataka',
            'populate-database-table' => 'Popuni tabele baze podataka',
        ],

        'server-requirements' => [
            'title'       => 'Zahtevi sistema',
            'php-version' => '8.1 ili više',
            'php'         => 'PHP',
            'pdo'         => 'PDO',
            'curl'        => 'cURL',
            'mbstring'    => 'mbstring',
            'openssl'     => 'openssl',
            'xml'         => 'XML',
            'json'        => 'JSON',
        ],
    ],
];
