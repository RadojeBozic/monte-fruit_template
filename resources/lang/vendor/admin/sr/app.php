<?php

return [
    'checkout' => [
        'cart' => [
            'success-remove' => 'Proizvod je uspešno uklonjen iz vaše korpe.',
        ],
    ],
    'validation' => [
        'product-quantity' => 'Količina proizvoda mora biti veća od nule.',
        'product-sku'      => 'SKU proizvoda je obavezan.',
        'product-name'     => 'Naziv proizvoda je obavezan.',
        'slug-being-used' => 'Slug već postoji. Molimo izaberite drugi.',
    ],

    'acl' => [
    'dashboard'          => 'Kontrolna tabla',
    'sales'              => 'Prodaja',
    'orders'             => 'Porudžbine',
    'create'             => 'Kreiranje',
    'view'               => 'Pregled',
    'cancel'             => 'Otkazivanje',
    'invoices'           => 'Fakture',
    'shipments'          => 'Isporuke',
    'refunds'            => 'Povraćaji',
    'transactions'       => 'Transakcije',
    'catalog'            => 'Katalog',
    'products'           => 'Proizvodi',
    'copy'               => 'Kopiranje',
    'edit'               => 'Izmena',
    'delete'             => 'Brisanje',
    'categories'         => 'Kategorije',
    'attributes'         => 'Atributi',
    'attribute-families' => 'Grupe atributa',
    'customers'          => 'Kupci',
    'addresses'          => 'Adrese',
    'note'               => 'Beleške',
    'groups'             => 'Grupe kupaca',
    'reviews'            => 'Recenzije',
    'gdpr'               => 'GDPR zahtevi',
    'marketing'          => 'Marketing',
    'promotions'         => 'Promocije',
    'cart-rules'         => 'Pravila korpe',
    'catalog-rules'      => 'Kataloška pravila',
    'communications'     => 'Komunikacije',
    'email-templates'    => 'Email šabloni',
    'events'             => 'Događaji',
    'campaigns'          => 'Kampanje',
    'subscribers'        => 'Pretplatnici',
    'search-seo'         => 'Pretraga i SEO',
    'url-rewrites'       => 'URL preusmeravanja',
    'search-terms'       => 'Termini pretrage',
    'search-synonyms'    => 'Sinonimi pretrage',
    'sitemaps'           => 'Mapa sajta',
    'reporting'          => 'Izveštaji',
    'cms'                => 'CMS',
    'settings'           => 'Podešavanja',
    'locales'            => 'Jezici',
    'currencies'         => 'Valute',
    'exchange-rates'     => 'Kursne liste',
    'inventory-sources'  => 'Izvori zaliha',
    'channels'           => 'Kanali',
    'users'              => 'Korisnici',
    'roles'              => 'Uloge',
    'themes'             => 'Teme',
    'taxes'              => 'Porezi',
    'tax-categories'     => 'Kategorije poreza',
    'tax-rates'          => 'Poreske stope',
    'data-transfer'      => 'Prenos podataka',
    'imports'            => 'Uvozi',
    'import'             => 'Uvoz',
    'configure'          => 'Konfigurisanje',
],
    /* 'catalog' => [
        'products' => [
            'index' => [
                    'datagrid' => [
                        'channel'       => 'Kanal',
                    ],

                ],
        ],

    ], */
'sales' => [
        'orders' => [
            'index' => [
                'datagrid' => [
                    'pay-via'     => 'Plaćeno putem',
                    'order-id'    => 'ID porudžbine',
                    'status'      => 'Status',
                    'date'        => 'Datum',
                    'email'       => 'Email',
                    'customer'    => 'Kupac',
                    'grand-total' => 'Ukupan iznos',
                    'view'        => 'Prikaži',
                ],
            ],
            'create' => [
        'cart' => [
            'items' => [
                'title'              => 'Stavke u korpi',
                'sub-total'          => 'Međuzbir',
                'add-product'        => 'Dodaj proizvod',
                'empty-title'        => 'Korpa je prazna',
                'empty-description'  => 'Dodajte proizvode u korpu kako biste započeli porudžbinu.',
            ],
            'cart-items' => [
                'title'        => 'Artikli u korpi',
                'sku'          => 'Šifra proizvoda (SKU)',
                'delete'       => 'Obriši',
                'add-to-cart'  => 'Dodaj u korpu',
            ],
            'wishlist-items' => [
                'title' => 'Lista želja',
            ],
            'compare-items' => [
                'title'             => 'Uporedi proizvode',
                'empty-title'       => 'Nema proizvoda za upoređivanje',
                'empty-description' => 'Dodajte proizvode kako biste ih uporedili.',
            ],
            'recent-order-items' => [
                'title'             => 'Nedavne porudžbine',
                'empty-title'       => 'Nema nedavnih porudžbina',
                'empty-description' => 'Nije pronađena nijedna nedavna porudžbina.',
            ],
        ],
    ],
        ],

        'shipments' => [
            'index' => [
                'title'    => 'Isporuke',
                'datagrid' => [
                    'id'               => 'ID',
                    'order-id'         => 'ID porudžbine',
                    'total-qty'        => 'Ukupna količina',
                    'inventory-source' => 'Izvor zaliha',
                    'shipment-to'      => 'Isporuka za',
                    'order-date'       => 'Datum porudžbine',
                    'shipment-date'    => 'Datum isporuke',
                    'view'             => 'Pregled',
                ],
            ],
        ],

        'invoices' => [
            'index' => [
                'title'    => 'Fakture',
                'datagrid' => [
                    'id'           => 'ID fakture',
                    'invoice-id'   => 'Broj fakture',
                    'invoice-date' => 'Datum fakture',
                    'order-id'     => 'ID porudžbine',
                    'grand-total'  => 'Ukupan iznos',
                    'status'       => 'Status',
                    'paid'         => 'Plaćeno',
                    'pending'      => 'Na čekanju',
                    'overdue'      => 'Prekoračeno',
                    'view'         => 'Pregled',
                ],
            ],
        ],

        'refunds' => [
            'index' => [
                'title'    => 'Povraćaji',
                'datagrid' => [
                    'id'              => 'ID povraćaja',
                    'refund-id'       => 'Broj povraćaja',
                    'order-id'        => 'ID porudžbine',
                    'refund-date'     => 'Datum povraćaja',
                    'refunded-amount' => 'Vraćeni iznos',
                    'billed-to'       => 'Naplata za',
                    'status'          => 'Status',
                    'completed'       => 'Završeno',
                    'pending'         => 'Na čekanju',
                    'view'            => 'Pregled',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title'    => 'Transakcije',
                'datagrid' => [
                    'id'                 => 'ID transakcije',
                    'transaction-id'     => 'Broj transakcije',
                    'order-id'           => 'ID porudžbine',
                    'invoice-id'         => 'ID fakture',
                    'transaction-date'   => 'Datum transakcije',
                    'transaction-amount' => 'Iznos transakcije',
                    'status'             => 'Status',
                    'completed'          => 'Završeno',
                    'pending'            => 'Na čekanju',
                    'view'               => 'Pregled',
                ],

                'create' => [
                    'create-transaction' => 'Kreiraj transakciju',
                    'invoice-id'         => 'ID fakture',
                    'payment-method'     => 'Metod plaćanja',
                    'amount'             => 'Iznos',
                    'save-transaction'   => 'Sačuvaj transakciju',
                    'invoice-id-invalid' => 'Nevažeći ID fakture',
                    'amount-invalid'     => 'Nevažeći iznos',
                ],
            ],
        ],

        'reservations' => [
            'index' => [
                'title'    => 'Rezervacije',
                'datagrid' => [
                    'reservation-id'   => 'ID rezervacije',
                    'product-name'     => 'Naziv proizvoda',
                    'sku'              => 'SKU',
                    'reserved-qty'     => 'Rezervisana količina',
                    'order-id'         => 'ID porudžbine',
                    'customer-name'    => 'Ime kupca',
                    'reservation-date' => 'Datum rezervacije',
                    'status'           => 'Status',
                    'completed'        => 'Završeno',
                    'pending'          => 'Na čekanju',
                    'view'             => 'Pregled',
                ],
            ],
        ],

        'booking' => [
            'index' => [
                'title' => 'Rezervacije',
                'datagrid' => [
                    'id'           => 'ID rezervacije',
                    'order-id'     => 'ID porudžbine',
                    'qty'          => 'Količina',
                    'from'         => 'Od datuma',
                    'to'           => 'Do datuma',
                    'created-date' => 'Datum kreiranja',
                ],
            ],
        ],
    ],

'customers' => [
        'customers' => [
            'update-success'        => 'Ažuriranje uspešno',
             'view' => [
                'title'             => 'Pregled kupca',
                'order-create-confirmation' => 'Da li ste sigurni da želite da kreirate novu porudžbinu za ovog kupca?',
                'active'            => 'Aktivan',
                'back-btn'          => 'Nazad',
                'create-order'      => 'Kreiraj porudžbinu',
                'login-as-customer' => 'Prijavi se kao kupac',
                'delete-account'    => 'Obriši nalog',

                'orders' => [
                    'count'          => 'Broj porudžbina',
                    'total-revenue'  => 'Ukupna zarada',
                ],

                'invoices' => [
                    'count'          => 'Broj faktura',
                ],

                'reviews' => [
                    'count'          => 'Broj recenzija',
                ],

                'datagrid' => [
                    'orders' => [
                        'order-id'      => 'ID porudžbine',
                        'date'          => 'Datum',
                        'status'        => 'Status',
                        'grand-total'   => 'Ukupan iznos',
                        'pay-via'       => 'Plaćeno putem',
                        'channel-name'  => 'Naziv kanala',
                        'customer-name' => 'Ime kupca',
                        'email'         => 'Email',
                        'location'      => 'Lokacija',
                        'empty-order'   => 'Nema dostupnih porudžbina',
                    ],

                    'invoices' => [
                        'increment-id'   => 'Broj fakture',
                        'invoice-date'   => 'Datum fakture',
                        'invoice-amount' => 'Iznos fakture',
                        'order-id'       => 'ID porudžbine',
                        'empty-invoice'  => 'Nema dostupnih faktura',
                    ],

                    'reviews' => [
                        'product-name'   => 'Naziv proizvoda',
                        'status'         => 'Status',
                        'title'          => 'Naslov',
                        'comment'        => 'Komentar',
                        'rating'         => 'Ocena',
                        'created-at'     => 'Datum kreiranja',
                        'id'             => 'ID recenzije',
                        'empty-reviews'  => 'Nema dostupnih recenzija',
                    ],
                ],

                'notes' => [
                    'add-note'         => 'Dodaj belešku',
                    'notify-customer'  => 'Obavesti kupca',
                    'submit-btn-title' => 'Sačuvaj belešku',
                    'note-placeholder' => 'Unesite belešku ovde...',
                    'note-invalid'     => 'Beleška nije validna',
                    'note is not valid' => 'Beleška nije validna',
                ],

                'customer'          => 'Kupac',

                'edit' => [
                    'edit-btn'      => 'Izmeni',
                    'title'            => 'Izmeni kupca',
                    'first-name'       => 'Ime',
                    'last-name'        => 'Prezime',
                    'email'            => 'Email',
                    'contact-number'   => 'Kontakt telefon',
                    'date-of-birth'    => 'Datum rođenja',
                    'gender'           => 'Pol',
                    'male'             => 'Muški',
                    'female'           => 'Ženski',
                    'other'            => 'Drugo',
                    'customer-group'   => 'Grupa kupaca',
                    'gender is not valid'   => 'Izabrani pol nije validan',
                    'suspended'        => 'Suspendovan',
                    'save-btn'         => 'Sačuvaj izmene',
                ],

                'email'             => 'Email',
                'phone'             => 'Telefon',
                'gender'            => 'Pol',
                'date-of-birth'     => 'Datum rođenja',
                'group'             => 'Grupa kupaca',

                'address' => [
                    'count'         => 'Broj adresa',

                    'create' => [
                        'title'             => 'Kreiraj novu adresu',
                        'company-name'      => 'Naziv kompanije',
                        'vat-id'            => 'PIB',
                        'first-name'        => 'Ime',
                        'last-name'         => 'Prezime',
                        'email'             => 'Email',
                        'phone'             => 'Telefon',
                        'street-address'    => 'Ulica i broj',
                        'city'              => 'Grad',
                        'city-invalid'      => 'Grad nije validan',
                        'post-code'         => 'Poštanski broj',
                        'country'           => 'Država',
                        'state'             => 'Pokrajina/Regija',
                        'default-address'   => 'Podrazumevana adresa',
                        'create-btn'        => 'Kreiraj adresu',
                        'save-btn-title'    => 'Sačuvaj adresu',
                    ],
                ],

                'empty-title'       => 'Nema dostupnih podataka',
                'empty-description' => 'Nema podataka za prikazivanje na ovoj stranici.',
            ],
        
    
        
            'index' => [
                'login-message'=> 'Login poruka',
                'title'   => 'Kupci',
                'add-btn' => 'Dodaj kupca',
                'datagrid' => [
                    'id'              => 'ID',
                    'id-value'        => 'ID vrednost',
                    'name'            => 'Ime',
                    'email'           => 'Email',
                    'group'           => 'Grupa',
                    'status'          => 'Status',
                    'is_verified'     => 'Verifikovan',
                    'gender'          => 'Pol',
                    'phone'           => 'Telefon',
                    'created-at'      => 'Datum registracije',
                    'order-count'     => 'Broj porudžbina',
                    'address-count'   => 'Broj adresa',
                    'revenue'         => 'Ukupna zarada',
                    'active'          => 'Aktivan',
                    'inactive'        => 'Neaktivan',
                    'order'           => 'Porudžbina',
                    'address'         => 'Adresa',
                    'channel'         => 'Kanal',
                    'edit'            => 'Izmeni',
                    'delete'          => 'Obriši',
                    'view'            => 'Pregled',
                    'update-status'   => 'Ažuriraj status',
                ],
                'create' => [
                    'title'           => 'Kreiraj kupca',
                    'create-btn'      => 'Kreiraj kupca',
                    'first-name'      => 'Ime',
                    'last-name'       => 'Prezime',
                    'email'           => 'Email',
                    'contact-number'  => 'Kontakt telefon',
                    'date-of-birth'   => 'Datum rođenja',
                    'gender'          => 'Pol',
                    'select-gender'   => 'Izaberi pol',
                    'male'            => 'Muški',
                    'female'          => 'Ženski',
                    'other'           => 'Drugo',
                    'customer-group'  => 'Grupa kupaca',
                    'save-btn'        => 'Sačuvaj kupca',
                    'gender-invalid'  => 'Izabrani pol nije validan',
                ],
                'edit' => [
                    'title' => 'Izmeni kupca',
                ],
                'view' => [
                    'title'         => 'Pregled kupca',
                    'personal-info' => 'Lični podaci',
                    'address'       => 'Adrese',
                    'orders'        => 'Porudžbine',
                    'reviews'       => 'Recenzije',
                ],
                'components' => [
                    'account' => [
                        'title'            => 'Korisnički nalog',
                        'name'             => 'Ime i prezime',
                        'email'            => 'Email adresa',
                        'password'         => 'Lozinka',
                        'confirm-password' => 'Potvrdi lozinku',
                        'gender'           => 'Pol',
                        'phone'            => 'Telefon',
                        'status'           => 'Status',
                        'is_verified'      => 'Verifikovan',
                    ],
                    'address' => [
                        'title'           => 'Adrese',
                        'address1'        => 'Adresa',
                        'country'         => 'Država',
                        'state'           => 'Pokrajina',
                        'city'            => 'Grad',
                        'postcode'        => 'Poštanski broj',
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
             
        ],

        'groups' => [
            'index' => [
                'title'   => 'Grupe kupaca',
                'add-btn' => 'Dodaj grupu',
                'datagrid' => [
                    'id'     => 'ID',
                    'code'   => 'Kod',
                    'name'   => 'Naziv',
                    'edit'   => 'Izmeni',
                    'delete' => 'Obriši',
                ],
                'create' => [
                    'create-btn' => 'Kreiraj grupu',
                    'code'       => 'Kod',
                    'name'       => 'Naziv',
                    'save-btn'   => 'Sačuvaj grupu',
                ],
                'edit' => [
                    'title'     => 'Izmeni grupu',
                    'save-btn'  => 'Sačuvaj izmene',
                ],
                'messages' => [
                    'create-success' => 'Grupa je uspešno dodata.',
                    'update-success' => 'Grupa je uspešno izmenjena.',
                    'delete-success' => 'Grupa je uspešno obrisana.',
                    'delete-failed'  => 'Brisanje grupe nije uspelo.',
                ],
            ],
        ],

        'reviews' => [
            'index' => [
                'title' => 'Recenzije kupaca',
                'datagrid' => [
                    'id'             => 'ID',
                    'customer-names' => 'Ime kupca',
                    'product'        => 'Proizvod',
                    'status'         => 'Status',
                    'rating'         => 'Ocena',
                    'date'           => 'Datum',
                    'title'          => 'Naslov',
                    'approved'       => 'Odobreno',
                    'pending'        => 'Na čekanju',
                    'disapproved'    => 'Odbijeno',
                    'comment'        => 'Komentar',
                ],
            ],
        ],

        'gdpr' => [
            'index' => [
                'title' => 'GDPR zahtevi',
                'datagrid' => [
                    'id'            => 'ID',
                    'customer-name' => 'Ime kupca',
                    'status'        => 'Status',
                    'type'          => 'Tip',
                    'message'       => 'Poruka',
                    'created-at'    => 'Kreirano',
                    'delete'        => 'Obriši',
                    'edit'          => 'Izmeni',
                    'pending'       => 'Na čekanju',
                    'processing'    => 'U obradi',
                    'completed'     => 'Završeno',
                    'declined'      => 'Odbijeno',
                    'revoked'       => 'Povučeno',
                ],
            ],
        ],
    ],

'components' => [
     'products' => [
            'search' => [
                'title'       => 'Pretraga proizvoda',
                'add-btn'     => 'Dodaj proizvod',
                'empty-title' => 'Nije pronađen nijedan proizvod',
                'empty-info'  => 'Nema rezultata za unetu pretragu. Pokušajte ponovo sa drugim kriterijumima.',
            ],
        ],
    'layouts' => [
            'sidebar' => [
            'imports'                    => 'Uvozi',
            'tax-categories'             => 'Poreske kategorije',
            'tax-rates'                  => 'Poreske stope',
            'email-templates'            => 'Email šabloni',
            'events'                     => 'Događaji',
            'campaigns'                  => 'Kampanje',
            'newsletter-subscriptions'   => 'Prijave na newsletter',
            'url-rewrites'               => 'URL preusmeravanja',
            'search-terms'               => 'Pojmovi pretrage',
            'search-synonyms'            => 'Sinonimi pretrage',
            'sitemaps'                   => 'Mape sajta',
        ],
        'header' => [
            'app-version' => 'Verzija aplikacije',
            'my-account'  => 'Moj nalog',
            'logout'      => 'Odjavi se',
            'visit-shop'  => 'Poseti prodavnicu',
            'notifications'  => 'Obaveštenja',

        ],
    ],

     'media' => [
            'images' => [
                'placeholders' => [
                    'front'      => 'Prednja strana',
                    'next'       => 'Sledeća',
                    'zoom'       => 'Zumirana slika',
                    'use-cases'  => 'Primeri korišćenja',
                    'size'       => 'Veličina slike',
                ],
            ],
            'videos' => [
                'add-video-btn'   => 'Dodaj video',
                'allowed-types'   => 'Dozvoljeni tipovi fajlova: mp4, avi, mov',
            ],
        ],

    'datagrid' => [

        
        'toolbar' => [
            'mass-actions' => [
                'select-action' => 'Izaberi akciju',
            ],
            'length-of' => 'Broj rezultata',
            'selected'  => 'odabrano',

            'filter' => [
                'title'             => 'Filteri',
                'custom-filters'    => 'Prilagođeni filteri',
                'apply-filters-btn' => 'Primeni filtere',
                'save-filter'       => 'Sačuvaj filter',
                'clear-all'         => 'Obriši sve',
            ],
            
        ],

        'filters' => [
            'title'  => 'Filteri',
            'select' => 'Izaberi',

            'date-options' => [
                'today'             => 'Danas',
                'yesterday'         => 'Juče',
                'this-week'         => 'Ove nedelje',
                'this-month'        => 'Ovog meseca',
                'last-month'        => 'Prošlog meseca',
                'last-three-months' => 'Poslednja tri meseca',
                'last-six-months'   => 'Poslednjih šest meseci',
                'this-year'         => 'Ove godine',
            ],
             'boolean-options' => [
                    'true'  => 'Da',
                    'false' => 'Ne',
                ],
            
        ],
    ],

    'modal' => [
        'confirm' => [
            'title'        => 'Da li ste sigurni?',
            'agree-btn'    => 'Potvrdi',
            'disagree-btn' => 'Otkaži',
            'message'      => 'Ova akcija se ne može poništiti.',
        ],
    ],
],

'errors' => [
    '404' => [
        'title'       => '404 - Stranica nije pronađena',
        'description' => 'Tražena stranica ne postoji.',
    ],
],

'marketing' => [
    'promotions' => [
        'cart-rules' => [
            'edit' => [
                'status' => 'Status',
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
            ],
        ],
        'save-message' => 'Podešavanja su uspešno sačuvana.',
        'title'     => 'Konfiguracija',
        'back-btn'  => 'Nazad',
        'save-btn'  => 'Sačuvaj podešavanja',
        'delete'    => 'Obriši podešavanje',
        'search'     => 'Pretraži podešavanja',
        'select-country' => 'Izaberite državu',

        'general' => [
            'title' => 'Opšte',
            'info'  => 'Osnovna podešavanja platforme.',

            'general' => [
                'title' => 'Opšta podešavanja',
                'info'  => 'Podešavanje osnovnih informacija o sajtu.',

                'unit-options' => [
                    'title'      => 'Jedinice mere',
                    'title-info' => 'Podešavanje osnovnih jedinica za mere.',
                    'weight-unit'=> 'Jedinica težine',
                ],

                'breadcrumbs' => [
                    'title'      => 'Navigacija putanjom',
                    'title-info' => 'Upravljanje prikazom navigacionih putanja.',
                    'shop'       => 'Prodavnica',
                ],
            ],

            'content' => [
                'title' => 'Sadržaj',
                'info'  => 'Upravljanje sadržajem i skriptama.',

                'header-offer' => [
                    'title'             => 'Promo traka',
                    'title-info'        => 'Tekst i link u zaglavlju sajta.',
                    'offer-title'       => 'Naslov ponude',
                    'redirection-title' => 'Tekst dugmeta',
                    'redirection-link'  => 'Link dugmeta',
                ],

                'speculation-rules' => [
                    'title' => 'Spekulativno učitavanje',
                    'info'  => 'Optimizacija putem predmemorije.',

                    'settings' => [
                        'title'                 => 'Podešavanja',
                        'ignore-urls'           => 'Ignorisane putanje (| odvojene)',
                        'ignore-urls-info'      => 'Primer: account|checkout|cart',
                        'ignore-url-params'     => 'Ignorisani URL parametri',
                        'ignore-url-params-info'=> 'Primer: utm_*, session_id',
                        'eagerness'             => 'Agresivnost učitavanja',
                        'eager'                 => 'Agresivno',
                        'moderate'              => 'Umereno',
                        'conservative'          => 'Konzervativno',
                        'eagerness-info'        => 'Koliko unapred se učitavaju stranice.',
                    ],
                ],

                'custom-scripts' => [
                    'title'          => 'Prilagođeni skripti',
                    'title-info'     => 'Dodajte CSS i JS kod.',
                    'custom-css'     => 'Prilagođeni CSS',
                    'custom-javascript'=> 'Prilagođeni JavaScript',
                ],
            ],

            'design' => [
                'title' => 'Dizajn',
                'info'  => 'Upravljanje logom, favicon-om i navigacijom.',

                'admin-logo' => [
                    'title'      => 'Logo administracije',
                    'title-info' => 'Logo u admin panelu.',
                    'logo-image' => 'Slika loga',
                    'favicon'    => 'Favicon (ikonica sajta)',
                ],

                'menu-category' => [
                    'title'            => 'Navigacija menijem',
                    'info'             => 'Izgled navigacije.',
                    'default'          => 'Gornji meni',
                    'sidebar'          => 'Bočna navigacija',
                    'preview-default'  => 'Pregled gornjeg menija',
                    'preview-sidebar'  => 'Pregled bočne navigacije',
                ],
            ],

            'magic-ai' => [
                'title' => 'AI podešavanja',
                'info'  => 'Podešavanje veštačke inteligencije.',

                'settings' => [
                    'title'        => 'Opšta podešavanja AI',
                    'title-info'   => 'Osnovna podešavanja AI integracije.',
                    'enabled'      => 'Omogući AI',
                    'api-key'      => 'API ključ',
                    'organization' => 'Organizacija',
                    'llm-api-domain'=> 'LLM API domen',
                ],

                'content-generation' => [
                    'title'             => 'Generisanje sadržaja',
                    'title-info'        => 'Automatski generiši opise i tekstove.',
                    'enabled'           => 'Omogući generisanje sadržaja',
                    'product-short-description-prompt'=> 'Kratki opis proizvoda (prompt)',
                    'product-description-prompt'=> 'Opis proizvoda (prompt)',
                    'category-description-prompt'=> 'Opis kategorije (prompt)',
                    'cms-page-content-prompt'   => 'CMS stranica (prompt)',
                ],

                'image-generation' => [
                    'title'      => 'Generisanje slika',
                    'title-info' => 'Automatsko generisanje slika pomoću AI.',
                    'enabled'    => 'Omogući generisanje slika',
                ],

                'review-translation' => [
                    'title'      => 'Prevod recenzija',
                    'title-info' => 'Automatski prevodi korisničke recenzije.',
                    'enabled'    => 'Omogući prevod recenzija',
                    'model'      => 'Model za prevođenje',
                ],

                'checkout-message' => [
                    'title'      => 'Poruka pri plaćanju',
                    'title-info' => 'Prilagođena poruka na stranici plaćanja.',
                    'enabled'    => 'Omogući poruku pri plaćanju',
                    'model'      => 'AI model za generisanje poruka',
                    'prompt'     => 'Prompt za generisanje poruke',
                ],
            ],

            'sitemap' => [
                'title' => 'Mapa sajta',
                'info'  => 'Podešavanje sitemap za SEO.',

                'settings' => [
                    'title'   => 'Podešavanja sitemap',
                    'info'    => 'Osnovna podešavanja sitemap-a.',
                    'enabled' => 'Omogući sitemap',
                ],

                'file-limits' => [
                    'title'            => 'Ograničenja fajlova',
                    'info'             => 'Podešavanje limita za fajlove sitemap.',
                    'max-url-per-file' => 'Maksimalan broj URL-ova po fajlu',
                ],
            ],

            'gdpr' => [
                'title' => 'GDPR',
                'info'  => 'Postavke privatnosti i kolačića.',

                'settings' => [
                    'title'   => 'Opšta GDPR podešavanja',
                    'info'    => 'GDPR compliance podešavanja.',
                    'enabled' => 'Omogući GDPR',
                ],

                'agreement' => [
                    'title'  => 'Saglasnost korisnika',
                    'info'   => 'Potvrda saglasnosti korisnika.',
                    'enable' => 'Omogući saglasnost',
                ],

                'cookie' => [
                    'title'  => 'Politika kolačića',
                    'info'   => 'Podešavanje kolačića.',
                    'enable' => 'Omogući kolačiće',
                ],

                'cookie-consent' => [
                    'title'                 => 'Saglasnost za kolačiće',
                    'info'                  => 'Podešavanja nivoa saglasnosti.',
                    'strictly-necessary'    => 'Strogo neophodno',
                    'basic-interaction'     => 'Osnovna interakcija',
                    'experience-enhancement'=> 'Poboljšanje iskustva',
                    'measurement'           => 'Merenje',
                    'targeting-advertising' => 'Ciljanje i oglašavanje',
                ],
            ],
        ],



'catalog' => [
    'title' => 'Katalog',
    'info'  => 'Podešavanja vezana za proizvode i katalog.',

    'products' => [
        'update:success' => 'Proizvod je uspešno ažuriran.',
        'title' => 'Proizvodi',
        'info'  => 'Osnovna podešavanja proizvoda.',
        'channel'       => 'Kanal',
        'settings' => [
            'title'                => 'Podešavanja proizvoda',
            'title-info'           => 'Opšta podešavanja za katalog proizvoda.',
            'compare-options'      => 'Omogući poređenje proizvoda',
            'image-search-option'  => 'Omogući pretragu po slici',
        ],
        'edit' => [
            'types' => [
                'configurable' => [
                    'sku' => 'SKU (šifra proizvoda)',
                    'edit-btn' => 'Izmeni konfigurabilni proizvod',
                    'delete-btn' => 'Obriši konfigurabilni proizvod',
                ],
            ],
        ],

         'index' => [
                'create' => [
                    'title'              => 'Kreiraj novi proizvod',
                    'type'               => 'Tip proizvoda',
                    'type is not valid'  => 'Odabrani tip proizvoda nije validan',
                    'family'             => 'Porodica atributa',
                    'family is not valid'=> 'Odabrana porodica atributa nije validna',
                    'sku'                => 'SKU (šifra proizvoda)',
                    'sku is not valid'   => 'SKU nije validan ili je već u upotrebi',
                    'save-btn'           => 'Sačuvaj proizvod',
                ],
                'datagrid' => [
                    'qty'                => 'Količina',
                ],
            ],


        'search' => [
            'title'                 => 'Pretraga proizvoda',
            'title-info'            => 'Podešavanja pretrage.',
            'search-engine'         => 'Pretraživač',
            'database'              => 'Baza podataka',
            'elastic'               => 'Elasticsearch',
            'admin-mode'            => 'Admin režim',
            'admin-mode-info'       => 'Režim pretrage u admin panelu.',
            'storefront-mode'       => 'Storefront režim',
            'storefront-mode-info'  => 'Režim pretrage na frontend-u.',
            'min-query-length'      => 'Minimalna dužina upita',
            'min-query-length-info' => 'Minimalan broj znakova za pretragu.',
            'max-query-length'      => 'Maksimalna dužina upita',
            'max-query-length-info' => 'Maksimalan broj znakova za pretragu.',
        ],

        'product-view-page' => [
            'title'                           => 'Stranica proizvoda',
            'title-info'                      => 'Podešavanja stranice proizvoda.',
            'allow-no-of-related-products'    => 'Broj povezanih proizvoda',
            'allow-no-of-up-sells-products'   => 'Broj proizvoda za unapređenu prodaju',
        ],

        'cart-view-page' => [
            'title'                             => 'Korpa',
            'title-info'                        => 'Podešavanja stranice korpe.',
            'allow-no-of-cross-sells-products'  => 'Broj proizvoda za dodatnu prodaju',
        ],

        'storefront' => [
            'title'                    => 'Prodavnica',
            'title-info'               => 'Podešavanja prikaza proizvoda.',
            'default-list-mode'        => 'Podrazumevani režim prikaza',
            'grid'                     => 'Mreža',
            'list'                     => 'Lista',
            'products-per-page'        => 'Proizvoda po stranici',
            'comma-separated'          => 'Brojevi odvojeni zarezom',
            'sort-by'                  => 'Sortiraj po',
            'from-a-z'                 => 'Od A-Z',
            'from-z-a'                 => 'Od Z-A',
            'latest-first'             => 'Najnovije prvo',
            'oldest-first'             => 'Najstarije prvo',
            'cheapest-first'           => 'Najjeftinije prvo',
            'expensive-first'          => 'Najskuplje prvo',
            'buy-now-button-display'   => 'Prikaži dugme "Kupi odmah"',
        ],

        'small-image' => [
            'title'       => 'Mala slika',
            'title-info'  => 'Dimenzije male slike.',
            'width'       => 'Širina',
            'height'      => 'Visina',
            'placeholder' => 'Placeholder slika',
        ],

        'medium-image' => [
            'title'       => 'Srednja slika',
            'title-info'  => 'Dimenzije srednje slike.',
            'width'       => 'Širina',
            'height'      => 'Visina',
            'placeholder' => 'Placeholder slika',
        ],

        'large-image' => [
            'title'       => 'Velika slika',
            'title-info'  => 'Dimenzije velike slike.',
            'width'       => 'Širina',
            'height'      => 'Visina',
            'placeholder' => 'Placeholder slika',
        ],

        'review' => [
            'title'                    => 'Recenzije',
            'title-info'               => 'Podešavanja korisničkih recenzija.',
            'allow-guest-review'       => 'Dozvoli gostima recenzije',
            'allow-customer-review'    => 'Dozvoli korisnicima recenzije',
            'censoring-reviewer-name'  => 'Cenzuriši ime recenzenta',
            'summary'                  => 'Sumarni prikaz',
            'display-star-count'       => 'Prikaži broj zvezdica',
            'display-review-count'     => 'Prikaži broj recenzija',
        ],

        'attribute' => [
            'title'               => 'Atributi',
            'title-info'          => 'Podešavanja atributa.',
            'image-upload-size'   => 'Maksimalna veličina slike za upload (KB)',
            'file-upload-size'    => 'Maksimalna veličina fajla za upload (KB)',
        ],

        'social-share' => [
            'title'                        => 'Društvene mreže',
            'title-info'                   => 'Podešavanja deljenja na društvenim mrežama.',
            'enable-social-share'          => 'Omogući deljenje',
            'enable-share-facebook'        => 'Facebook',
            'enable-share-twitter'         => 'Twitter',
            'enable-share-pinterest'       => 'Pinterest',
            'enable-share-whatsapp'        => 'WhatsApp',
            'enable-share-whatsapp-info'   => 'Samo za mobilne uređaje',
            'enable-share-linkedin'        => 'LinkedIn',
            'enable-share-email'           => 'Email',
            'share-message'                => 'Poruka za deljenje',
        ],
    ],

    'rich-snippets' => [
        'title' => 'Rich Snippets',
        'info'  => 'Podešavanje strukturiranih podataka za SEO.',

        'products' => [
            'title'            => 'Proizvodi',
            'title-info'       => 'Rich snippets za proizvode.',
            'enable'           => 'Omogući rich snippets',
            'show-sku'         => 'Prikaži SKU',
            'show-weight'      => 'Prikaži težinu',
            'show-categories'  => 'Prikaži kategorije',
            'show-images'      => 'Prikaži slike',
            'show-reviews'     => 'Prikaži recenzije',
            'show-ratings'     => 'Prikaži ocene',
            'show-offers'      => 'Prikaži ponude',
        ],

        'categories' => [
            'title'                   => 'Kategorije',
            'title-info'              => 'Rich snippets za kategorije.',
            'enable'                  => 'Omogući rich snippets',
            'show-search-input-field' => 'Prikaži polje za pretragu',
        ],
    ],

    'inventory' => [
        'title'      => 'Zalihe',
        'title-info' => 'Podešavanja zaliha proizvoda.',

        'product-stock-options' => [
            'title'                   => 'Opcije zaliha proizvoda',
            'info'                    => 'Podešavanje zaliha.',
            'allow-back-orders'       => 'Dozvoli narudžbine van zaliha',
            'out-of-stock-threshold'  => 'Granica za stanje "van zaliha"',
        ],
    ],
    'attributes' => [
        'create' => [
            'title'             => 'Kreiraj atribut',
            'label'             => 'Naziv atributa',
            'admin'             => 'Administrativna podešavanja',

        ],
    ],
    'families' => [
        'create' => [
            'title'             => 'Kreiraj porodicu atributa',
           
        ],
    ],
 
    
],

'customer' => [
    'title' => 'Kupac',
    'info'  => 'Podešavanja vezana za korisnike i njihove naloge.',

    'address' => [
        'title' => 'Adresa',
        'info'  => 'Podešavanja vezana za adresu korisnika.',

        'requirements' => [
            'title'       => 'Zahtevi za adresu',
            'title-info'  => 'Polja obavezna za unos prilikom kreiranja adrese.',
            'country'     => 'Država',
            'state'       => 'Pokrajina',
            'zip'         => 'Poštanski broj',
        ],

        'information' => [
            'title'         => 'Informacije o adresi',
            'title-info'    => 'Detaljna podešavanja za unos adrese.',
            'street-lines'  => 'Broj redova za adresu',
        ],
    ],

    'captcha' => [
        'title' => 'Captcha',
        'info'  => 'Podešavanja za Google reCAPTCHA.',

        'credentials' => [
            'title'       => 'Pristupni podaci za Captcha-u',
            'title-info'  => 'Google reCAPTCHA site-key i secret-key.',
            'site-key'    => 'Site ključ',
            'secret-key'  => 'Tajni ključ',
            'status'      => 'Status',
        ],
    ],

    'settings' => [
        'title'         => 'Podešavanja',
        'settings-info' => 'Opšta podešavanja korisničkih naloga.',

        'wishlist' => [
            'title'        => 'Lista želja',
            'title-info'   => 'Omogući ili onemogući opciju liste želja.',
            'allow-option' => 'Omogući listu želja',
        ],

        'login-options' => [
            'title'            => 'Opcije prijave',
            'title-info'       => 'Podešavanje preusmeravanja nakon prijave.',
            'redirect-to-page' => 'Preusmeri korisnika na',
            'home'             => 'Početnu stranicu',
            'account'          => 'Korisnički nalog',
        ],

        'create-new-account-option' => [
            'title'        => 'Opcije kreiranja naloga',
            'title-info'   => 'Podešavanja za kreiranje novog naloga.',

            'default-group' => [
                'title'       => 'Podrazumevana grupa korisnika',
                'title-info'  => 'Odaberi grupu u koju će biti automatski svrstani novi korisnici.',
                'general'     => 'Opšta grupa',
                'guest'       => 'Gost',
                'wholesale'   => 'Veleprodaja',
            ],

            'news-letter'      => 'Prijava na newsletter',
            'news-letter-info' => 'Automatski prijavi korisnika na newsletter prilikom kreiranja naloga.',
        ],

        'newsletter' => [
            'title'          => 'Newsletter',
            'title-info'     => 'Podešavanje newsletter pretplate.',
            'subscription'   => 'Dozvoli prijavu na newsletter',
        ],

        'email' => [
            'title'               => 'Email verifikacija',
            'title-info'          => 'Zahtevaj verifikaciju email adrese.',
            'email-verification'  => 'Omogući verifikaciju email-a',
        ],

        'social-login' => [
            'title' => 'Prijava putem društvenih mreža',
            'info'  => 'Podešavanja prijave putem društvenih mreža.',

            'facebook' => [
                'enable-facebook' => 'Omogući Facebook prijavu',
                'client-id' => [
                'title' => 'Facebook Client ID',
                'title-info' => 'Unesite Client ID za Facebook aplikaciju.',
            ],
            'client-secret' => [
                'title' => 'Facebook Client Secret',
                'title-info' => 'Unesite Client Secret za Facebook aplikaciju.',
            ],
            'redirect' => [
                'title' => 'URL za preusmeravanje (Facebook)',
                'title-info' => 'Unesite Redirect URL za Facebook prijavu.',
            ],
            ],
            'twitter' => [
                'enable-twitter' => 'Omogući Twitter prijavu',
                    'client-id' => [
                'title' => 'Twitter Client ID',
                'title-info' => 'Unesite Client ID za Twitter aplikaciju.',
            ],
            'client-secret' => [
                'title' => 'Twitter Client Secret',
                'title-info' => 'Unesite Client Secret za Twitter aplikaciju.',
            ],
            'redirect' => [
                'title' => 'URL za preusmeravanje (Twitter)',
                'title-info' => 'Unesite Redirect URL za Twitter prijavu.',
            ],
            ],
            'google' => [
                'enable-google' => 'Omogući Google prijavu',
                'client-id' => [
                'title' => 'Google Client ID',
                'title-info' => 'Unesite Client ID za Google aplikaciju.',
            ],
            'client-secret' => [
                'title' => 'Google Client Secret',
                'title-info' => 'Unesite Client Secret za Google aplikaciju.',
            ],
            'redirect' => [
                'title' => 'URL za preusmeravanje (Google)',
                'title-info' => 'Unesite Redirect URL za Google prijavu.',
            ],
            ],
            'linkedin' => [
                'enable-linkedin' => 'Omogući LinkedIn prijavu',
                'client-id' => [
                'title' => 'LinkedIn Client ID',
                'title-info' => 'Unesite Client ID za LinkedIn aplikaciju.',
            ],
            'client-secret' => [
                'title' => 'LinkedIn Client Secret',
                'title-info' => 'Unesite Client Secret za LinkedIn aplikaciju.',
            ],
            'redirect' => [
                'title' => 'URL za preusmeravanje (LinkedIn)',
                'title-info' => 'Unesite Redirect URL za LinkedIn prijavu.',
            ],
            ],
            'github' => [
                'enable-github' => 'Omogući GitHub prijavu',
                'client-id' => [
                'title' => 'GitHub Client ID',
                'title-info' => 'Unesite Client ID za GitHub aplikaciju.',
            ],
            'client-secret' => [
                'title' => 'GitHub Client Secret',
                'title-info' => 'Unesite Client Secret za GitHub aplikaciju.',
            ],
            'redirect' => [
                'title' => 'URL za preusmeravanje (GitHub)',
                'title-info' => 'Unesite Redirect URL za GitHub prijavu.',
            ],
            ],
        ],
    ],
],

'email' => [
    'title' => 'Email',
    'info'  => 'Podešavanja za email notifikacije i slanje poruka.',

    'email-settings' => [
        'title'                 => 'Podešavanja email-a',
        'info'                  => 'Glavna podešavanja email adresa i pošiljalaca za prodavnicu.',

        'email-sender-name'     => 'Ime pošiljaoca email-a (Prodavnica)',
        'email-sender-name-tip' => 'Ime koje će biti prikazano kao pošiljalac email-a prodavnice.',

        'shop-email-from'       => 'Email prodavnice (pošiljalac)',
        'shop-email-from-tip'   => 'Email adresa koja će biti prikazana kao adresa prodavnice.',

        'admin-name'            => 'Ime administratora',
        'admin-name-tip'        => 'Ime administratora koje će biti prikazano u email porukama.',

        'admin-email'           => 'Email administratora',
        'admin-email-tip'       => 'Email adresa administratora za primanje administrativnih obaveštenja.',

        'contact-name'          => 'Ime kontakta',
        'contact-name-tip'      => 'Ime osobe za kontakt prikazano u email porukama.',

        'contact-email'         => 'Email kontakta',
        'contact-email-tip'     => 'Email adresa kontakta prikazana u email porukama.',
    ],

    'notifications' => [
        'title' => 'Notifikacije',
        'info'  => 'Podešavanja email obaveštenja za različite događaje.',

        'verification'                                      => 'Verifikacija korisničkog email-a',
        'registration'                                      => 'Registracija korisnika',
        'customer-registration-confirmation-mail-to-admin'  => 'Potvrda registracije korisnika (email adminu)',
        'customer'                                          => 'Obaveštenja za korisnike',

        'new-order'                                         => 'Nova porudžbina',
        'new-order-mail-to-admin'                           => 'Nova porudžbina (email adminu)',

        'new-invoice'                                       => 'Nova faktura',
        'new-invoice-mail-to-admin'                         => 'Nova faktura (email adminu)',

        'new-refund'                                        => 'Novi povraćaj novca',
        'new-refund-mail-to-admin'                          => 'Novi povraćaj novca (email adminu)',

        'new-shipment'                                      => 'Nova isporuka',
        'new-shipment-mail-to-admin'                        => 'Nova isporuka (email adminu)',

        'new-inventory-source'                              => 'Novi izvor zaliha',

        'cancel-order'                                      => 'Otkazana porudžbina',
        'cancel-order-mail-to-admin'                        => 'Otkazana porudžbina (email adminu)',
    ],
],

'sales' => [
    'title' => 'Prodaja',
    'info'  => 'Podešavanja za prodaju, plaćanje, isporuke, poreze i naručivanje.',

    'shipping-setting' => [
        'title' => 'Podešavanja isporuke',
        'info'  => 'Definisanje osnovnih informacija za isporuku proizvoda.',

        'origin' => [
            'title'             => 'Izvorna lokacija za isporuku',
            'title-info'        => 'Lokacija prodavnice odakle se vrši isporuka.',
            'country'           => 'Država',
            'state'             => 'Pokrajina',
            'city'              => 'Grad',
            'street-address'    => 'Ulica i broj',
            'zip'               => 'Poštanski broj',
            'store-name'        => 'Naziv prodavnice',
            'vat-number'        => 'PIB broj',
            'contact-number'    => 'Kontakt telefon',
            'bank-details'      => 'Bankovni podaci',
        ],
    ],

    'shipping-methods' => [
        'title' => 'Metode isporuke',
        'info'  => 'Podešavanje dostupnih metoda isporuke.',

        'free-shipping' => [
            'page-title'    => 'Besplatna isporuka',
            'title-info'    => 'Podešavanja za besplatnu isporuku.',
            'title'         => 'Naziv',
            'description'   => 'Opis',
            'status'        => 'Status',
        ],

        'flat-rate-shipping' => [
            'page-title'    => 'Fiksna cena isporuke',
            'title-info'    => 'Podešavanja za fiksnu cenu isporuke.',
            'title'         => 'Naziv',
            'description'   => 'Opis',
            'rate'          => 'Cena',
            'type' => [
                'title'     => 'Tip',
                'per-unit'  => 'Po jedinici',
                'per-order' => 'Po narudžbini',
            ],
            'status'        => 'Status',
        ],
    ],

    'order-settings' => [
        'title' => 'Podešavanja narudžbina',
        'info'  => 'Pravila za numerisanje narudžbina i dodatne opcije za proces naručivanja.',

        'order-number' => [
            'title'     => 'Numerisanje narudžbina',
            'info'      => 'Definišite način generisanja brojeva narudžbina.',
            'prefix'    => 'Prefiks broja narudžbine',
            'length'    => 'Dužina broja narudžbine',
            'suffix'    => 'Sufiks broja narudžbine',
            'generator' => 'Generator brojeva narudžbina',
        ],

        'minimum-order' => [
            'title'     => 'Minimalna vrednost narudžbine',
            'info'      => 'Definišite minimalni iznos potreban za realizaciju narudžbine.',
            'enable'    => 'Omogući minimalnu vrednost narudžbine',
        ],

        'reorder' => [
            'title'             => 'Opcije ponovnog naručivanja',
            'info'              => 'Opcije koje omogućavaju korisnicima ponovno naručivanje prethodno kupljenih proizvoda.',
            'admin-reorder'     => 'Omogući ponovno naručivanje u admin panelu',
            'admin-reorder-info'=> 'Dozvoljava administratorima kreiranje ponovnih narudžbina iz administracije.',
            'shop-reorder'      => 'Omogući ponovno naručivanje na prodavnici',
            'shop-reorder-info' => 'Dozvoljava kupcima ponovno naručivanje sa njihovog naloga.',
        ],
    ],



    'payment-methods' => [
        'page-title'    => 'Metode plaćanja',
        'info'          => 'Konfiguracija metoda plaćanja.',

        'cash-on-delivery'                  => 'Plaćanje pouzećem',
        'cash-on-delivery-info'             => 'Omogućava kupcima plaćanje u gotovini prilikom preuzimanja proizvoda.',
        'money-transfer'                    => 'Bankovni transfer',
        'money-transfer-info'               => 'Plaćanje narudžbine bankovnim transferom.',
        'paypal-standard'                   => 'PayPal Standard',
        'paypal-standard-info'              => 'Standardno PayPal plaćanje za sigurnu online kupovinu.',
        'paypal-smart-button'               => 'PayPal Smart Button',
        'paypal-smart-button-info'          => 'Integracija PayPal pametnog dugmeta za jednostavnije plaćanje.',

        'title'                             => 'Naziv metode plaćanja',
        'description'                       => 'Opis metode plaćanja',
        'logo'                              => 'Logo metode plaćanja',
        'logo-information'                  => 'Logo koji će biti prikazan tokom odabira načina plaćanja.',
        'instructions'                      => 'Instrukcije za plaćanje',
        'generate-invoice'                  => 'Automatski generiši fakturu',
        'set-order-status'                  => 'Postavi status porudžbine nakon plaćanja',
        'pending'                           => 'Na čekanju',
        'pending-payment'                   => 'Čeka plaćanje',
        'processing'                        => 'U obradi',
        'generate-invoice-applicable'       => 'Automatsko generisanje fakture moguće',
        'status'                            => 'Status',
        'sort-order'                        => 'Redosled prikaza',

        'mailing-address'                   => 'Adresa za plaćanje',
        'business-account'                  => 'Poslovni PayPal nalog (email)',
        'sandbox'                           => 'Sandbox režim (testiranje)',
        'client-id'                         => 'PayPal Client ID',
        'client-id-info'                    => 'Vaš PayPal Client ID za integraciju.',
        'client-secret'                     => 'PayPal Client Secret',
        'client-secret-info'                => 'Vaš PayPal Client Secret ključ.',
        'accepted-currencies'               => 'Prihvaćene valute',
        'accepted-currencies-info'          => 'Valute koje podržava ova metoda plaćanja.',
    ],

        'invoice-settings' => [
        'title'                         => 'Podešavanja faktura',
        'info'                          => 'Podešavanje pravila za fakture i njihovo generisanje.',

        'invoice-number' => [
            'title'                     => 'Numerisanje faktura',
            'info'                      => 'Definišite format i pravila generisanja brojeva faktura.',
            'prefix'                    => 'Prefiks broja fakture',
            'length'                    => 'Dužina broja fakture',
            'suffix'                    => 'Sufiks broja fakture',
            'generator'                 => 'Generator brojeva faktura',
        ],

        'payment-terms' => [
            'title'                     => 'Uslovi plaćanja',
            'info'                      => 'Definišite rokove dospeća plaćanja za fakture.',
            'due-duration'              => 'Rok dospeća (dani)',
        ],

        'pdf-print-outs' => [
            'title'                     => 'PDF format faktura',
            'info'                      => 'Podešavanja za generisanje PDF faktura.',
            'invoice-id-title'          => 'Prikaži ID fakture u PDF-u',
            'invoice-id-info'           => 'Da li prikazati ID fakture u PDF dokumentu.',
            'order-id-title'            => 'Prikaži ID narudžbine u PDF-u',
            'order-id-info'             => 'Da li prikazati ID narudžbine u PDF dokumentu.',
            'logo'                      => 'Logo za PDF fakturu',
            'logo-info'                 => 'Logo koji će biti prikazan na PDF fakturi.',
            'footer-text'               => 'Tekst u podnožju PDF fakture',
            'footer-text-info'          => 'Tekst koji će biti prikazan na dnu PDF fakture.',
        ],

        'invoice-reminders' => [
            'title'                         => 'Podsetnici za fakture',
            'info'                          => 'Podešavanja automatskog slanja podsetnika za plaćanje faktura.',
            'maximum-limit-of-reminders'    => 'Maksimalan broj podsetnika',
            'interval-between-reminders'    => 'Interval između podsetnika (dani)',
        ],
    ],

    'taxes' => [
        'title'      => 'Podešavanja poreza',
        'title-info' => 'Podesite kategorije poreza, obračun i prikaz poreza.',

        'categories' => [
            'title'      => 'Poreske kategorije',
            'title-info' => 'Definišite osnovne kategorije za obračun poreza.',
            'shipping'   => 'Dostava',
            'product'    => 'Proizvod',
            'none'       => 'Bez poreza',
        ],

        'calculation' => [
            'title'            => 'Obračun poreza',
            'title-info'       => 'Izaberite način obračuna poreza za proizvode i dostavu.',
            'based-on'         => 'Bazirano na',
            'shipping-address' => 'Adresu dostave',
            'billing-address'  => 'Adresu naplate',
            'shipping-origin'  => 'Mesto slanja pošiljke',
            'product-prices'   => 'Cene proizvoda',
            'shipping-prices'  => 'Cene dostave',
            'excluding-tax'    => 'Bez poreza',
            'including-tax'    => 'Sa porezom',
        ],

        'default-destination-calculation' => [
            'title'            => 'Podrazumevana lokacija za obračun poreza',
            'title-info'       => 'Unesite podrazumevanu lokaciju korišćenu za obračun poreza ako druga lokacija nije dostupna.',
            'default-country'  => 'Podrazumevana država',
            'default-state'    => 'Podrazumevani region',
            'default-post-code'=> 'Podrazumevani poštanski broj',
        ],

        'shopping-cart' => [
            'title'                    => 'Korpa',
            'title-info'               => 'Opcije prikaza poreza u korpi.',
            'display-prices'           => 'Prikaz cena',
            'display-subtotal'         => 'Prikaz međuzbira',
            'display-shipping-amount'  => 'Prikaz cene dostave',
            'excluding-tax'            => 'Bez poreza',
            'including-tax'            => 'Sa porezom',
            'both'                     => 'Oba',
        ],

        'sales' => [
            'title'                    => 'Prodaja',
            'title-info'               => 'Opcije prikaza poreza u narudžbinama i računima.',
            'display-prices'           => 'Prikaz cena',
            'display-subtotal'         => 'Prikaz međuzbira',
            'display-shipping-amount'  => 'Prikaz cene dostave',
            'excluding-tax'            => 'Bez poreza',
            'including-tax'            => 'Sa porezom',
            'both'                     => 'Oba',
        ],
    ],

    'checkout' => [
        'title' => 'Podešavanja završetka kupovine',
        'info'  => 'Podesite opcije i prikaz stranice za završetak kupovine.',

        'shopping-cart' => [
            'title'                  => 'Stranica korpe',
            'info'                   => 'Opcije dostupne na stranici korpe pre završetka kupovine.',
            'guest-checkout'         => 'Omogući kupovinu gostima',
            'guest-checkout-info'    => 'Dozvoli korisnicima da izvrše kupovinu bez registracije naloga.',
            'cart-page'              => 'Prikaži stranicu korpe nakon dodavanja proizvoda',
            'cart-page-info'         => 'Automatski preusmeri korisnike na korpu nakon dodavanja proizvoda.',
            'cross-sell'             => 'Omogući unakrsnu prodaju (Cross-sell)',
            'cross-sell-info'        => 'Prikaži dodatne preporučene proizvode na stranici korpe.',
            'estimate-shipping'      => 'Omogući procenu troškova dostave',
            'estimate-shipping-info' => 'Omogućite korisnicima da procene cenu dostave pre završetka kupovine.',
        ],

        'my-cart' => [
            'title'                   => 'Podešavanja prikaza korpe',
            'info'                    => 'Prilagodite prikaz informacija u korpi kupaca.',
            'summary'                 => 'Sažetak korpe',
            'display-item-quantities' => 'Prikaži ukupan broj artikala u korpi',
            'display-number-in-cart'  => 'Prikaži broj proizvoda u korpi u zaglavlju',
        ],

        'mini-cart' => [
            'title'                 => 'Mini korpa',
            'info'                  => 'Podešavanja za mini korpu prikazanu u navigaciji sajta.',
            'display-mini-cart'     => 'Prikaži mini korpu',
            'mini-cart-offer-info'  => 'Omogućite brzo pregledanje proizvoda i iznos u mini korpi.',
        ],
    ],
],
],
],

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
                    'title' => 'Katalog',
                    'info' => 'Upravljanje proizvodima, kategorijama i atributima.',
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
                 'invoices' => [
                    'index' => [
                        'datagrid' => [
                            'id' => 'ID fakture',
                        ],
                    ],
            ],
                'refunds' => [
                    'index' => [
                        'datagrid' => [
                            'id' => 'ID povraćaja',
                        ],
                    ],
             ],
             'transactions' => [
            'index' => [
                'datagrid' => [
                    'id' => 'ID transakcije',
                ],
                'create' => [
                    'create-transaction'  => 'Kreiraj transakciju',
                    'invoice-id'          => 'ID fakture',
                    'payment-method'      => 'Metod plaćanja',
                    'amount'              => 'Iznos',
                    'save-transaction'    => 'Sačuvaj transakciju',
                    'invoice-id-invalid'  => 'Nevažeći ID fakture',
                    'amount-invalid'      => 'Nevažeći iznos',
                ],
            ],
        ],

        'booking' => [
            'index' => [
                'title' => 'Rezervacije',
                'datagrid' => [
                    'id'           => 'ID rezervacije',
                    'order-id'     => 'ID porudžbine',
                    'qty'          => 'Količina',
                    'from'         => 'Od datuma',
                    'to'           => 'Do datuma',
                    'created-date' => 'Datum kreiranja',
                ],
            ],
        ],
            ],
        ],
      
], */
  /* 'marketing' => [
        'promotions' => [
            'cart-rules' => [
                'edit' => [
                    'status' => 'Status',
                ],
            ],
        ],
    ],
 */
'catalog' => [
        'products' => [
            'update-success' => 'Proizvod je uspešno ažuriran',
            'delete-success' => 'Proizvod je uspešno obrisan',
            'create-success' => 'Proizvod je uspešno kreiran',
            'index' => [
                'title'            => 'Proizvodi',
                'create-btn'       => 'Dodaj proizvod',
                    'datagrid' => [
                        'name'             => 'Naziv',
                        'sku'              => 'SKU',
                        'attribute-family' => 'Porodica atributa',
                        'image'            => 'Slika',
                        'price'            => 'Cena',
                        'qty'              => 'Količina',
                        'id'               => 'ID',
                        'status'           => 'Status',
                        'category'         => 'Kategorija',
                        'type'             => 'Tip',
                        'active'           => 'Aktivan',
                        'disable'          => 'Neaktivan',
                        'sku-value'         => 'SKU vrednost',
                        'attribute-family-value'    => 'Porodica atributa',
                        'product-image'             => 'Slika proizvoda',
                        'out-of-stock'              => 'Nema na stanju',
                        'id-value'                  => 'ID vrednost',
                        'delete'           => 'Obriši',
                        'update-status' => 'Ažuriraj status',
                        'mass-update-success' => 'Odabrani proizvodi su uspešno ažurirani',
                        'qty-value' => 'Količina vrednost',
                    ],
                    'create' => [
                        'configurable-attributes' => 'Konfigurisivi atributi',
                        'back-btn' => 'Nazad',
                    ],

                ],
                'edit' => [
                    'preview'               => 'Pregled proizvoda',
                    'title'                   => 'Izmeni proizvod',
                    'save-btn'                => 'Sačuvaj proizvod',
                    'images' => [
                        'title'               => 'Slike proizvoda',
                        'info'                => 'Dodajte slike za proizvod.',
                    ],
                    'videos' => [
                        'title'               => 'Video snimci proizvoda',
                        'info'                => 'Dodajte video snimke za proizvod.',
                    ],
                    'channels' => [
                        'title'               => 'Kanali',
                        'info'                => 'Izaberite kanale na kojima će proizvod biti dostupan.',
                    ],
                    'types' => [
                        'simple' => [
                            'customizable-options' => [
                                'title'        => 'Prilagodljive opcije',
                                'info'         => 'Dodajte prilagodljive opcije za proizvod.',
                                'add-btn'      => 'Dodaj opciju',
                                'empty-title'  => 'Nema prilagodljivih opcija',
                                'empty-info'   => 'Dodajte opcije da biste omogućili prilagođavanje proizvoda.',
                            ],
                        ],
                        'configurable' => [
                            'title'        => 'Konfigurisivi proizvod',
                            'info'         => 'Kreirajte konfigurisivi proizvod sa više opcija.',
                            'add-btn'      => 'Dodaj konfigurisivi atribut',
                            'empty-title'  => 'Nema konfigurisivih atributa',
                            'empty-info'   => 'Dodajte konfigurisive atribute da biste omogućili varijacije proizvoda.',
                            'edit-btn'    => 'Izmeni konfigurisivi atribut',
                            'delete-btn'  => 'Obriši konfigurisivi atribut',
                            'sku' => 'SKU',
                        ],
                    ],
                    'links' => [
                    'empty-title' => 'Nema povezanih proizvoda',
                    'add-btn'     => 'Dodaj povezani proizvod',
                        'related-products' => [
                            'title'        => 'Povezani proizvodi',
                            'info'         => 'Izaberite proizvode koji će biti povezani.',
                            'add-btn'      => 'Dodaj povezani proizvod',
                            'empty-title'  => 'Nema povezanih proizvoda',
                            'empty-info'   => 'Nema povezanih proizvoda za ovaj proizvod.',
                        ],
                        'up-sells' => [
                            'title'        => 'Preporučeni skuplji proizvodi (Up-sell)',
                            'info'         => 'Izaberite proizvode za up-sell preporuku.',
                            'add-btn'      => 'Dodaj up-sell proizvod',
                            'empty-title'  => 'Nema up-sell proizvoda',
                            'empty-info'   => 'Nema up-sell proizvoda za ovaj proizvod.',
                        ],
                        'cross-sells' => [
                            'title'        => 'Dodatni proizvodi (Cross-sell)',
                            'info'         => 'Izaberite proizvode za cross-sell preporuku.',
                            'add-btn'      => 'Dodaj cross-sell proizvod',
                            'empty-title'  => 'Nema cross-sell proizvoda',
                            'empty-info'   => 'Nema cross-sell proizvoda za ovaj proizvod.',
                        ],
                    ],
                    'price' => [
                        'group' => [
                            'title'            => 'Grupne cene',
                            'create-btn'       => 'Kreiraj grupnu cenu',
                            'add-group-price'  => 'Dodaj grupnu cenu',
                            'empty-info'       => 'Nema grupnih cena za ovaj proizvod.',
                        ],
                    ],
                    'inventories' => [
                        'pending-ordered-qty'  => 'Količina na čekanju (narudžbina)',
                    ],
                    'categories' => [
                        'title'                => 'Kategorije proizvoda',
                    ],
                    'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'update-create' => [
                                'title'       => 'Ažuriraj/Kreiraj prilagodljivu opciju',
                                'name'        => 'Naziv opcije',
                                'type'        => 'Tip opcije',
                                'is-required' => 'Obavezno',
                                'yes'         => 'Da',
                                'no'          => 'Ne',
                                'save-btn'    => 'Sačuvaj opciju',
                                'name is not valid' => 'Naziv opcije nije validan',
                            ],
                                'title'       => 'Prilagodljive opcije',
                                'info'        => 'Dodajte prilagodljive opcije proizvodu kao što su veličina, boja ili drugi atributi koje kupac može birati.',
                                'add-btn'     => 'Dodaj prilagodljivu opciju',
                                'empty-title' => 'Nema prilagodljivih opcija',
                                'empty-info'  => 'Trenutno nema dodatih prilagodljivih opcija za ovaj proizvod.',

                            'option' => [
                                'types' => [
                                    'text'        => ['title' => 'Tekstualno polje'],
                                    'textarea'    => ['title' => 'Tekstualno područje'],
                                    'checkbox'    => ['title' => 'Polje za potvrdu (checkbox)'],
                                    'radio'       => ['title' => 'Radio dugme'],
                                    'select'      => ['title' => 'Padajući meni (select)'],
                                    'multiselect' => ['title' => 'Višestruki odabir (multiselect)'],
                                    'date'        => ['title' => 'Datum'],
                                    'datetime'    => ['title' => 'Datum i vreme'],
                                    'time'        => ['title' => 'Vreme'],
                                    'file'        => ['title' => 'Datoteka'],
                                ],
                                    ],
                                ],
                            ],
                    ],

                    'price' => [
                        'group' => [
                                'title'           => 'Grupne cene',
                                'create-btn'      => 'Dodaj grupnu cenu',
                                'add-group-price' => 'Dodaj cenu za grupu kupaca',
                                'empty-info'      => 'Trenutno nema definisanih grupnih cena za ovaj proizvod.',
                            'create' => [
                                'create-title'  => 'Kreiraj grupnu cenu',
                                'customer-group'=> 'Grupa kupaca',
                                'all-groups'    => 'Sve grupe',
                                'qty'           => 'Količina',
                                'qty is not valid' => 'Količina nije validna',
                                'price-type'    => 'Tip cene',
                                'fixed'         => 'Fiksna cena',
                                'discount'      => 'Popust (%)',
                                'price'         => 'Cena',
                                'save-btn'      => 'Sačuvaj grupnu cenu',
                            ],
                        ],
                    ],
                ],
                    
                ],
   
            
    

        'categories' => [
            'update-success' => 'Kategorija je uspešno ažurirana',
            'index' => [
                'title'     => 'Kategorije',
                'add-btn'   => 'Dodaj kategoriju',
                'datagrid' => [
                    'id'             => 'ID',
                    'name'           => 'Naziv',
                    'position'       => 'Pozicija',
                    'status'         => 'Status',
                    'active'         => 'Aktivna',
                    'inactive'       => 'Neaktivna',
                    'delete'         => 'Obriši',
                    'update-status'  => 'Ažuriraj status',
                ],
            ],

            'edit' => [
                'select-parent-category' => 'Izaberite nadređenu kategoriju',
                'title'                   => 'Izmeni kategoriju',
                'back-btn'                => 'Nazad',
                'save-btn'                => 'Sačuvaj izmene',
                'general'                 => 'Opšte',
                'name'                    => 'Naziv',
                'description-and-images'  => 'Opis i slike',
                'description'             => 'Opis',
                'logo'                    => 'Logo',
                'logo-size'               => 'Optimalna veličina 110x110',
                'banner'                  => 'Baner',
                'banner-size'             => 'Optimalna veličina 1920x400',
                'seo-details'             => 'SEO detalji',
                'meta-title'              => 'Meta naslov',
                'slug'                    => 'Slug',
                'meta-keywords'           => 'Meta ključne reči',
                'meta-description'        => 'Meta opis',
                'settings'                => 'Podešavanja',
                'position'                => 'Pozicija',
                'display-mode'            => 'Način prikaza',
                'products-and-description'=> 'Proizvodi i opis',
                'products-only'           => 'Samo proizvodi',
                'description-only'        => 'Samo opis',
                'visible-in-menu'         => 'Vidljiva u meniju',
                'filterable-attributes'   => 'Atributi za filtriranje',
            ],
        ],

        'attributes' => [
            'update-success' => 'Atribut je uspešno ažuriran',
            'create-success' => 'Atribut je uspešno kreiran',
            'index' => [
                'title'      => 'Atributi',
                'create-btn' => 'Kreiraj atribut',
                'datagrid' => [
                    'id'              => 'ID',
                    'code'            => 'Kod',
                    'name'            => 'Naziv',
                    'type'            => 'Tip',
                    'required'        => 'Obavezan',
                    'unique'          => 'Jedinstven',
                    'locale-based'    => 'Zavisno od jezika',
                    'channel-based'   => 'Zavisno od kanala',
                    'created-at'      => 'Kreiran',
                    'text'            => 'Tekst',
                    'textarea'        => 'Višelinijski tekst',
                    'price'           => 'Cena',
                    'boolean'         => 'Da/Ne',
                    'select'          => 'Izbor',
                    'true'            => 'Da',
                    'false'           => 'Ne',
                    'delete'          => 'Obriši',
                ],
            ],

            'edit' => [
                'input-validation' => 'Unesite validne vrednosti',
                'title'                  => 'Izmeni atribut',
                'back-btn'               => 'Nazad',
                'save-btn'               => 'Sačuvaj izmene',
                'label'                  => 'Oznaka',
                'admin'                  => 'Admin',
                'general'                => 'Opšte',
                'code'                   => 'Kod',
                'type'                   => 'Tip',
                'text'                   => 'Tekst',
                'textarea'               => 'Višelinijski tekst',
                'price'                  => 'Cena',
                'boolean'                => 'Da/Ne',
                'checkbox'               => 'Checkbox',
                'select'                 => 'Izbor',
                'multiselect'            => 'Višestruki izbor',
                'date'                   => 'Datum',
                'datetime'               => 'Datum i vreme',
                'image'                  => 'Slika',
                'file'                   => 'Fajl',
                'default-value'          => 'Podrazumevana vrednost',
                'validations'            => 'Validacije',
                'is-required'            => 'Obavezan',
                'is-unique'              => 'Jedinstven',
                'configuration'          => 'Konfiguracija',
                'value-per-locale'       => 'Zavisno od jezika',
                'value-per-channel'      => 'Zavisno od kanala',
                'is-filterable'          => 'Filterabilan',
                'is-configurable'        => 'Konfigurabilan',
                'is-visible-on-front'    => 'Vidljiv na frontendu',
                'is-comparable'          => 'Može se porediti',
                'options' => 'Opcije',
                'add-attribute-options' => 'Dodaj opcije atributa',
                'add-options-info' => 'Dodajte opcije za atribut. Na primer, za atribut "Boja", dodajte opcije kao što su "Crvena", "Plava", itd.',
                'add-row'                 => 'Dodaj red',
                'add-option'             => 'Dodaj opciju',
                'admin-name'             => 'Admin naziv',
                'option-deleted' => 'Opcija je uspešno obrisana',
                'option' => [
                    'save-btn' => 'Sačuvaj opciju',
                ],
            ],
            'create' => [
                'options'               => 'Opcije',
                'add-attribute-options' => 'Dodaj opciju atributa',
                'add-options-info' => 'Dodajte opcije za atribut. Na primer, za atribut "Boja", dodajte opcije kao što su "Crvena", "Plava", itd.',
                'add-row'                 => 'Dodaj red',
                'title'                  => 'Kreiraj atribut',
                'add-option'             => 'Dodaj opciju',
                'back-btn'               => 'Nazad',
                'save-btn'               => 'Sačuvaj atribut',
                'label'                  => 'Oznaka',
                'admin'                  => 'Admin',
                'general'                => 'Opšte',
                'code'                   => 'Kod',
                'type'                   => 'Tip',
                'text'                   => 'Tekst',
                'textarea'               => 'Višelinijski tekst',
                'price'                  => 'Cena',
                'boolean'                => 'Da/Ne',
                'checkbox'               => 'Checkbox',
                'select'                 => 'Izbor',
                'multiselect'            => 'Višestruki izbor',
                'date'                   => 'Datum',
                'datetime'               => 'Datum i vreme',
                'image'                  => 'Slika',
                'file'                   => 'Fajl',
                'default-value'          => 'Podrazumevana vrednost',
                'validations'            => 'Validacije',
                'is-required'            => 'Obavezan',
                'is-unique'              => 'Jedinstven',
                'configuration'          => 'Konfiguracija',
                'value-per-locale'       => 'Zavisno od jezika',
                'value-per-channel'      => 'Zavisno od kanala',
                'is-filterable'          => 'Filterabilan',
                'is-configurable'        => 'Konfigurabilan',
                'is-visible-on-front'    => 'Vidljiv na frontendu',
                'is-comparable'          => 'Može se porediti',
                'option' => [
                    'save-btn' => 'Sačuvaj opciju',
                ],

            ],
        ],

        'families' => [
            'update-success' => 'Porodica atributa je uspešno ažurirana',
            'create-success' => 'Porodica atributa je uspešno kreirana',
            'edit' => [
                'title'                   => 'Izmeni porodicu atributa',
                'back-btn'                => 'Nazad',
                'save-btn'                => 'Sačuvaj porodicu',
                'groups'                  => 'Grupe atributa',
                'groups-info'             => 'Organizujte atribute u grupe.',
                'delete-group-btn'        => 'Obriši grupu',
                'add-group-btn'           => 'Dodaj novu grupu',
                'main-column'             => 'Glavna kolona',
                'edit-group-info'         => 'Izmeni informacije grupe',
                'unassigned-attributes'   => 'Nedodeljeni atributi',
                'unassigned-attributes-info' => 'Lista atributa koji nisu dodeljeni grupama.',
                'general'                 => 'Opšte informacije',
                'code'                    => 'Kod porodice',
                'name'                    => 'Naziv porodice',
                'add-group-title'         => 'Dodaj grupu atributa',
                'column'                  => 'Kolona',
                'right-column'            => 'Desna kolona',
            ],
            'create' => [
                'select-group'            => 'Izaberite grupu',
                'title'                   => 'Kreiraj porodicu atributa',
                'back-btn'                => 'Nazad',
                'save-btn'                => 'Sačuvaj porodicu',
                'general'                 => 'Opšte informacije',
                'main-column'           => 'Glavna kolona',
                'right-column'          => 'Desna kolona',
                'code'                    => 'Kod porodice',
                'enter-code'             => 'Unesite kod porodice',
                'enter-name'            => 'Unesite naziv porodice',
                'name'                    => 'Naziv porodice',
                'add-group-btn'           => 'Dodaj grupu atributa',
                'delete-group-btn'        => 'Obriši grupu',
                'groups-info'               => 'Organizujte atribute u grupe za lakše upravljanje.',
                'groups'                    => 'Grupe atributa',
                'unassigned-attributes' => 'Nedodeljeni atributi',
                'unassigned-attributes-info' => 'Lista atributa koji nisu dodeljeni grupama.',
                'edit-group-info' => 'Izmeni informacije grupe',
                'column' => 'Kolona',
                'add-group-title' => 'Dodaj grupu atributa',
                'label' => 'Oznaka',
                'admin' => 'Admin',



            ],
            'index' => [
                'title'   => 'Porodice atributa',
                'add'     => 'Dodaj porodicu',
                'datagrid'=> [
                    'id'   => 'ID',
                    'code' => 'Kod',
                    'name' => 'Naziv',
                ],
            ],
        ],
    ],
'cms' => [
        'index' => [
            'title'          => 'CMS stranice',
            'create-btn'     => 'Kreiraj CMS stranicu',

            'datagrid' => [
                'id'           => 'ID',
                'page-title'   => 'Naslov stranice',
                'url-key'      => 'URL ključ',
            ],
        ],

        'create' => [
            'general'  => 'Opšte informacije',
            'channels' => 'Kanali',
        ],

        'edit' => [
            'title'             => 'Izmeni CMS stranicu',
            'back-btn'          => 'Nazad',
            'preview-btn'       => 'Pregledaj',
            'save-btn'          => 'Sačuvaj izmene',
            'description'       => 'Opis',
            'content'           => 'Sadržaj',
            'seo'               => 'SEO podešavanja',
            'page-title'        => 'Naslov stranice',
            'meta-title'        => 'Meta naslov',
            'url-key'           => 'URL ključ',
            'meta-keywords'     => 'Meta ključne reči',
            'meta-description'  => 'Meta opis',
        ],
],

'marketing' => [
    'promotions' => [
            'index' => [
                'catalog-rule-title' => 'Kataloška pravila',
                'cart-rule-title'    => 'Pravila za korpu',
                        ],
                        'catalog-rules' => [
                            'index' => [
                                'title'      => 'Kataloška pravila',
                                'create-btn' => 'Dodaj pravilo',
                                'datagrid'   => [
                                    'id'       => 'ID',
                                    'name'     => 'Naziv',
                                    'start'    => 'Početak',
                                    'end'      => 'Kraj',
                                    'status'   => 'Status',
                                    'priority' => 'Prioritet',
                                    'active'        => 'Aktivno',
                                    'inactive'      => 'Neaktivno',
                                ],
                            ],

                            'create' => [
                                'title'                 => 'Kreiraj kataloško pravilo',
                                'back-btn'              => 'Nazad',
                                'save-btn'              => 'Sačuvaj pravilo',
                                'general'               => 'Opšte',
                                'name'                  => 'Naziv',
                                'description'           => 'Opis',
                                'conditions'            => 'Uslovi',
                                'all-conditions-true'   => 'Svi uslovi tačni',
                                'any-conditions-true'   => 'Bilo koji uslov tačan',
                                'add-condition'         => 'Dodaj uslov',
                                'actions'               => 'Akcije',
                                'action-type'           => 'Tip akcije',
                                'percentage-product-price' => 'Procenat cene proizvoda',
                                'fixed-amount'          => 'Fiksni iznos',
                                'discount-amount'       => 'Iznos popusta',
                                'end-other-rules'       => 'Zaustavi ostala pravila',
                                'no'                    => 'Ne',
                                'yes'                   => 'Da',
                                'settings'              => 'Podešavanja',
                                'priority'              => 'Prioritet',
                                'channels'              => 'Kanali',
                                'customer-groups'       => 'Grupe kupaca',
                                'status'                => 'Status',
                                'marketing-time'        => 'Trajanje promocije',
                                'from'                  => 'Datum od',
                                'to'                    => 'Datum do',
                                'name is not valid'         => 'Naziv nije validan',
                                'channels is not valid'     => 'Kanali nisu validni',
                                'customer-groups is not valid' => 'Grupe kupaca nisu validne',
                            ],
                        ],

                        'cart-rules' => [
                                'index' => [
                                    'title'      => 'Pravila za korpu',
                                    'create-btn' => 'Dodaj pravilo',
                                    'datagrid'   => [
                                        'id'          => 'ID',
                                        'name'        => 'Naziv',
                                        'coupon-code' => 'Kod kupona',
                                        'start'       => 'Početak',
                                        'end'         => 'Kraj',
                                        'status'      => 'Status',
                                        'priority'    => 'Prioritet',
                                        'active'        => 'Aktivno',
                                        'inactive'      => 'Neaktivno',
                                    ],
                                ],

                                    'create' => [
                                        'title'                               => 'Kreiraj pravilo za korpu',
                                        'save-btn'                            => 'Sačuvaj pravilo',
                                        'general'                             => 'Opšte',
                                        'name'                                => 'Naziv',
                                        'description'                         => 'Opis',
                                        'coupon-type'                         => 'Tip kupona',
                                        'no-coupon'                           => 'Bez kupona',
                                        'specific-coupon'                     => 'Specifičan kupon',
                                        'uses-per-customer'                   => 'Korišćenja po kupcu',
                                        'uses-per-customer-control-info'      => 'Ograničenje korišćenja po kupcu',
                                        'conditions'                          => 'Uslovi',
                                        'condition-type'                      => 'Tip uslova',
                                        'all-conditions-true'                 => 'Svi uslovi tačni',
                                        'any-conditions-true'                 => 'Bilo koji uslov tačan',
                                        'add-condition'                       => 'Dodaj uslov',
                                        'actions'                             => 'Akcije',
                                        'action-type'                         => 'Tip akcije',
                                        'percentage-product-price'            => 'Procenat cene proizvoda',
                                        'fixed-amount'                        => 'Fiksni iznos',
                                        'fixed-amount-whole-cart'             => 'Fiksni iznos za celu korpu',
                                        'buy-x-get-y-free'                    => 'Kupi X, dobij Y besplatno',
                                        'discount-amount'                     => 'Iznos popusta',
                                        'maximum-quantity-allowed-to-be-discounted' => 'Maksimalna količina sa popustom',
                                        'buy-x-quantity'                      => 'Količina X za kupovinu',
                                        'apply-to-shipping'                   => 'Primeni na isporuku',
                                        'no'                                  => 'Ne',
                                        'yes'                                 => 'Da',
                                        'free-shipping'                       => 'Besplatna isporuka',
                                        'end-of-other-rules'                  => 'Zaustavi ostala pravila',
                                        'settings'                            => 'Podešavanja',
                                        'priority'                            => 'Prioritet',
                                        'channels'                            => 'Kanali',
                                        'customer-groups'                     => 'Grupe kupaca',
                                        'status'                              => 'Status',
                                        'marketing-time'                      => 'Trajanje promocije',
                                        'from'                                => 'Datum od',
                                        'to'                                  => 'Datum do',
                                        'name is not valid'                   => 'Naziv nije validan',
                                        'channels is not valid'               => 'Kanali nisu validni',
                                        'customer-groups is not valid'        => 'Grupe kupaca nisu validne',
                                    ],
                                    'edit'   => [
                                        'status' => 'Status',
                                    ],
                                ],
                     ],
    'communications' => [
            'templates' => [
                'index' => [
                    'title'      => 'Email šabloni',
                    'create-btn' => 'Dodaj šablon',

                    'datagrid' => [
                        'id'     => 'ID',
                        'name'   => 'Naziv šablona',
                        'status' => 'Status',
                        'active' => 'Aktivan',
                        'inactive' => 'Neaktivan',
                        'draft'  => 'Nacrt',
                    ],
                ],

                'create' => [
                    'title'         => 'Kreiraj email šablon',
                    'back-btn'      => 'Nazad',
                    'save-btn'      => 'Sačuvaj šablon',
                    'general'       => 'Opšte informacije',
                    'content'       => 'Sadržaj',
                    'name'          => 'Naziv',
                    'status'        => 'Status',
                    'select-status' => 'Izaberi status',
                    'active'        => 'Aktivan',
                    'inactive'      => 'Neaktivan',
                    'draft'         => 'Nacrt',

                    'name is not valid'    => 'Naziv nije validan',
                    'status is not valid'  => 'Status nije validan',
                    'content is not valid' => 'Sadržaj nije validan',
                ],
            ],

            'events' => [
                'edit-error' => 'Greška pri uređivanju događaja',
                'index' => [
                    'title'      => 'Marketing događaji',
                    'create-btn' => 'Dodaj događaj',

                    'datagrid' => [
                        'id'   => 'ID',
                        'name' => 'Naziv događaja',
                        'date' => 'Datum',
                    ],
                    
                ],
                 /* 'create' => [ 
                        'title'                     => 'Kreiraj događaj',
                        'name'                      => 'Naziv',
                        'description'               => 'Opis',
                        'date'                      => 'Datum',
                        'save-btn'                  => 'Sačuvaj događaj',

                        'name is not valid'         => 'Naziv nije validan',
                        'description is not valid'  => 'Opis nije validan',
                        'date is not valid'         => 'Datum nije validan',
                    ],
 */
               
            ],

            'campaigns' => [
                'create' => [
                    'title'               => 'Kreiraj kampanju',
                    'back-btn'            => 'Nazad',
                    'save-btn'            => 'Sačuvaj kampanju',
                    'general'             => 'Opšte informacije',
                    'name'                => 'Naziv kampanje',
                    'subject'             => 'Naslov (subject)',
                    'event'               => 'Događaj',
                    'select-event'        => 'Izaberi događaj',
                    'email-template'      => 'Email šablon',
                    'select-template'     => 'Izaberi šablon',
                    'setting'             => 'Podešavanja',
                    'channel'             => 'Kanal',
                    'select-channel'      => 'Izaberi kanal',
                    'customer-group'      => 'Grupa kupaca',
                    'select-group'        => 'Izaberi grupu kupaca',
                    'status'              => 'Status',

                    'name is not valid'             => 'Naziv nije validan',
                    'subject is not valid'          => 'Naslov nije validan',
                    'event is not valid'            => 'Događaj nije validan',
                    'email-template is not valid'   => 'Email šablon nije validan',
                    'channel is not valid'          => 'Kanal nije validan',
                    'customer-group is not valid'   => 'Grupa kupaca nije validna',
                ],
            ],

            'subscribers' => [
                'index' => [
                    'title' => 'Pretplatnici na newsletter',

                    'datagrid' => [
                        'id'         => 'ID',
                        'subscribed' => 'Pretplaćen',
                        'email'      => 'Email',
                        'true'       => 'Da',
                    ],

                    'edit' => [
                        'title'      => 'Izmeni pretplatnika',
                        'email'      => 'Email adresa',
                        'subscribed' => 'Pretplaćen',
                        'true'       => 'Da',
                        'false'      => 'Ne',
                        'save'       => 'Sačuvaj izmene',
                    ],
                ],
            ],
        ],
    'search-seo' => [

    'url-rewrites' => [
        'index' => [
            'title'         => 'URL preusmeravanja',
            'create-btn'    => 'Dodaj preusmeravanje',

            'datagrid' => [
                'id'             => 'ID',
                'for'            => 'Za',
                'request-path'   => 'Zahtevana putanja',
                'target-path'    => 'Ciljna putanja',
                'redirect-type'  => 'Tip preusmeravanja',
                'locale'         => 'Jezik',
            ],

            'create' => [
                'title'                  => 'Kreiraj preusmeravanje URL-a',
                'for'                    => 'Za',
                'product'                => 'Proizvod',
                'category'               => 'Kategoriju',
                'cms-page'               => 'CMS stranicu',
                'request-path'           => 'Zahtevana putanja',
                'target-path'            => 'Ciljna putanja',
                'redirect-type'          => 'Tip preusmeravanja',
                'temporary-redirect'     => 'Privremeno preusmeravanje (302)',
                'permanent-redirect'     => 'Trajno preusmeravanje (301)',
                'locale'                 => 'Jezik',
                'save-btn'               => 'Sačuvaj preusmeravanje',

                'for is not valid'              => 'Izabrana opcija "za" nije validna',
                'request-path is not valid'     => 'Zahtevana putanja nije validna',
                'target-path is not valid'      => 'Ciljna putanja nije validna',
                'redirect-type is not valid'    => 'Tip preusmeravanja nije validan',
                'locale is not valid'           => 'Izabrani jezik nije validan',
            ],
            'edit' => [
                'title'                  => 'Izmeni preusmeravanje URL-a',
                'for'                    => 'Za',
                'request-path'           => 'Zahtevana putanja',
                'target-path'            => 'Ciljna putanja',
                'redirect-type'          => 'Tip preusmeravanja',
                'temporary-redirect'     => 'Privremeno preusmeravanje (302)',
                'permanent-redirect'     => 'Trajno preusmeravanje (301)',
                'locale'                 => 'Jezik',
                'save-btn'               => 'Sačuvaj izmene',

                'for is not valid'              => 'Izabrana opcija "za" nije validna',
                'request-path is not valid'     => 'Zahtevana putanja nije validna',
                'target-path is not valid'      => 'Ciljna putanja nije validna',
                'redirect-type is not valid'    => 'Tip preusmeravanja nije validan',
                'locale is not valid'           => 'Izabrani jezik nije validan',
            ],
        ],
    ],

    'search-terms' => [
        'index' => [
            'title'      => 'Termini pretrage',
            'create-btn' => 'Dodaj termin pretrage',

            'datagrid' => [
                'id'            => 'ID',
                'search-query'  => 'Upit za pretragu',
                'results'       => 'Rezultati',
                'uses'          => 'Broj korišćenja',
                'redirect-url'  => 'URL za preusmerenje',
                'channel'       => 'Kanal',
                'locale'        => 'Jezik',
            ],

            'create' => [
                'title'          => 'Dodaj termin pretrage',
                'search-query'   => 'Upit za pretragu',
                'redirect-url'   => 'URL za preusmerenje',
                'channel'        => 'Kanal',
                'locale'         => 'Jezik',
                'save-btn'       => 'Sačuvaj termin',

                'search-query is not valid' => 'Upit za pretragu nije validan',
                'channel is not valid'      => 'Kanal nije validan',
                'locale is not valid'       => 'Jezik nije validan',
            ],
        ],
    ],

    'search-synonyms' => [
        'index' => [
            'title'      => 'Sinonimi za pretragu',
            'create-btn' => 'Dodaj sinonime',

            'datagrid' => [
                'id'    => 'ID',
                'name'  => 'Naziv',
                'terms' => 'Termini',
            ],

            'create' => [
                'title'        => 'Kreiraj sinonime za pretragu',
                'name'         => 'Naziv sinonima',
                'terms'        => 'Termini',
                'terms-info'   => 'Unesite termine razdvojene zarezima',
                'save-btn'     => 'Sačuvaj sinonime',

                'name is not valid'  => 'Naziv sinonima nije validan',
                'terms is not valid' => 'Uneti termini nisu validni',
            ],
        ],
    ],

    'sitemaps' => [
        'index' => [
            'title'      => 'Sitemap mape sajta',
            'create-btn' => 'Dodaj sitemap',

            'datagrid' => [
                'id'             => 'ID',
                'file-name'      => 'Naziv fajla',
                'path'           => 'Putanja',
                'link-for-google'=> 'Link za Google',
            ],

            'create' => [
                'title'           => 'Kreiraj sitemap',
                'file-name'       => 'Naziv fajla',
                'file-name-info'  => 'Primer: sitemap.xml',
                'path'            => 'Putanja',
                'path-info'       => 'Putanja na kojoj će biti smeštena sitemap mapa',
                'save-btn'        => 'Sačuvaj sitemap',

                'file-name is not valid' => 'Naziv fajla nije validan',
                'path is not valid'      => 'Putanja nije validna',
            ],
        ],
    ],
],

    ],


'reporting' => [
    'sales' => [
        'index' => [
            'title'                             => 'Izveštaj o prodaji',
            'total-sales'                       => 'Ukupna prodaja',
            'view-details'                      => 'Prikaži detalje',
            'sales-over-time'                   => 'Prodaja kroz vreme',
            'purchase-funnel'                   => 'Levak prodaje',
            'total-visits'                      => 'Ukupno poseta',
            'total-visits-info'                 => 'Broj svih poseta prodavnici.',
            'product-views'                     => 'Pregledi proizvoda',
            'product-views-info'                => 'Broj pregledanih proizvoda.',
            'added-to-cart'                     => 'Dodato u korpu',
            'added-to-cart-info'                => 'Broj proizvoda dodatih u korpu.',
            'purchased'                         => 'Kupljeno',
            'purchased-info'                    => 'Broj prodatih proizvoda.',
            'abandoned-carts'                   => 'Napuštene korpe',
            'abandoned-revenue'                 => 'Prihod od napuštenih korpi',
            'abandoned-rate'                    => 'Stopa napuštanja korpi',
            'abandoned-products'                => 'Proizvodi u napuštenim korpama',
            'total-orders'                      => 'Ukupno porudžbina',
            'orders-over-time'                  => 'Porudžbine kroz vreme',
            'average-sales'                     => 'Prosečna prodaja',
            'average-order-value-over-time'     => 'Prosečna vrednost porudžbine kroz vreme',
            'tax-collected'                     => 'Prikupljen porez',
            'tax-collected-over-time'           => 'Prikupljen porez kroz vreme',
            'top-tax-categories'                => 'Najčešće kategorije poreza',
            'shipping-collected'                => 'Prihod od isporuke',
            'shipping-collected-over-time'      => 'Prihod od isporuke kroz vreme',
            'top-shipping-methods'              => 'Najčešće korišćeni načini isporuke',
            'refunds'                           => 'Povraćaji novca',
            'refunds-over-time'                 => 'Povraćaji novca kroz vreme',
            'top-payment-methods'               => 'Najčešće korišćeni načini plaćanja',
            'interval'                          => 'Interval',
            'orders'                            => 'Porudžbine',
            'total'                             => 'Ukupno',
        ],
    ],

    'customers' => [
        'index' => [
            'title'                             => 'Izveštaj o kupcima',
            'total-customers'                   => 'Ukupno kupaca',
            'view-details'                      => 'Prikaži detalje',
            'customers-over-time'               => 'Kupci kroz vreme',
            'customers-with-most-sales'         => 'Kupci sa najvećom prodajom',
            'customers-with-most-orders'        => 'Kupci sa najviše porudžbina',
            'customers-traffic'                 => 'Promet kupaca',
            'total-visitors'                    => 'Ukupno posetilaca',
            'unique-visitors'                   => 'Jedinstveni posetioci',
            'traffic-over-week'                 => 'Promet tokom nedelje',
            'top-customer-groups'               => 'Najčešće grupe kupaca',
            'customers-with-most-reviews'       => 'Kupci sa najviše recenzija',
            'customers'                         => 'Kupci',
            'name'                              => 'Ime',
            'email'                             => 'Email',
            'orders'                            => 'Porudžbine',
        ],
    ],

    'products' => [
        'index' => [
            'title'                             => 'Izveštaj o proizvodima',
            'total-sold-quantities'             => 'Ukupno prodatih količina',
            'quantities-sold-over-time'         => 'Prodate količine kroz vreme',
            'total-products-added-to-wishlist'  => 'Ukupno dodatih u listu želja',
            'products-added-over-time'          => 'Dodavanje proizvoda u listu želja kroz vreme',
            'top-selling-products-by-revenue'   => 'Najprodavaniji proizvodi prema prihodu',
            'top-selling-products-by-quantity'  => 'Najprodavaniji proizvodi po količini',
            'products-with-most-reviews'        => 'Proizvodi sa najviše recenzija',
            'products-with-most-visits'         => 'Najposećeniji proizvodi',
            'last-search-terms'                 => 'Poslednji termini pretrage',
            'top-search-terms'                  => 'Najčešći termini pretrage',
            'interval'                          => 'Interval',
            'total'                             => 'Ukupno',
            'view-details'                      => 'Prikaži detalje',
        ],
    ],

    'view' => [
        'back-btn' => 'Nazad',
        'day'      => 'Dan',
        'month'    => 'Mesec',
        'year'     => 'Godina',
    ],

    'empty' => [
        'title' => 'Nema dostupnih podataka',
        'info'  => 'Nema podataka za prikazivanje za izabrani period.',
    ],
],

'settings' => [
    
    'locales' => [
        'index' => [
            'title'          => 'Jezici',
            'create-btn'     => 'Dodaj jezik',
            'logo-size'         => 'Preporučena veličina: 30x20 px',

            'datagrid' => [
                'id'        => 'ID',
                'code'      => 'Kod jezika',
                'name'      => 'Naziv jezika',
                'direction' => 'Smer teksta',
                'ltr'       => 'S leva na desno',
                'rtl'       => 'S desna na levo',
            ],

            'edit' => [
                'title'         => 'Izmeni jezik',
            ],

            'create' => [
                'code'              => 'Kod jezika',
                'name'              => 'Naziv jezika',
                'direction'         => 'Smer teksta',
                'select-direction'  => 'Izaberi smer teksta',
                'ltr'               => 'S leva na desno (LTR)',
                'rtl'               => 'S desna na levo (RTL)',
                'locale-logo'       => 'Logo jezika',
                'title'          => 'Jezici',
                'save-btn'          => 'Sačuvaj jezik',
                ],
            ],
        ],
    'roles' => [
                'create' => [
                    'title'               => 'Kreiraj novu ulogu',
                    'back-btn'            => 'Nazad',
                    'save-btn'            => 'Sačuvaj ulogu',
                    'access-control'      => 'Kontrola pristupa',
                    'permissions'         => 'Dozvole',
                    'custom'              => 'Prilagođeno',
                    'all'                 => 'Sve',
                    'general'             => 'Opšte',
                    'name'                => 'Naziv uloge',
                    'name is not valid'   => 'Naziv uloge nije validan',
                    'description'         => 'Opis',
                    'description is not valid' => 'Opis nije validan',
                ],

                'index' => [
                    'title'               => 'Uloge',
                    'create-btn'          => 'Dodaj ulogu',
                    'datagrid'            => [
                        'id'              => 'ID',
                        'name'            => 'Naziv',
                        'permission-type' => 'Tip dozvole',
                    ],
                ],

                'edit' => [
                    'title'          => 'Izmeni ulogu',
                    'back-btn'       => 'Nazad',
                    'save-btn'       => 'Sačuvaj izmene',
                    'access-control' => 'Kontrola pristupa',
                    'permissions'    => 'Dozvole',
                    'custom'         => 'Prilagođeno',
                    'all'            => 'Sve',
                    'general'        => 'Opšte',
                    'name'           => 'Naziv uloge',
                    'description'    => 'Opis',
                ],
            ],
    
    'currencies' => [
        'index' => [
            'title'      => 'Valute',
            'create-btn' => 'Dodaj valutu',
            'update-success' => 'Valuta je uspešno ažurirana.',

            'datagrid' => [
                'id'   => 'ID',
                'name' => 'Naziv valute',
                'code' => 'Kod valute',
            ],

            'edit' => [
                'title' => 'Izmeni valutu',
            ],

            'create' => [
                'title'               => 'Kreiraj novu valutu',
                'code'                => 'Kod valute',
                'name'                => 'Naziv valute',
                'symbol'              => 'Simbol',
                'decimal'             => 'Broj decimala',
                'group-separator'     => 'Separator hiljada',
                'group-separator-note'=> 'Znak koji odvaja hiljade, npr. "," za 1,000',
                'decimal-separator'   => 'Decimalni separator',
                'decimal-separator-note' => 'Znak koji odvaja decimale, npr. "." za 0.00',
                'currency-position'   => 'Pozicija simbola valute',

                'select-position' => 'Odaberite poziciju',

                'position-options' => [
                    'left'              => 'Levo od iznosa (npr. €100)',
                    'left-with-space'   => 'Levo sa razmakom (npr. € 100)',
                    'right'             => 'Desno od iznosa (npr. 100€)',
                    'right-with-space'  => 'Desno sa razmakom (npr. 100 €)',
                ],

                'save-btn' => 'Sačuvaj valutu',
            ],
        ],
    ],

    'exchange-rates' => [
        'index' => [
            'title'            => 'Kursne liste',
            'update-rates'     => 'Ažuriraj kurseve',
            'update-success'   => 'Kursne liste su uspešno ažurirane.',

            'create-btn' => 'Dodaj kurs',

            'datagrid' => [
                'id'            => 'ID',
                'currency-name' => 'Naziv valute',
                'exchange-rate' => 'Kurs',
            ],

            'create' => [
                'title'                  => 'Dodaj novi kurs',
                'source-currency'        => 'Osnovna valuta',
                'target-currency'        => 'Ciljna valuta',
                'select-target-currency' => 'Izaberite ciljnu valutu',
                'target-currency-invalid'=> 'Ciljna valuta nije validna.',
                'rate'                   => 'Kurs',
                'save-btn'               => 'Sačuvaj kurs',
            ],
        ],
    ],
    'inventory-sources' => [
        'update-success' => 'Izvor zaliha je uspešno ažuriran.',
        'index' => [
            'title'      => 'Izvori zaliha',

            'create-btn' => 'Dodaj novi izvor',

            'datagrid' => [
                'id'       => 'ID',
                'code'     => 'Kod',
                'name'     => 'Naziv',
                'priority' => 'Prioritet',
                'status'   => 'Status',
                'active'   => 'Aktivan',
                'inactive' => 'Neaktivan',
            ],
        ],

        'edit' => [
            'title'           => 'Uredi izvor zaliha',
            'back-btn'        => 'Nazad',
            'save-btn'        => 'Sačuvaj izmene',

            'general'         => 'Opšte informacije',
            'code'            => 'Kod',
            'name'            => 'Naziv',
            'description'     => 'Opis',

            'contact-info'    => 'Kontakt informacije',
            'contact-name'    => 'Ime kontakta',
            'contact-email'   => 'Email kontakta',
            'contact-number'  => 'Kontakt telefon',
            'contact-fax'     => 'Faks',

            'source-address'  => 'Adresa izvora',
            'country'         => 'Država',
            'state'           => 'Pokrajina',
            'city'            => 'Grad',
            'street'          => 'Ulica i broj',
            'postcode'        => 'Poštanski broj',

            'settings'        => 'Podešavanja',
            'latitude'        => 'Geografska širina (Latitude)',
            'longitude'       => 'Geografska dužina (Longitude)',
            'priority'        => 'Prioritet',
            'status'          => 'Status',
        ],

        'create' => [
            'add-title'       => 'Dodaj novi izvor zaliha',
            'back-btn'        => 'Nazad',
            'save-btn'        => 'Sačuvaj izvor',

            'general'         => 'Opšte informacije',
            'code'            => 'Kod',
            'name'            => 'Naziv',
            'description'     => 'Opis',

            'contact-info'    => 'Kontakt informacije',
            'contact-name'    => 'Ime kontakta',
            'contact-email'   => 'Email kontakta',
            'contact-number'  => 'Kontakt telefon',
            'contact-fax'     => 'Faks',

            'address'         => 'Adresa izvora',
            'country'         => 'Država',
            'select-country'  => 'Izaberite državu',
            'state'           => 'Pokrajina',
            'city'            => 'Grad',
            'street'          => 'Ulica i broj',
            'postcode'        => 'Poštanski broj',

            'settings'        => 'Podešavanja',
            'latitude'        => 'Geografska širina (Latitude)',
            'longitude'       => 'Geografska dužina (Longitude)',
            'priority'        => 'Prioritet',
            'status'          => 'Status',
        ],
    ],
    'channels' => [
        'index' => [
            'title'      => 'Kanali',
            'create-btn' => 'Dodaj kanal',

            'datagrid' => [
                'id'        => 'ID',
                'code'      => 'Kod',
                'name'      => 'Naziv',
                'host-name' => 'Ime hosta',
            ],
        ],

        'edit' => [
            'title'                   => 'Uredi kanal',
            'back-btn'                => 'Nazad',
            'save-btn'                => 'Sačuvaj izmene',

            'general'                 => 'Opšte informacije',
            'code'                    => 'Kod',
            'name'                    => 'Naziv',
            'description'             => 'Opis',
            'inventory-sources'       => 'Izvori zaliha',
            'root-category'           => 'Osnovna kategorija',
            'hostname'                => 'Ime hosta',

            'design'                  => 'Dizajn',
            'theme'                   => 'Tema',
            'logo'                    => 'Logo',
            'logo-size'               => 'Preporučena veličina logotipa: 192x50px',
            'favicon'                 => 'Favicon',
            'favicon-size'            => 'Preporučena veličina favikona: 16x16px',

            'seo'                     => 'SEO informacije',
            'seo-title'               => 'SEO naslov',
            'seo-keywords'            => 'SEO ključne reči',
            'seo-description'         => 'SEO opis',

            'currencies-and-locales'  => 'Valute i jezici',
            'locales'                 => 'Jezici',
            'default-locale'          => 'Podrazumevani jezik',
            'currencies'              => 'Valute',
            'default-currency'        => 'Podrazumevana valuta',

            'maintenance-mode'        => 'Režim održavanja',
            'maintenance-mode-text'   => 'Poruka za režim održavanja',
            'allowed-ips'             => 'Dozvoljene IP adrese',
            'status'                  => 'Status',
            'hostname-placeholder'   =>  'Unesite ime hosta (npr. www.example.com)',
            'update-success'          => 'Kanal je uspešno ažuriran.',
        ],

        'create' => [
            'hostname-placeholder'    => 'https://example.com (unesite svoj domen)',
            'title'                   => 'Dodaj kanal',
            'cancel'                  => 'Otkaži',
            'save-btn'                => 'Sačuvaj kanal',

            'general'                 => 'Opšte informacije',
            'code'                    => 'Kod',
            'name'                    => 'Naziv',
            'description'             => 'Opis',
            'inventory-sources'       => 'Izvori zaliha',
            'root-category'           => 'Osnovna kategorija',
            'select-root-category'    => 'Izaberi osnovnu kategoriju',
            'hostname'                => 'Ime hosta',

            'design'                  => 'Dizajn',
            'theme'                   => 'Tema',
            'logo'                    => 'Logo',
            'logo-size'               => 'Preporučena veličina logotipa: 192x50px',
            'favicon'                 => 'Favicon',
            'favicon-size'            => 'Preporučena veličina favikona: 16x16px',

            'seo'                     => 'SEO informacije',
            'seo-title'               => 'SEO naslov',
            'seo-keywords'            => 'SEO ključne reči',
            'seo-description'         => 'SEO opis',

            'currencies-and-locales'  => 'Valute i jezici',
            'locales'                 => 'Jezici',
            'default-locale'          => 'Podrazumevani jezik',
            'select-default-locale'   => 'Izaberi podrazumevani jezik',
            'currencies'              => 'Valute',
            'default-currency'        => 'Podrazumevana valuta',
            'select-default-currency' => 'Izaberi podrazumevanu valutu',

            'settings'                => 'Podešavanja',
            'maintenance-mode-text'   => 'Poruka za režim održavanja',
            'allowed-ips'             => 'Dozvoljene IP adrese',
            'status'                  => 'Status',

            'validations' => [
                'code'              => 'Kod nije validan',
                'default-locale'    => 'Podrazumevani jezik nije validan',
                'locales'           => 'Jezici nisu validni',
                'name'              => 'Naziv nije validan',
                'currencies'        => 'Valute nisu validne',
                'root-category'     => 'Osnovna kategorija nije validna',
                'seo-title'         => 'SEO naslov nije validan',
                'seo-keywords'      => 'SEO ključne reči nisu validne',
                'seo-description'   => 'SEO opis nije validan',
            ],
        ],
    ],
    'users' => [
    'index' => [
        'title'      => 'Korisnici',
        'create-btn' => 'Dodaj korisnika',

        'datagrid' => [
            'id'        => 'ID',
            'name'      => 'Ime',
            'status'    => 'Status',
            'email'     => 'Email',
            'role'      => 'Uloga',
            'active'    => 'Aktivan',
            'inactive'  => 'Neaktivan',
        ],

        'create' => [
            'title'            => 'Kreiraj novog korisnika',
            'name'             => 'Ime',
            'email'            => 'Email',
            'password'         => 'Lozinka',
            'confirm-password' => 'Potvrdi lozinku',
            'role'             => 'Uloga',
            'select-role'      => 'Izaberi ulogu',
            'status'           => 'Status',
            'upload-image-info'=> 'Otpremite profilnu sliku (110px X 110px)',
            'save-btn'         => 'Sačuvaj korisnika',
        ],

        'edit' => [
            'title'            => 'Izmeni korisnika',
            'name'             => 'Ime',
            'email'            => 'Email',
            'password'         => 'Lozinka',
            'confirm-password' => 'Potvrdi lozinku',
            'role'             => 'Uloga',
            'status'           => 'Status',
            'upload-image-info'=> 'Otpremite profilnu sliku (110px X 110px)',
                'save-btn'         => 'Sačuvaj izmene',
            ],
        ],
    ],
    


    'themes' => [
        'update-success' => 'Tema uspešno ažurirana.',
        'create-success' => 'Tema uspešno kreirana.',
        'index' => [
            'title'      => 'Teme',
            'create-btn' => 'Dodaj novu temu',

            'datagrid' => [
                'channel_name' => 'Kanal',
                'theme'        => 'Tema',
                'type'         => 'Tip',
                'name'         => 'Naziv',
                'sort-order'   => 'Redosled',
                'status'       => 'Status',
                'active'       => 'Aktivno',
            ],
        ],

        'edit' => [
                'no'                           => 'Ne',
                'yes' => 'Da',
                'footer-link-form-title'       => 'Forma za footer linkove',
                'footer-title'                 => 'Naziv footer sekcije',

                'product-carousel'             => 'Karusel proizvoda',
                'product-carousel-description' => 'Prikazuje proizvode u obliku karusela',

                'limit'                        => 'Broj proizvoda za prikaz',
                'select12243648'               => 'Izaberite broj (12, 24, 36, 48)',

                'filters'                      => 'Filteri',
                'add-filter-btn'               => 'Dodaj filter',
                

                'update-success'               => 'Tema uspešno ažurirana',
                'update-slider'                 => 'Ažuriraj slajder',
                'slider-image'                => 'Slika slajdera',
                'image-size'                  => 'Preporučena veličina slike: 1920x600px',

                'key'                          => 'Ključ filtera',
                'value'                        => 'Vrednost filtera',
                'create-filter'                => 'Kreiraj filter',
                'key-input'                    => 'Unesite ključ',
                'new'                          => 'Novo',
                'featured'                     => 'Istaknuto',
                'category-id'                  => 'ID kategorije',
                'value-input'                  => 'Unesite vrednost',

                'category-carousel'            => 'Karusel kategorija',
                'category-carousel-description'=> 'Prikazuje kategorije u obliku karusela',

                'sort'                         => 'Sortiranje',
                'select'                       => 'Izaberite',
                'desc'                         => 'Opadajuće',
                'asc'                          => 'Rastuće',

                'title'                      => 'Izmeni temu',
                'back'                       => 'Nazad',
                'save-btn'                   => 'Sačuvaj temu',
                'static-content'             => 'Statički sadržaj',
                'static-content-description' => 'Dodajte prilagođeni HTML/CSS sadržaj za vašu temu.',
                'add-image-btn'              => 'Dodaj sliku',
                'html'                       => 'HTML',
                'css'                        => 'CSS',
                'preview'                    => 'Pregled',

                'general' => 'Opšte',
                'name'    => 'Naziv teme',
                'channels' => 'Kanali',
                'themes'   => 'Teme',
                'status'   => 'Status',

                'footer-link'             => 'Linkovi u podnožju',
                'footer-link-description' => 'Dodajte ili uredite linkove u podnožju sajta.',
                'add-link'                => 'Dodaj link',
                'column'                  => 'Kolona',
                'url'                     => 'URL adresa',
                'filter-title'            => 'Naslov linka',
                'sort-order'              => 'Redosled prikaza',
                'edit'                    => 'Izmeni',
                'delete'                  => 'Obriši',

                'slider'              => 'Slajder',
                'slider-description'  => 'Podesite slike za slajder na početnoj stranici.',
                'slider-add-btn'      => 'Dodaj sliku slajdera',
                'image-title'         => 'Naslov slike',
                'link'                => 'Link',
                'image'               => 'Slika',

                

            'services-content' => [
                    'services'                           => 'Usluge',
                    'service-info'                       => 'Informacije o uslugama',
                    'add-btn'                            => 'Dodaj uslugu',
                    'title'                              => 'Naziv usluge',
                    'description'                        => 'Opis usluge',

                    'service-icon-icon-truck'            => 'Ikona kamiona',
                    'service-icon-icon-product'          => 'Ikona proizvoda',
                    'service-icon-icon-dollar-sign'      => 'Ikona dolara',
                    'service-icon-icon-support'          => 'Ikona podrške',

                    'delete'                             => 'Obriši uslugu',
                    'service-icon-class'                 => 'CSS klasa za ikonu usluge',
                    'save-btn'                           => 'Sačuvaj',
                    'title is not valid'                 => 'Naziv usluge nije validan',
                    'service-icon-class is not valid'    => 'CSS klasa za ikonu nije validna',
                    'service-icon' => [
                                'icon-truck'        => 'Ikona kamiona',
                                'icon-product'      => 'Ikona proizvoda',
                                'icon-dollar-sign'  => 'Ikona dolara',
                                'icon-support'      => 'Ikona podrške',
                            ],
                ],
        
           
            

        
        ],

    'create' => [
        'title'      => 'Kreiraj novu temu',
        'name'       => 'Naziv teme',
        'sort-order' => 'Redosled prikaza',

        'type' => [
            'title'              => 'Tip sadržaja',
            'product-carousel'   => 'Karusel proizvoda',
            'category-carousel'  => 'Karusel kategorija',
            'static-content'     => 'Statički sadržaj',
            'image-carousel'     => 'Karusel slika',
            'footer-links'       => 'Linkovi u podnožju',
            'services-content'   => 'Sadržaj usluga',
        ],

        'channels' => 'Kanali',
        'themes'   => 'Teme',

        'save-btn' => 'Sačuvaj temu',
    ],
    

],
    'taxes' => [
        'categories' => [
            'index' => [
                'title'      => 'Kategorije poreza',
                'create'     => [
                    'title'       => 'Kreiraj kategoriju poreza',
                    'code'        => 'Kod',
                    'name'        => 'Naziv kategorije',
                    'description' => 'Opis',
                    'tax-rates'   => 'Poreske stope',
                    'save-btn'    => 'Sačuvaj kategoriju',
                    'select'      => 'Izaberi način prikaza',
                ],
                'datagrid' => [
                    'id'   => 'ID',
                    'name' => 'Naziv',
                    'code' => 'Kod',
                ],
            ],
        ],

    'rates' => [
        'index' => [
            'title'        => 'Poreske stope',
            'button-title' => 'Dodaj poresku stopu',
            'datagrid'     => [
                'id'         => 'ID',
                'identifier' => 'Identifikator',
                'state'      => 'Pokrajina/Regija',
                'country'    => 'Država',
                'zip-code'   => 'Poštanski broj',
                'zip-from'   => 'Poštanski broj od',
                'zip-to'     => 'Poštanski broj do',
                'tax-rate'   => 'Poreska stopa (%)',
            ],
        ],

        'create' => [
            'title'      => 'Dodaj poresku stopu',
            'back-btn'   => 'Nazad',
            'save-btn'   => 'Sačuvaj stopu',

            'general' => 'Opšte informacije',
            'identifier' => 'Identifikator',
            'country'    => 'Država',
            'select-country' => 'Izaberi državu',
            'state'      => 'Pokrajina/Regija',
            'tax-rate'   => 'Poreska stopa (%)',

            'settings' => 'Podešavanja',
            'is-zip'   => 'Definisano poštanskim brojem',
            'zip-code' => 'Poštanski broj',
        ],
    ],
],
'data-transfer' => [
    'imports' => [
        'index' => [
            'title'        => 'Uvoz podataka',
            'button-title' => 'Dodaj novi uvoz',
            'datagrid'     => [
                'id'            => 'ID',
                'state'         => 'Status',
                'uploaded-file' => 'Otpremljen fajl',
                'error-file'    => 'Fajl sa greškama',
                'started-at'    => 'Početak',
                'completed-at'  => 'Završetak',
                'summary'       => 'Rezime',
            ],
        ],

        'create' => [
            'title'            => 'Kreiraj novi uvoz',
            'back-btn'         => 'Nazad',
            'save-btn'         => 'Započni uvoz',

            'general'          => 'Opšte informacije',
            'type'             => 'Tip uvoza',
            'download-sample'  => 'Preuzmi primer',

            'file'             => 'CSV/XLS fajl',
            'images-directory' => 'Direktorijum za slike',
            'file-info'        => 'Dozvoljeni formati: csv, xls, xlsx',
            'file-info-example'=> 'Primer: products.xlsx',

            'settings' => 'Podešavanja',
            'action' => 'Akcija',
            'create-update' => 'Kreiraj ili ažuriraj',
            'delete' => 'Obriši postojeće',

            'validation-strategy' => 'Strategija validacije',
            'stop-on-errors'      => 'Zaustavi na greškama',
            'skip-errors'         => 'Preskoči greške',
            'allowed-errors'      => 'Broj dozvoljenih grešaka',

            'field-separator' => 'Separator polja',
            'process-in-queue'=> 'Obradi u redu čekanja (Queue)',
        ],
    ],
],


],

'dashboard' => [
    'index' => [
        /* 'title' => 'Kontrolna tabla',
        'welcome' => 'Dobrodošli u kontrolnu tablu',
        'total-customers' => 'Ukupno kupaca',
        'total-orders' => 'Ukupno porudžbina',
        'total-sales' => 'Ukupna prodaja', */
        'total-stock' => 'Ukupno zaliha',
        /* 'total-products' => 'Ukupno proizvoda',
        'recent-orders' => 'Nedavne porudžbine',
        'recent-customers' => 'Nedavni kupci',
        'recent-products' => 'Nedavni proizvodi', */
    ],
],

'notifications' => [
   /*  'index' => [
        'title' => 'Obaveštenja',
        'mark-all-as-read' => 'Označi sve kao pročitano',
        'no-notifications' => 'Nema obaveštenja',
        'view-all' => 'Prikaži sve',
    ], */
    'order-status-messages' => [
    'all'        => 'Sve porudžbine',
    'pending'    => 'Na čekanju',
    'processing' => 'U obradi',
    'canceled'   => 'Otkazano',
    'completed'  => 'Završeno',
    'closed'     => 'Zatvoreno',
],
],





];
