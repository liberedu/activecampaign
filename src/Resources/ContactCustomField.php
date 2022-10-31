<?php

namespace TestMonitor\ActiveCampaign\Resources;


class ContactCustomField
{
    public static $uuid_id = '25';
    public static $role_id = '33' ;
    public static $cpf_id = '5';
    public static $picture_id = '6';
    public static $birthday_id = '7';

    public static function role(?string $value = null) {
        return self::getField(self::$role_id, $value);
    }

    public static function uuid(?string $value = null) {
        return self::getField(self::$uuid_id, $value);
    }

    public static function cpf(?string $value = null) {
        return self::getField(self::$cpf_id, $value);
    }

    public static function picture(?string $value = null) {
        return self::getField(self::$picture_id, $value);
    }

    public static function birthday(?string $value = null) {
        return self::getField(self::$birthday_id, $value);
    }

    public static function all(array $data): array {
        $data = array_merge([
            'role' => null,
            'uuid' => null,
            'cpf' => null,
            'picture' => null,
            'birthday' => null
        ],$data);
        $fields = [
            self::role($data['role']),
            self::uuid($data['uuid']),
            self::birthday($data['birthday']),
            self::picture($data['picture']),
            self::cpf($data['cpf']),
        ];
        return array_filter($fields, fn (array $entry) => !empty($entry['value']));
    }

    private static function getField($id, $value): array {
        return [
            'field' => $id,
            'value' => $value
        ];
    }
}
