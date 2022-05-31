<?php

namespace Ads;

class Ads
{

    static $adsData = [
        [
            'img' => 'img/note1.webp',
            'title' => 'Ноутбук Acer',
            'description' => 'Ноутбук Acer, хорошее состояние, батарея держит.',
            'price' => '10000',
            'username' => 'Сергей',
            'userphone' => '+7-922-556-12-21',
        ],
        [
            'img' => 'img/note2.webp',
            'title' => 'Ноутбук ASUS',
            'description' => 'Ноутбук ASUS 15" под восстановление.',
            'price' => '2000',
            'username' => 'Иван',
            'userphone' => '+7-825-653-55-14',
        ],
        [
            'img' => 'img/note1.webp',
            'title' => 'Ноутбук Acer',
            'description' => 'Ноутбук Acer, хорошее состояние, батарея держит.',
            'price' => '10000',
            'username' => 'Сергей',
            'userphone' => '+7-922-556-12-21',
        ],
        [
            'img' => 'img/note2.webp',
            'title' => 'Ноутбук ASUS',
            'description' => 'Ноутбук ASUS 15" под восстановление.',
            'price' => '2000',
            'username' => 'Иван',
            'userphone' => '+7-825-653-55-14',
        ],
        [
            'img' => 'img/note1.webp',
            'title' => 'Ноутбук Acer',
            'description' => 'Ноутбук Acer, хорошее состояние, батарея держит.',
            'price' => '10000',
            'username' => 'Сергей',
            'userphone' => '+7-922-556-12-21',
        ],
        [
            'img' => 'img/note2.webp',
            'title' => 'Ноутбук ASUS',
            'description' => 'Ноутбук ASUS 15" под восстановление.',
            'price' => '2000',
            'username' => 'Иван',
            'userphone' => '+7-825-653-55-14',
        ],
    ];

    public static function getLast(): array
    {
        return self::$adsData;
    }
}