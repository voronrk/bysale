<?php

namespace Ads;

require_once('Interfaces/AdsInterface.php');

use Interfaces\AdsInterface;

class Ads implements AdsInterface
{

    static $data = [
        [
            'id' => 1,
            'img' => 'img/note1.webp',
            'title' => 'Ноутбук Acer',
            'description' => 'Ноутбук Acer, хорошее состояние, батарея держит.',
            'price' => '10000',
            'username' => 'Сергей',
            'userphone' => '+7-922-556-12-21',
        ],
        [
            'id' => 2,
            'img' => 'img/note2.webp',
            'title' => 'Ноутбук ASUS',
            'description' => 'Ноутбук ASUS 15" под восстановление.',
            'price' => '2000',
            'username' => 'Иван',
            'userphone' => '+7-825-653-55-14',
        ],
        [
            'id' => 3,
            'img' => 'img/note1.webp',
            'title' => 'Ноутбук Acer',
            'description' => 'Ноутбук Acer, хорошее состояние, батарея держит.',
            'price' => '10000',
            'username' => 'Сергей',
            'userphone' => '+7-922-556-12-21',
        ],
        [
            'id' => 4,
            'img' => 'img/note2.webp',
            'title' => 'Ноутбук ASUS',
            'description' => 'Ноутбук ASUS 15" под восстановление.',
            'price' => '2000',
            'username' => 'Иван',
            'userphone' => '+7-825-653-55-14',
        ],
        [
            'id' => 5,
            'img' => 'img/note1.webp',
            'title' => 'Ноутбук Acer',
            'description' => 'Ноутбук Acer, хорошее состояние, батарея держит.',
            'price' => '10000',
            'username' => 'Сергей',
            'userphone' => '+7-922-556-12-21',
        ],
        [
            'id' => 6,
            'img' => 'img/note2.webp',
            'title' => 'Ноутбук ASUS',
            'description' => 'Ноутбук ASUS 15" под восстановление.',
            'price' => '2000',
            'username' => 'Иван',
            'userphone' => '+7-825-653-55-14',
        ],
    ];

    public static function getAll(): array
    {
        return self::$data;
    }

    public static function getById($id): array
    {
        return static::getByKey('id', $id);
    }

    public static function getAllById($id): array
    {
        return static::getAllByKey('id', $id);
    }

    public static function getByKey($key, $value): array 
    {
        return current(array_filter(static::$data, function($item) use ($key, $value) {return $item[$key]==$value;}));
    }

    public static function getAllByKey($key, $value):array
    {
        return array_filter(static::$data, function($item) use ($key, $value) {return $item[$key]==$value;});
    }
}