<?php

return [
   /* 'configuration' => [
        'index' => [
            'title' => 'Konfiguracija',
            'back-btn' => 'Nazad',
            'save-btn' => 'Sačuvaj podešavanja',
            'search' => 'Pretraga',

            'general' => [
                'title' => 'Opšte',
                'info' => 'Osnovna podešavanja sajta.',

                'general' => [
                    'title' => 'Opšte informacije',
                    'info' => 'Podešavanja sajta, jezika, valute i vremenske zone.',

                    'unit-options' => [
                        'title' => 'Jedinice mere',
                        'title-info' => 'Podešavanje osnovnih jedinica za dimenzije.',
                        'weight-unit' => 'Jedinica za težinu',
                        'breadcrumbs' => [
                            'title' => 'Navigacija',
                            'title-info' => 'Upravljanje prikazom navigacionih putanja.',
                            'shop' => 'Prodavnica',
                        ],
                    ],
                ],

                'content' => [
                    'title' => 'Sadržaj',
                    'info' => 'Podešavanja za prikaz sadržaja.',
                    'header-offer' => [
                        'title' => 'Promo traka',
                        'title-info' => 'Podešavanje teksta i linka u promo traci.',
                        'offer-title' => 'Naslov ponude',
                        'redirection-title' => 'Dugme (tekst)',
                        'redirection-link' => 'Link ka stranici',
                    ],
                    'speculation-rules' => [
                        'title' => 'Spekulativno učitavanje',
                        'info' => 'Optimizacija korisničkog doživljaja putem predmemorije.',
                        'settings' => [
                            'title' => 'Podešavanja',
                            'ignore-urls' => 'Ignorisane putanje (| odvojene)',
                            'ignore-urls-info' => 'Npr: account|checkout|cart',
                            'ignore-url-params' => 'Ignorisani parametri',
                            'ignore-url-params-info' => 'npr: utm_*, session_id',
                            'eagerness' => 'Agresivnost učitavanja',
                            'moderate' => 'Umereno',
                            'eagerness-info' => 'Određuje koliko unapred da se učitava.',
                        ],
                    ],
                    'custom-scripts' => [
                        'title' => 'Prilagođeni kod',
                        'title-info' => 'Dodajte dodatne JS i CSS kodove.',
                        'custom-css' => 'Prilagođeni CSS',
                        'custom-javascript' => 'Prilagođeni JavaScript',
                    ],
                ],

                'design' => [
                    'title' => 'Dizajn',
                    'info' => 'Postavljanje logotipa i drugih vizuelnih elemenata.',
                    'admin-logo' => [
                        'title' => 'Logo admin panela',
                        'logo-image' => 'Logo slika',
                        'title-info' => 'Dodaj logotip koji će se prikazivati u gornjem levom uglu admin panela.',
                    'favicon'    => 'Favicon (ikonica sajta)',
                    ],
                    
                    'menu-category' => [
                    'title'           => 'Izgled navigacije',
                    'info'            => 'Odaberi izgled admin menija.',
                    'default'         => 'Gornji meni (klasičan prikaz)',
                    'preview-default' => 'Pregled klasičnog menija',
                    'preview-sidebar' => 'Pregled bočne navigacije',
                ],
                ],

                'magic-ai' => [
                    'title' => 'AI Generator',
                    'info' => 'Uključi generisanje sadržaja pomoću veštačke inteligencije.',
                ],

                'sitemap' => [
                    'title' => 'Mapa sajta',
                    'info' => 'Generiši mapu sajta za SEO svrhe.',
                ],

                'gdpr' => [
                    'title' => 'GDPR',
                    'info' => 'Postavke privatnosti i korisničkih zahteva za podatke.',
                ],
            ],

            'catalog' => [
                'title' => 'Katalog',
                'info' => 'Postavke za proizvode i zalihe.',
                
                'products' => [
                'index' => [
                'title'      => 'Proizvodi',
                'create-btn' => 'Kreiraj proizvod',

                'datagrid' => [
                    'id'                     => 'ID',
                    'name'                   => 'Naziv',
                    'sku'                    => 'SKU',
                    'type'                   => 'Tip',
                    'attribute-family'       => 'Porodica atributa',
                    'status'                 => 'Status',
                    'price'                  => 'Cena',
                    'quantity'               => 'Količina',
                    'image'                  => 'Slika',
                    'created-at'             => 'Kreirano',
                    'mass-update-success'    => 'Odabrani proizvodi su uspešno izmenjeni',
                    'mass-delete-success'    => 'Odabrani proizvodi su uspešno obrisani',
                    'active'                 => 'Aktivan',
                    'inactive'               => 'Neaktivan',
                    'copy-of'                => 'Kopija :value',
                    'delete'                 => 'Obriši',
                    'edit'                   => 'Izmeni',
                ],
            ],

            'create' => [
                'title'       => 'Kreiraj novi proizvod',
                'back-btn'    => 'Nazad',
                'save-btn'    => 'Sačuvaj proizvod',
                'sku'         => 'SKU',
                'type'        => 'Tip proizvoda',
                'family'      => 'Porodica atributa',
                'general'     => 'Opšte',
                'price'       => 'Cena',
                'inventories' => 'Zalihe',
                'images'      => 'Slike',
                'categories'  => 'Kategorije',
                'channels'    => 'Kanali',
                'description' => 'Opis',
            ],

            'edit' => [
                'title'    => 'Izmeni proizvod',
                'save-btn' => 'Sačuvaj izmene',
            ],

            'create-success' => 'Proizvod je uspešno kreiran',
            'update-success' => 'Proizvod je uspešno izmenjen',
            'delete-success' => 'Proizvod je uspešno obrisan',
            'delete-failed'  => 'Brisanje proizvoda nije uspelo',
        ],
        'title' => 'Prikaz proizvoda',
        'info' => 'Odaberite način prikaza proizvoda.',

        'categories' => [
            'index' => [
                'title'     => 'Kategorije',
                'add-btn'   => 'Kreiraj kategoriju',

                'datagrid' => [
                    'id'             => 'ID',
                    'name'           => 'Naziv',
                    'position'       => 'Pozicija',
                    'status'         => 'Vidljivo u meniju',
                    'no-of-products' => 'Broj proizvoda',
                    'edit'           => 'Izmeni',
                    'delete'         => 'Obriši',
                    'update-status'  => 'Ažuriraj status',
                ],
            ],

            'create' => [
                'title'             => 'Kreiraj novu kategoriju',
                'name'              => 'Naziv',
                'visible-in-menu'   => 'Vidljivo u meniju',
                'description'       => 'Opis',
                'position'          => 'Pozicija',
                'display-mode'      => 'Način prikaza',
                'products-only'     => 'Samo proizvodi',
                'description-only'  => 'Samo opis',
                'both'              => 'Oboje',
                'meta-title'        => 'Meta naslov',
                'meta-description'  => 'Meta opis',
                'meta-keywords'     => 'Meta ključne reči',
                'save-btn'          => 'Sačuvaj kategoriju',
                'add-logo'          => 'Dodaj logo',
                'add-banner'        => 'Dodaj baner',
            ],

            'edit' => [
                'title' => 'Izmeni kategoriju',
            ],

            'create-success' => 'Kategorija je uspešno kreirana',
            'update-success' => 'Kategorija je uspešno izmenjena',
            'delete-success' => 'Kategorija je uspešno obrisana',
            'delete-failed'  => 'Brisanje kategorije nije uspelo',
        ],
                'rich-snippets' => [
                    'title' => 'Rich Snippets',
                    'info' => 'Strukturalni podaci za SEO.',
                ],
                'inventory' => [
                    'title' => 'Zalihe',
                    'title-info' => 'Pravila za upravljanje zalihama.',
                ],
            ],

            'customer' => [
                'title' => 'Korisnici',
                'info' => 'Postavke za korisničke naloge.',
                'address' => [
                    'title' => 'Adrese',
                    'info' => 'Dozvoljene zemlje, stanja i obavezna polja.',
                ],
                'captcha' => [
                    'title' => 'Captcha',
                    'info' => 'Podešavanje sigurnosne provere (Google reCAPTCHA).',
                ],
                'settings' => [
                    'title' => 'Podešavanja',
                    'settings-info' => 'Aktiviraj registraciju, verifikaciju i prijavu.',
                ],
            ],

            'email' => [
                'title' => 'Email',
                'info' => 'Postavke za slanje i primanje email poruka.',
                'email-settings' => [
                    'title' => 'Email podešavanja',
                    'info' => 'Konfiguriši SMTP server i pošiljaoca.',
                ],
                'notifications' => [
                    'title' => 'Notifikacije',
                    'info' => 'Email obaveštenja za korisnike i administratore.',
                ],
            ],

            'sales' => [
                'title' => 'Prodaja',
                'info' => 'Postavke za isporuke, plaćanja, poreze...',
                'shipping-setting' => [
                    'title' => 'Podešavanje isporuke',
                    'info' => 'Dodavanje kurira i cena isporuke.',
                ],
                'shipping-methods' => [
                    'title' => 'Načini isporuke',
                    'info' => 'Upravljanje dostupnim opcijama isporuke.',
                ],
                'payment-methods' => [
                    'page-title' => 'Načini plaćanja',
                    'info' => 'Konfiguracija dostupnih metoda plaćanja.',
                ],
                'order-settings' => [
                    'title' => 'Podešavanja porudžbina',
                    'info' => 'Podešavanja brojeva i prefiksa.',
                ],
                'invoice-settings' => [
                    'title' => 'Podešavanja faktura',
                    'info' => 'Automatska generacija faktura i pravila.',
                ],
                'taxes' => [
                    'title' => 'Porezi',
                    'title-info' => 'Poreske klase, zone i pravila.',
                ],
                'checkout' => [
                    'title' => 'Plaćanje',
                    'info' => 'Opcije vezane za checkout proces.',
                ],
            ],
        ],
      
], */
 
];

