<?php

use App\Models\Profile;

return [
    'type' => [
        'profile' => Profile::class,
        //'redirect' => Profile::class,
        //'file' => [],
    ],
    'information' => [
        'type' => [
            'whatsapp' => 'WhatsApp',
            'telegram' => 'Telegram',
        ],
    ]
];
