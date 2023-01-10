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
            'companytitle' => 'Job Titel',
            'birthday' => 'Geburtstag',
            'whatsapp' => 'WhatsApp',
            'telegram' => 'Telegram',
            'spotify' => 'Spotify',
            'link' => 'Link',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'linkedin' => 'LinkedIn',
            'xing' => 'Xing',
            'youtube' => 'Youtube',
            'twitch' => 'Twitch',
            'twitter' => 'Twitter',
            'email-business' => 'E-Mail (geschäftlich)',
            'phone-business' => 'Telefonnummer (geschäftlich)',
            'email-private' => 'E-Mail',
            'phone-private' => 'Telefonnummer',
        ],
    ]
];
