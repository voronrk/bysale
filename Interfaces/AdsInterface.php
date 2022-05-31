<?php
namespace Interfaces;

interface AdsInterface
{
    public static function getAll(): array;
    public static function getById($id): array;
    public static function getAllById($id): array;
    public static function getByKey($key, $value): array;
    public static function getAllByKey($key, $value):array;
}