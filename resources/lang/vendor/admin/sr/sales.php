<?php

return [
    'invoices' => [
        'index' => [
            'title' => 'Fakture',
            'datagrid' => [
                'invoice-id'   => 'ID fakture',
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
            'title' => 'Povraćaji',
            'datagrid' => [
                'refund-id'       => 'ID povraćaja',
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
            'title' => 'Transakcije',
            'datagrid' => [
                'transaction-id'     => 'ID transakcije',
                'order-id'           => 'ID porudžbine',
                'invoice-id'         => 'ID fakture',
                'transaction-date'   => 'Datum transakcije',
                'transaction-amount' => 'Iznos transakcije',
                'status'             => 'Status',
                'completed'          => 'Završeno',
                'pending'            => 'Na čekanju',
                'view'               => 'Pregled',
            ],
        ],
    ],

    'reservations' => [
        'index' => [
            'title' => 'Rezervacije',
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
];

/* return [
    'orders' => [
        'index' => [
            'title' => 'Porudžbine',
            'datagrid' => [
                'pay-via'     => 'Plaćeno putem',
                'order-id'    => 'ID porudžbine',
                'status'      => 'Status',
                'date'        => 'Datum',
                'email'       => 'Email',
                'customer'    => 'Kupac',
                'grand-total' => 'Ukupan iznos',
                'view'        => 'Prikaži',
                'canceled'    => 'Otkazano',
                'completed'   => 'Završeno',
            ],
        ],
    ],

    'shipments' => [
        'index' => [
            'title' => 'Isporuke',
            'datagrid' => [
                'order-id'          => 'ID porudžbine',
                'total-qty'         => 'Ukupna količina',
                'inventory-source'  => 'Izvor zaliha',
                'shipment-to'       => 'Isporuka za',
                'order-date'        => 'Datum porudžbine',
                'shipment-date'     => 'Datum isporuke',
                'view'              => 'Pregled',
            ],
        ],
    ],

    'invoices' => [
        'index' => [
            'title' => 'Fakture',
            'datagrid' => [
                'invoice-id'    => 'ID fakture',
                'invoice-date'  => 'Datum fakture',
                'order-id'      => 'ID porudžbine',
                'grand-total'   => 'Ukupan iznos',
                'status'        => 'Status',
                'paid'          => 'Plaćeno',
                'pending'       => 'Na čekanju',
                'overdue'       => 'Prekoračeno',
                'view'          => 'Pregled',
            ],
        ],
    ],

    'refunds' => [
        'index' => [
            'title' => 'Povraćaji',
            'datagrid' => [
                'refund-id'        => 'ID povraćaja',
                'order-id'         => 'ID porudžbine',
                'refund-date'      => 'Datum povraćaja',
                'refunded-amount'  => 'Vraćeni iznos',
                'billed-to'        => 'Naplata za',
                'status'           => 'Status',
                'completed'        => 'Završeno',
                'pending'          => 'Na čekanju',
                'view'             => 'Pregled',
            ],
        ],
    ],

    'transactions' => [
        'index' => [
            'title' => 'Transakcije',
            'datagrid' => [
                'transaction-id'     => 'ID transakcije',
                'order-id'           => 'ID porudžbine',
                'invoice-id'         => 'ID fakture',
                'transaction-date'   => 'Datum transakcije',
                'transaction-amount' => 'Iznos transakcije',
                'status'             => 'Status',
                'completed'          => 'Završeno',
                'pending'            => 'Na čekanju',
                'view'               => 'Pregled',
            ],
        ],
    ],

    'reservations' => [
        'index' => [
            'title' => 'Rezervacije',
            'datagrid' => [
                'reservation-id'    => 'ID rezervacije',
                'product-name'      => 'Naziv proizvoda',
                'sku'               => 'SKU',
                'reserved-qty'      => 'Rezervisana količina',
                'order-id'          => 'ID porudžbine',
                'customer-name'     => 'Ime kupca',
                'reservation-date'  => 'Datum rezervacije',
                'status'            => 'Status',
                'completed'         => 'Završeno',
                'pending'           => 'Na čekanju',
                'view'              => 'Pregled',
            ],
        ],
    ],
];
 */