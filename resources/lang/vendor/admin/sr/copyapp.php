<?php

/* return [
    'dashboard' => [
    'index' => [
        'user-name'                     => 'Zdravo, :user_name!',
        'user-info'                     => 'Brzi pregled prodavnice',
        'overall-details'              => 'Ukupni podaci',
        'total-sales'                  => 'Ukupna prodaja',
        'total-orders'                 => 'Ukupno porudžbina',
        'total-customers'              => 'Ukupno kupaca',
        'average-sale'                 => 'Prosečna vrednost porudžbine',
        'total-unpaid-invoices'        => 'Neplaćene fakture',
        'today-details'                => 'Današnji pregled',
        'today-sales'                  => 'Današnja prodaja',
        'today-orders'                 => 'Današnje porudžbine',
        'today-customers'              => 'Današnji kupci',
        'stock-threshold'              => 'Granica zaliha',
        'empty-threshold'              => 'Prazne zalihe',
        'empty-threshold-description'  => 'Trenutno nema dostupnih proizvoda',
        'store-stats'                  => 'Statistika prodavnice',
        'order'                        => ':total_orders porudžbina',
        'visitors'                     => 'Posetioci',
        'unique-visitors'             => ':count jedinstvenih',
        'top-selling-products'         => 'Najprodavaniji proizvodi',
        'add-product'                  => 'Dodaj proizvod',
        'product-info'                 => 'Dodaj povezane proizvode u hodu',
        'customer-with-most-sales'     => 'Kupac sa najviše kupovina',
        'add-customer'                 => 'Dodaj kupca',
        'customer-info'                => 'Nema kupaca sa zabeleženom prodajom',
    ],
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

    'settings' => [
        'themes' => [
            'edit' => [
                'footer-link'             => 'Linkovi u podnožju',
                'footer-link-description' => 'Dodajte ili uredite linkove koji će biti prikazani u podnožju sajta.',
                'add-link'                => 'Dodaj link',
                'edit'                    => 'Izmeni',
                'delete'                  => 'Obriši',
                'footer-link-form-title'  => 'Forma za dodavanje linka',
                'footer-title'            => 'Naslov linka',
                'url'                     => 'URL adresa',
                'column'                  => 'Kolona',
                'sort-order'              => 'Redosled prikaza',
                'save-btn'                => 'Sačuvaj',
                'filter-title'            => 'Naslov',
            ],
        ],
    ],
    'shipments' => [
    'index' => [
        'title' => 'Isporuke',

        'datagrid' => [
            'id'               => 'ID',
            'order-id'         => 'ID porudžbine',
            'order-date'       => 'Datum porudžbine',
            'shipment-date'    => 'Datum isporuke',
            'shipment-to'      => 'Isporuka za',
            'total-qty'        => 'Ukupna količina',
            'inventory-source' => 'Izvor zaliha',
            'view'             => 'Pregled',
        ],
    ],

    'create' => [
        'title'             => 'Kreiraj novu isporuku',
        'create-btn'        => 'Kreiraj isporuku',
        'carrier-name'      => 'Ime kurirske službe',
        'tracking-number'   => 'Broj za praćenje',
        'source'            => 'Izvor',
        'sku'               => 'SKU - :sku',
        'qty-to-ship'       => 'Količina za isporuku',
        'qty-available'     => 'Dostupna količina',
        'qty-invalid'       => 'Neispravna količina',
        'success'           => 'Isporuka uspešno kreirana.',
        'order-error'       => 'Isporuka nije validna za ovu porudžbinu.',
        'creation-error'    => 'Došlo je do greške prilikom kreiranja isporuke.',
        'cancel-error'      => 'Porudžbina ne može biti otkazana.',
        'item-ordered'      => 'Poručeno (:qty_ordered)',
        'item-shipped'      => 'Isporučeno (:qty_shipped)',
        'item-invoice'      => 'Fakturisano (:qty_invoiced)',
        'item-refunded'     => 'Vraćeno (:qty_refunded)',
        'item-canceled'     => 'Otkazano (:qty_canceled)',
        'amount-per-unit'   => ':amount po jedinici × :qty kom',
        'per-unit'          => 'Po jedinici',
    ],

    'view' => [
        'title'               => 'Isporuka #:shipment_id',
        'order-id'            => 'ID porudžbine',
        'order-date'          => 'Datum porudžbine',
        'channel'             => 'Kanal',
        'customer'            => 'Kupac',
        'email'               => 'Email - :email',
        'inventory-source'    => 'Izvor zaliha',
        'carrier-title'       => 'Kurirska služba',
        'tracking-number'     => 'Broj za praćenje',
        'order-status'        => 'Status porudžbine',
        'payment-method'      => 'Način plaćanja',
        'shipping-method'     => 'Način isporuke',
        'currency'            => 'Valuta',
        'shipping-address'    => 'Adresa za isporuku',
        'billing-address'     => 'Adresa za račun',
        'ordered-items'       => 'Poručeni artikli',
        'product-image'       => 'Slika proizvoda',
        'qty'                 => 'Količina - :qty',
        'sku'                 => 'SKU - :sku',
    ],
],
'sales' => [
    'orders' => [
        'index' => [
            'title' => 'Porudžbine',
            'create-btn' => 'Kreiraj porudžbinu',
            'search-customer' => [
                'title' => 'Izaberi kupca',
                'search-by' => 'Pretraga po imenu ili emailu',
                'empty-title' => 'Nema rezultata',
                'empty-info' => 'Nema kupaca za uneti pojam',
                'create-btn' => 'Dodaj kupca',
            ],
            'datagrid' => [
                'id' => 'ID',
                'order-id' => 'ID porudžbine',
                'status' => 'Status',
                'date' => 'Datum',
                'email' => 'Email',
                'customer' => 'Kupac',
                'channel-name' => 'Kanal',
                'grand-total' => 'Ukupan iznos',
                'view' => 'Prikaži',
                'canceled' => 'Otkazano',
                'closed' => 'Zatvoreno',
                'completed' => 'Završeno',
                'pending' => 'Na čekanju',
                'pending-payment' => 'Čeka se uplata',
                'processing' => 'U obradi',
                'fraud' => 'Sumnjivo',
            ],
        ],
    ],

    'invoices' => [
        'index' => [
            'title' => 'Fakture',
            'datagrid' => [
                'id' => 'ID',
                'invoice-date' => 'Datum fakture',
                'order-id' => 'ID porudžbine',
                'grand-total' => 'Ukupan iznos',
                'status' => 'Status',
                'paid' => 'Plaćeno',
                'pending' => 'Na čekanju',
                'overdue' => 'Prekoračeno',
                'days-overdue' => ':count dana prekoračenja',
                'days-left' => ':count dana pre roka',
                'view' => 'Prikaži',
            ],
        ],
    ],

    'refunds' => [
        'index' => [
            'title' => 'Povraćaji',
            'datagrid' => [
                'id' => 'ID',
                'order-id' => 'ID porudžbine',
                'refund-date' => 'Datum povraćaja',
                'refunded-amount' => 'Vraćeni iznos',
                'billed-to' => 'Naplata za',
                'view' => 'Prikaži',
            ],
        ],
    ],

    'transactions' => [
        'index' => [
            'title' => 'Transakcije',
            'create-btn' => 'Kreiraj transakciju',
            'datagrid' => [
                'id' => 'ID',
                'order-id' => 'ID porudžbine',
                'invoice-id' => 'ID fakture',
                'status' => 'Status',
                'paid' => 'Plaćeno',
                'pending' => 'Na čekanju',
                'transaction-id' => 'ID transakcije',
                'transaction-date' => 'Datum',
                'transaction-amount' => 'Iznos',
                'view' => 'Prikaži',
                'completed' => 'Završeno',
            ],
        ],
    ],
],
'configuration' => [
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
      
],
 
       'customers' => [
        'customers' => [
            'index' => [
                'title' => 'Kupci',
                'add-btn' => 'Dodaj kupca',
                'datagrid' => [
                    'id'              => 'ID',
                    'name'            => 'Ime',
                    'email'           => 'Email',
                    'group'           => 'Grupa',
                    'status'          => 'Status',
                    'is_verified'     => 'Verifikovan',
                    'gender'          => 'Pol',
                    'phone'           => 'Telefon',
                    'created-at'      => 'Datum registracije',
                    'edit'            => 'Izmeni',
                    'delete'          => 'Obriši',
                    'view'            => 'Pregled',
                ],
            ],
            'create' => [
                'title' => 'Dodaj kupca',
                'save-btn' => 'Sačuvaj kupca',
                'back-btn' => 'Nazad',
            ],
            'edit' => [
                'title' => 'Izmeni kupca',
            ],
            'view' => [
                'title' => 'Pregled kupca',
                'personal-info' => 'Lični podaci',
                'address' => 'Adrese',
                'orders' => 'Porudžbine',
                'reviews' => 'Recenzije',
            ],
            'components' => [
                'account' => [
                    'title' => 'Korisnički nalog',
                    'name' => 'Ime i prezime',
                    'email' => 'Email adresa',
                    'password' => 'Lozinka',
                    'confirm-password' => 'Potvrdi lozinku',
                    'gender' => 'Pol',
                    'phone' => 'Telefon',
                    'status' => 'Status',
                    'is_verified' => 'Verifikovan',
                ],
                'address' => [
                    'title' => 'Adrese',
                    'address1' => 'Adresa',
                    'country' => 'Država',
                    'state' => 'Pokrajina',
                    'city' => 'Grad',
                    'postcode' => 'Poštanski broj',
                    'default-address' => 'Podrazumevana adresa',
                    'add-address-btn' => 'Dodaj adresu',
                ],
            ],
            'messages' => [
                'update-success' => 'Kupac je uspešno izmenjen.',
                'delete-success' => 'Kupac je uspešno obrisan.',
                'delete-failed'  => 'Brisanje kupca nije uspelo.',
            ],
        ],

        'groups' => [
            'index' => [
                'title' => 'Grupe kupaca',
                'add-btn' => 'Dodaj grupu',
                'datagrid' => [
                    'id' => 'ID',
                    'code' => 'Kod',
                    'name' => 'Naziv',
                    'edit' => 'Izmeni',
                    'delete' => 'Obriši',
                ],
            ],
            'create' => [
                'title' => 'Dodaj novu grupu',
                'code' => 'Kod',
                'name' => 'Naziv',
                'save-btn' => 'Sačuvaj grupu',
                'back-btn' => 'Nazad',
            ],
            'edit' => [
                'title' => 'Izmeni grupu',
            ],
            'messages' => [
                'create-success' => 'Grupa je uspešno dodata.',
                'update-success' => 'Grupa je uspešno izmenjena.',
                'delete-success' => 'Grupa je uspešno obrisana.',
                'delete-failed'  => 'Grupa ne može biti obrisana.',
            ],
        ],

        'reviews' => [
            'index' => [
                'title' => 'Recenzije',
                'datagrid' => [
                    'id' => 'ID',
                    'customer-name' => 'Kupac',
                    'product-name' => 'Proizvod',
                    'rating' => 'Ocena',
                    'comment' => 'Komentar',
                    'status' => 'Status',
                    'edit' => 'Izmeni',
                    'delete' => 'Obriši',
                ],
            ],
            'edit' => [
                'title' => 'Izmeni recenziju',
                'save-btn' => 'Sačuvaj izmene',
            ],
            'create' => [
                'title' => 'Dodaj recenziju',
            ],
            'messages' => [
                'update-success' => 'Recenzija je uspešno izmenjena.',
                'delete-success' => 'Recenzija je uspešno obrisana.',
            ],
        ],

        'gdpr' => [
            'index' => [
                'title' => 'GDPR zahtevi',
                'add-btn' => 'Kreiraj zahtev',
                'delete' => 'Obriši',
                'datagrid' => [
                    'id' => 'ID',
                    'customer-name' => 'Kupac',
                    'type' => 'Tip zahteva',
                    'message' => 'Poruka',
                    'status' => 'Status',
                    'channel-name' => 'Kanal',
                    'created-at' => 'Kreirano',
                ],
            ],
            'create' => [
                'title' => 'Kreiraj GDPR zahtev',
                'back-btn' => 'Nazad',
                'save-btn' => 'Sačuvaj zahtev',
                'customer' => 'Kupac',
                'type' => 'Tip zahteva',
                'status' => 'Status',
                'pending' => 'Na čekanju',
                'processing' => 'U obradi',
                'completed' => 'Završeno',
                'rejected' => 'Odbijeno',
            ],
            'edit' => [
                'title' => 'Izmeni GDPR zahtev',
                'update-btn' => 'Ažuriraj zahtev',
            ],
            'view' => [
                'title' => 'Pregled GDPR zahteva',
                'customer-name' => 'Kupac',
                'email' => 'Email',
                'type' => 'Tip zahteva',
                'status' => 'Status',
                'channel-name' => 'Kanal',
                'created-at' => 'Datum kreiranja',
                'updated-at' => 'Datum ažuriranja',
            ],
            'messages' => [
                'create-success' => 'Zahtev uspešno kreiran.',
                'update-success' => 'Zahtev uspešno ažuriran.',
                'delete-success' => 'Zahtev uspešno obrisan.',
                'delete-failed' => 'Brisanje zahteva nije uspelo.',
            ],
        ],
    ],
];
    
    
    

 */