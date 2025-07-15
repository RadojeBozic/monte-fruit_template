<?php

return [
    'dashboard' => [
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
                 'notes' => [
                    'add-note'         => 'Dodaj belešku',
                    'notify-customer'  => 'Obavesti kupca',
                    'submit-btn-title' => 'Sačuvaj belešku',
                    'note-placeholder' => 'Unesite belešku ovde...',
                    'note-invalid'     => 'Beleška nije validna',
                    'note is not valid' => 'Beleška nije validna',
                ],
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
],
];