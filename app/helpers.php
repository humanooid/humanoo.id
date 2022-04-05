<?php

function getBar($cek)
{
    $bar = [
        'Home' => [
            'url' => '/',
            'active' => false,
            'icon' => 'fa-solid fa-house',
        ],
        'About' => [
            'url' => '/about',
            'active' => false,
            'icon' => 'fa-solid fa-user-check',
        ],
        'Contact' => [
            'url' => '/contact',
            'active' => false,
            'icon' => 'fa-solid fa-comments',
        ],
    ];
    if (in_array($cek, array_keys($bar))) {
        $bar[$cek]['active'] = true;
    }
    return $bar;
}
