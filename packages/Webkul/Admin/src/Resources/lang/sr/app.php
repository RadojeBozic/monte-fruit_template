<?php

return [
    'validations' => [
        'product-quantity' => 'Količina proizvoda mora biti veća od nule.',
        'product-sku'      => 'SKU proizvoda je obavezan.',
        'product-name'     => 'Naziv proizvoda je obavezan.',
        'slug-being-used' => 'Slug već postoji. Molimo izaberite drugi.',
    ],
    'users' => [
        'sessions' => [
            'title' => 'Prijava administratora',
            'email' => 'Email adresa',
            'password' => 'Lozinka',
            'forget-password-link' => 'Zaboravljena lozinka?',
            'submit-btn' => 'Prijavi se',
            'powered-by-description' => 'Pokreće :bagisto, open-source projekat kompanije :webkul.',
        ],
        'forget-password' => [
            'create' => [
                'email' => 'Registrovana email adresa',
                'email-not-exist' => 'Email ne postoji',
                'page-title' => 'Zaboravljena lozinka',
                'powered-by-description' => 'Pokreće :bagisto, open-source projekat kompanije :webkul.',
                'reset-link-sent' => 'Link za resetovanje poslat',
                'sign-in-link' => 'Povratak na prijavu',
                'submit-btn' => 'Pošalji',
                'title' => 'Obnovi lozinku',
            ],
        ],
        'reset-password' => [
            'title' => 'Resetuj lozinku',
            'email' => 'Registrovana email adresa',
            'password' => 'Nova lozinka',
            'confirm-password' => 'Potvrdi lozinku',
            'submit-btn' => 'Resetuj',
            'back-link-title' => 'Povratak na prijavu',
            'powered-by-description' => 'Pokreće :bagisto, open-source projekat kompanije :webkul.',
        ],
    ],

    'dashboard' => [
        'index' => [
            'title' => 'Kontrolna tabla',
            'user-name' => 'Zdravo, :user_name!',
            'user-info' => 'Pregled aktivnosti u tvojoj prodavnici',
            'overall-details' => 'Opšti podaci',
            'total-sales' => 'Ukupna prodaja',
            'total-orders' => 'Ukupno porudžbina',
            'total-customers' => 'Ukupno kupaca',
            'average-sale' => 'Prosečna vrednost porudžbine',
            'total-unpaid-invoices' => 'Neplaćene fakture',
            'today-details' => 'Danas',
            'today-sales' => 'Današnja prodaja',
            'today-orders' => 'Današnje porudžbine',
            'today-customers' => 'Današnji kupci',
            'stock-threshold' => 'Zalihe na minimumu',
            'empty-threshold' => 'Proizvodi bez zaliha',
            'empty-threshold-description' => 'Nema dostupnih proizvoda',
            'store-stats' => 'Statistika prodavnice',
            'order' => 'porudžbina',
            'visitors' => 'Posetioci',
            'unique-visitors' => 'Jedinstveni posetioci',
            'top-selling-products' => 'Najprodavaniji proizvodi',
            'add-product' => 'Dodaj proizvod',
            'product-info' => 'Dodaj proizvode brzo i jednostavno',
            'customer-with-most-sales' => 'Kupac sa najviše porudžbina',
            'add-customer' => 'Dodaj kupca',
            'customer-info' => 'Nema kupaca sa prodajom',
        ],
    ],

    'notifications' => [
        'title' => 'Obaveštenja',
        'description-text' => 'Lista svih obaveštenja',
        'read-all' => 'Označi sve kao pročitano',
        'marked-success' => 'Sve obaveštenja označena kao pročitana',
        'no-record' => 'Nema obaveštenja',
        'view-all' => 'Prikaži sve',
        'of' => 'od',
        'per-page' => 'po stranici',
    ],

    'account' => [
        'edit' => [
            'title' => 'Moj nalog',
            'name' => 'Ime',
            'email' => 'Email',
            'password' => 'Lozinka',
            'confirm-password' => 'Potvrdi lozinku',
            'current-password' => 'Trenutna lozinka',
            'change-password' => 'Promeni lozinku',
            'profile-image' => 'Profilna slika',
            'save-btn' => 'Sačuvaj',
            'back-btn' => 'Nazad',
            'invalid-password' => 'Uneli ste pogrešnu lozinku.',
            'update-success' => 'Nalog uspešno ažuriran',
            'upload-image-info' => 'Dodaj profilnu sliku (110x110px PNG/JPG)',
            'general' => 'Opšte',
        ],
    ],
    'components' => [
        'layouts' => [
            'sidebar' => [
                'dashboard' => 'Kontrolna tabla',
                'sales' => 'Prodaja',
                'catalog' => 'Katalog',
                'cms' => 'CMS',
                'marketing' => 'Marketing',
                'reporting' => 'Izveštaji',
                'settings' => 'Podešavanja',
                'configure' => 'Konfiguriši',
                'locales' => 'Jezici',
                'currencies' => 'Valute',
                'exchange-rates' => 'Kursne liste',
                'inventory-sources' => 'Izvori zaliha',
                'channels' => 'Kanali',
                'users' => 'Korisnici',
                'roles' => 'Uloge',
                'themes' => 'Teme',
                'taxes' => 'Porezi',
                'data-transfer' => 'Prenos podataka',
                'products' => 'Proizvodi',
                'categories' => 'Kategorije',
                'attributes' => 'Atributi',
                'attribute-families' => 'Porodice atributa',
                'groups' => 'Grupe',
                'reviews' => 'Recenzije',
                'gdpr-data-requests' => 'GDPR Zahtevi',
                'customers' => 'Kupci',
                'promotions' => 'Promocije',
                'communications' => 'Komunikacije',
                'search-seo' => 'Pretraga i SEO',
                'orders' => 'Porudžbine',
                'shipments' => 'Isporuke',
                'invoices' => 'Fakture',
                'refunds' => 'Povraćaji',
                'transactions' => 'Transakcije',
                'booking-product' => 'Rezervacije',
            ],

            'header' => [
                'mega-search' => [
                    'title' => 'Pretraga...'
                ],
            ],

            'powered-by' => [
                'description' => 'Pokreće Bagisto – otvoreni e-commerce sistem'
            ],
        ],

        'datagrid' => [
            'toolbar' => [
                'results' => 'Rezultati',
                'per-page' => 'Po stranici',
                'of' => 'od',
                'search' => [
                    'title' => 'Pretraži...'
                ],
            ],

            'table' => [
                'no-records-available' => 'Nema dostupnih zapisa',
                'actions' => 'Akcije',
            ],
            'filters' => [
                'custom-filters' => [
                'clear-all'  => 'Obriši sve',
                'select' => 'Izaberi',
            ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn' => 'Dodaj sliku',
                'allowed-types' => 'Dozvoljeni formati: png, jpeg, webp...'
            ],
        ],

        'tinymce' => [
            'ai-btn-tile' => 'Generiši AI sadržaj'
        ],
    ],

    'export' => [
        'export' => 'Izvezi'
    ],

   

    'home' => [
        'contact' => [
            'title' => 'Kontaktirajte nas',
            'about' => 'Imate pitanja? Pošaljite nam poruku.',
            'name' => 'Vaše ime',
            'email' => 'Vaš email',
            'phone-number' => 'Broj telefona',
            'desc' => 'Poruka',
            'describe-here' => 'Opišite ovde...',
            'submit' => 'Pošalji poruku'
        ]
    ],
    'sales' => [
    'orders' => [
        'index' => [
            'title' => 'Porudžbine',
            'create-btn' => 'Kreiraj porudžbinu',

            'search-customer' => [
                'title' => 'Izaberi kupca',
                'search-by' => 'Pretraga po emailu ili imenu',
                'empty-title' => 'Kupac nije pronađen',
                'empty-info' => 'Nema dostupnih kupaca za taj pojam.',
                'create-btn' => 'Kreiraj kupca',
            ],

            'datagrid' => [
                'id' => 'ID',
                'order-id' => 'ID porudžbine',
                'status' => 'Status',
                'customer' => 'Kupac',
                'email' => 'Email',
                'channel-name' => 'Kanal',
                'grand-total' => 'Ukupno',
                'date' => 'Datum',
                'view' => 'Pregled',
                'pending' => 'Na čekanju',
                'pending-payment' => 'Čeka se uplata',
                'processing' => 'U obradi',
                'completed' => 'Završeno',
                'canceled' => 'Otkazano',
                'closed' => 'Zatvoreno',
                'fraud' => 'Prevara',
                'pay-by' => 'Način plaćanja - :method',
                'items' => 'Artikli',
                'location' => 'Lokacija',
            ],
        ],

        'create' => [
            'title' => 'Kreiraj porudžbinu za :name',
            'back-btn' => 'Nazad',
            'save-btn' => 'Kreiraj porudžbinu',
            'configuration' => 'Podešavanje',
            'address' => [
                'title' => 'Adresa',
                'billing-address' => 'Adresa za račun',
                'shipping-address' => 'Adresa za isporuku',
                'add-btn' => 'Dodaj adresu',
                'edit-btn' => 'Izmeni adresu',
                'same-as-billing' => 'Ista kao adresa za račun?',
            ],
            'shipping' => [
                'title' => 'Način isporuke',
            ],
            'payment' => [
                'title' => 'Način plaćanja',
            ],
            'summary' => [
                'title' => 'Rezime porudžbine',
                'sub-total' => 'Međuzbir',
                'shipping-amount' => 'Cena isporuke',
                'discount-amount' => 'Iznos popusta',
                'tax' => 'Porez',
                'grand-total' => 'Ukupno',
                'place-order' => 'Potvrdi porudžbinu',
                'coupon-applied' => 'Kupon primenjen',
                'coupon-remove' => 'Ukloni kupon',
                'enter-your-code' => 'Unesite kod',
                'apply-coupon' => 'Primeni kupon',
                'processing' => 'Obrada...',
            ],
            'error' => [
                'coupon' => 'Kupon nije moguće primeniti',
                'minimum-order' => 'Minimalna vrednost porudžbine nije ispunjena.',
                'no-products' => 'Nema proizvoda u korpi.',
                'missing-shipping' => 'Nije izabran način isporuke.',
                'missing-payment' => 'Nije izabran način plaćanja.',
            ],
            'success' => 'Porudžbina uspešno kreirana.',
        ],
    ],
],
'catalog' => [

        'categories' => [
            'create' => [
                'title'                       => 'Kreiraj kategoriju',
                'back-btn'                    => 'Nazad',
                'save-btn'                    => 'Sačuvaj kategoriju',
                'general'                     => 'Opšte',
                'name'                        => 'Naziv',
                'name is not valid'           => 'Naziv nije validan',
                'parent-category'             => 'Nadređena kategorija',
                'description-and-images'      => 'Opis i slike',
                'description'                 => 'Opis',
                'description is not valid'    => 'Opis nije validan',
                'logo'                        => 'Logo',
                'logo-size'                   => 'Optimalna veličina 110x110',
                'banner'                      => 'Baner',
                'banner-size'                 => 'Optimalna veličina 1920x400',
                'seo-details'                 => 'SEO detalji',
                'meta-title'                  => 'Meta naslov',
                'slug'                        => 'Slug (URL ključ)',
                'slug is not valid'           => 'Slug nije validan',
                'meta-keywords'               => 'Meta ključne reči',
                'meta-description'            => 'Meta opis',
                'settings'                    => 'Podešavanja',
                'position'                    => 'Pozicija',
                'position is not valid'       => 'Pozicija nije validna',
                'display-mode'                => 'Režim prikaza',
                'products-and-description'    => 'Proizvodi i opis',
                'products-only'               => 'Samo proizvodi',
                'description-only'            => 'Samo opis',
                'visible-in-menu'             => 'Vidljivo u meniju',
                'filterable-attributes'       => 'Atributi za filtriranje',
                'filterable-attributes is not valid' => 'Atributi za filtriranje nisu validni',
                'enter-position'            => 'Unesite poziciju',
            ],
        ],
        'products' => [
          
            'index' => [
                'create' => [
                    
                   /*  'type'               => [
                        'simple' => 'Jednostavni proizvod',
                        'configurable' => 'Konfigurisani proizvod',
                        'downloadable' => 'Proizvod za preuzimanje',
                        'booking' => 'Rezervacija',
                        'virtual' => 'Virtuelni proizvod',
                        'bundle' => 'Paket proizvoda',
                        'grouped' => 'Grupisani proizvod',
                    ], */
                    
                    'type'               => 'Tip proizvoda',
                    'title'              => 'Kreiraj novi proizvod',
                    'type is not valid'  => 'Odabrani tip proizvoda nije validan',
                    'family'             => 'Porodica atributa',
                    'family is not valid'=> 'Odabrana porodica atributa nije validna',
                    'sku'                => 'SKU (šifra proizvoda)',
                    'sku is not valid'   => 'SKU nije validan ili je već u upotrebi',
                    'save-btn'           => 'Sačuvaj proizvod',
                ],
                'datagrid' => [
                    'id' => 'ID',
                    'name' => 'Naziv',
                    'status' => 'Status',
                    'type' => 'Tip',
                    'price' => 'Cena',
                    'qty' => 'Količina',
                    'created-at' => 'Datum kreiranja',
                    'edit' => 'Izmeni',
                    'delete' => 'Izbriši',
                    'mass-delete-success' => ' izbrisan uspešno.',
                ],
            ],
            'edit' => [
                'types' => [
                    'configurable' => [
                        'title'        => 'Konfigurisivi proizvod',
                        'info'         => 'Izaberite opcije za konfigurisivi proizvod.',
                        'add-btn' => 'Dodaj opciju',
                        'delete-btn' => 'Izbriši opciju',
                        'edit-btn' => 'Izmeni opciju',
                        'sku' => 'SKU (šifra proizvoda)',
                        'qty' => 'Količina',
                        'image-placeholder' => 'Dodaj sliku',
                        'mass-edit' => [
                            'select-variants' => 'Izaberi varijante',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'attributes' => [
        'create' => [
            'title' => 'Kreiraj atribut',
            
        ],
    ],
    'export' => [
        'export' => 'Izvezi',
        'download' => 'Preuzmi',
        'csv' => 'CSV',
        'xlsx' => 'XLSX',
        'xls' => 'XLS',
       
    ],
    'customers' => [
        'groups' => [
            'index' => [
                'create' => [
                    'title' => 'Kreiraj grupu kupaca',
                    'name' => 'Naziv grupe',
                    'code' => 'Kod grupe',
                    'save-btn' => 'Sačuvaj grupu',
                    'name is not valid' => 'Naziv grupe nije validan',
                    'code is not valid' => 'Kod grupe nije validan',
                ],
            ], 
        ],
    ],
    'cms' => [
        'update-success' => 'Stranica uspešno ažurirana',
        'create-success' => 'Stranica uspešno kreirana',
        'delete-success' => 'Stranica uspešno obrisana',
        'create' => [
        'title'                  => 'Kreiraj CMS stranicu',
        'save-btn'               => 'Sačuvaj stranicu',
        'description'            => 'Opis stranice',
        'content'                => 'Sadržaj stranice',
        'content is not valid'   => 'Sadržaj stranice nije validan',
        'seo'                    => 'SEO podešavanja',
        'meta-title'             => 'Meta naslov',
        'url-key'                => 'URL ključ',
        'url-key is not valid'   => 'URL ključ nije validan',
        'meta-keywords'          => 'Meta ključne reči',
        'meta-description'       => 'Meta opis',
        'page-title'             => 'Naslov stranice',
        'page-title is not valid'=> 'Naslov stranice nije validan',
    ],

    ],
    
'marketing' => [
    'promotions' => [
        'catalog-rules' => [
            'create' => [
                'attribute-family'                => 'Porodica atributa',
                'categories'                      => 'Kategorije',
                'attribute-familySKU'             => 'SKU (šifra proizvoda)',
                'choose-condition-to-add'         => 'Izaberite uslov za dodavanje',
                'product-attribute'               => 'Atribut proizvoda',
                'is-equal-to'                     => 'Jednako',
                'is-not-equal-to'                 => 'Nije jednako',
                
            ],
        ],

        'cart-rules' => [
            'create' => [
                'choose-condition-to-add'              => 'Izaberite uslov za dodavanje',
                'subtotal'                             => 'Međuzbir',
                'total-items-qty'                      => 'Ukupna količina proizvoda',
                'payment-method'                       => 'Način plaćanja',
                'shipping-method'                      => 'Način isporuke',
                'shipping-postcode'                    => 'Poštanski broj za isporuku',
                'shipping-state'                       => 'Država za isporuku',
                'shipping-country'                     => 'Zemlja za isporuku',
                'price-in-cart'                        => 'Cena u korpi',
                'qty-in-cart'                          => 'Količina u korpi',
                'total-weight'                         => 'Ukupna težina',
                'additional'                           => 'Dodatno',
                'categories'                           => 'Kategorije',
                'children-categories'                  => 'Podkategorije',
                'parent-categories'                    => 'Nadređene kategorije',
                'cart-attribute'                        => 'Atribut korpe',
                'cart-item-attribute'                   => 'Atribut artikla u korpi',
                'product-attribute'                     => 'Atribut proizvoda',

                'attribute-familySKU'                  => 'SKU (šifra proizvoda)',
                'attribute-name-children-only'         => 'Samo za podkategorije',
                'attribute-name-parent-only'           => 'Samo za nadređene kategorije',

                // Specifični atributi
                'Naziv'                                => 'Naziv',
                'URL Ključ'                            => 'URL Ključ',
                'Poreska kategorija'                   => 'Poreska kategorija',
                'Novo'                                 => 'Novo',
                'Istaknuto'                            => 'Istaknuto',
                'Vidljivo pojedinačno'                 => 'Vidljivo pojedinačno',
                'Status'                               => 'Status',
                'Cena'                                 => 'Cena',
                'Trošak'                               => 'Trošak',
                'Akcijska cena'                        => 'Akcijska cena',
                'Akcijska cena od'                     => 'Akcijska cena od',
                'Akcijska cena do'                     => 'Akcijska cena do',
                'Dužina'                               => 'Dužina',
                'Širina'                               => 'Širina',
                'Visina'                               => 'Visina',
                'Težina'                               => 'Težina',
                'Boja'                                 => 'Boja',
                'Veličina'                             => 'Veličina',
                'Brend'                                => 'Brend',
                'Kupovina kao gost'                    => 'Kupovina kao gost',
                'Broj proizvoda'                       => 'Broj proizvoda',
                'Upravljanje zalihama'                 => 'Upravljanje zalihama',

                // Operator uslova
                'is-equal-to'                          => 'Jednako',
                'is-not-equal-to'                      => 'Nije jednako',
                'equals-or-greater-than'               => 'Jednako ili veće od',
                'equals-or-less-than'                  => 'Jednako ili manje od',
                'greater-than'                         => 'Veće od',
                'less-than'                            => 'Manje od',
            ],
        ],
    ],
    'communications' => [
        'events' => [
            'index' => [
                'create' => [
                    'title'                     => 'Kreiraj događaj',
                    'name'                      => 'Naziv događaja',
                    'name is not valid'         => 'Naziv događaja nije validan',
                    'description'               => 'Opis događaja',
                    'description is not valid'  => 'Opis događaja nije validan',
                    'date'                      => 'Datum događaja',
                    'date is not valid'         => 'Datum nije validan',
                    'save-btn'                  => 'Sačuvaj događaj',
                ],
            ],
        ],

        'campaigns' => [
            'index' => [
                'title'         => 'Marketinške kampanje',
                'create-btn'    => 'Kreiraj kampanju',

                'datagrid' => [
                    'id'        => 'ID',
                    'name'      => 'Naziv kampanje',
                    'subject'   => 'Tema kampanje',
                    'status'    => 'Status kampanje',
                ],
            ],
        ],

        'subscribers' => [
            'index' => [
                'edit' => [
                    'save-btn' => 'Sačuvaj izmene',
                ],
            ],
        ],
    ],
],

'reporting' => [
    'sales' => [
        'index' => [
            'id'                 => 'ID',
            'name'               => 'Naziv',
            'count'              => 'Broj',
            'payment-method'     => 'Metod plaćanja',
        ],
    ],

    'customers' => [
        'index' => [
            'interval'           => 'Interval',
            'total'              => 'Ukupno',
            'reviews'            => 'Recenzije',
        ],
    ],

    'products' => [
        'index' => [
            'quantities'         => 'Količine',
            'id'                 => 'ID',
            'name'               => 'Naziv proizvoda',
            'price'              => 'Cena',
            'revenue'            => 'Prihod',
            'search-term'        => 'Termin pretrage',
            'results'            => 'Rezultati',
            'uses'               => 'Korišćenja',
            'channel'            => 'Kanal',
            'locale'             => 'Jezik',
            'reviews'            => 'Recenzije',
        ],
    ],

    'view' => [
        'not-available'          => 'Nije dostupno',
        'export-csv'             => 'Izvezi u CSV',
        'export-xls'             => 'Izvezi u XLS',
    ],
],
'setings' => [
     'roles' => [
        'index' => [
            'title'      => 'Uloge',
            'create-btn' => 'Dodaj ulogu',

            'datagrid' => [
                'id'              => 'ID',
                'name'            => 'Naziv uloge',
                'permission-type' => 'Tip dozvole',
            ],
        ],

        'create' => [
            'title'          => 'Kreiraj novu ulogu',
            'back-btn'       => 'Nazad',
            'save-btn'       => 'Sačuvaj ulogu',
            'access-control' => 'Kontrola pristupa',
            'permissions'    => 'Dozvole',
            'custom'         => 'Prilagođene',
            'all'            => 'Sve',
            'name'           => 'Naziv uloge',
            'general'             => 'Opšte',
            'name'                => 'Naziv uloge',
            'name is not valid'   => 'Naziv uloge nije validan',
            'description'         => 'Opis',
            'description is not valid' => 'Opis nije validan',

            'general' => [
                'name'        => 'Naziv uloge',
                'description' => 'Opis',
            ],
        ],

   'edit' => [
        'title'          => 'Izmeni ulogu',
        'back-btn'       => 'Nazad',
        'save-btn'       => 'Sačuvaj izmene',
        'access-control' => 'Kontrola pristupa',
        'permissions'    => 'Dozvole',
        'custom'         => 'Prilagođene',
        'all'            => 'Sve',
        'name'           => 'Naziv uloge',
        'description'    => 'Opis',
        'general'           => 'Geralno',
         
    ],
    ],
    'currencies' => [
                'index' => [
                    'create' => [
                        'title' => 'Kreiraj novu valutu',
                    ],
                ],
            ],

            'channels' => [
                'create' => [
                    'hostname-placeholder' => 'https://example.com (unesite svoj domen)',
                ],
            ],
    'themes' => [
    'edit' => [
        'services-content' => [
            'service-icon' => [
                'icon-truck'        => 'Ikona kamiona',
                'icon-product'      => 'Ikona proizvoda',
                'icon-dollar-sign'  => 'Ikona dolara',
                'icon-support'      => 'Ikona podrške',
            ],
        ],

        'slider'              => 'Slajder',
        'slider-description'  => 'Podesite slike za slajder na početnoj stranici.',
        'slider-add-btn'      => 'Dodaj sliku slajdera',
        'image-title'         => 'Naslov slike',
        'link'                => 'Link',
        'image'               => 'Slika',
    ],
],
],
    'customers' => [
        'customers' => [
            'view' => [
                'notes' => [
                    'note is not valid' => 'Beleška nije validna',
                ],
            ],
        ],
    ],
'configuration' => [
            'index' => [
                'sales' => [
                'order-settings' => [
                    'minimum-order' => [
                        'minimum-order-amount'     => 'Minimalan iznos porudžbine',
                        'include-discount-amount'  => 'Uključi iznos popusta',
                        'include-tax-amount'       => 'Uključi iznos poreza',
                        'description'              => 'Ovde možete podesiti minimalni iznos porudžbine koji je neophodan za uspešno kreiranje narudžbine. Po želji, možete uključiti i iznos popusta i/ili poreza u izračunavanje minimalnog iznosa.',
                    ],
                ],
                'payment-methods'   => [
                'set-invoice-status'           => 'Podesi status fakture',
                'set-invoice-status is not valid' => 'Status fakture nije validan',
                'paid' => 'Plaćeno',
                'unpaid' => 'Neplaćeno',
            ],
            ],
        ],
],
 'checkout' => [
        'cart' => [
            'success-remove' => 'Proizvod je uspešno uklonjen iz vaše korpe.',
        ],
    ],
];
