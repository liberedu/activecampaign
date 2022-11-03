<?php

namespace TestMonitor\ActiveCampaign\Resources;


class ContactCustomField
{
    public static $uuid_id = '25';
    public static $role_id = '33';
    public static $cpf_id = '5';
    public static $picture_id = '6';
    public static $birthday_id = '7';
    public static $zipCode_id = '19';
    public static $neighborhood_id = '24';
    public static $streetNumber_id = '20';
    public static $streetComplement_id = '21';
    public static $state_id = '22';
    public static $city_id = '23';

    public static function role(?string $value = null)
    {
        return self::getField(self::$role_id, $value);
    }

    public static function uuid(?string $value = null)
    {
        return self::getField(self::$uuid_id, $value);
    }

    public static function cpf(?string $value = null)
    {
        return self::getField(self::$cpf_id, $value);
    }

    public static function picture(?string $value = null)
    {
        return self::getField(self::$picture_id, $value);
    }

    public static function birthday(?string $value = null)
    {
        return self::getField(self::$birthday_id, $value);
    }

    public static function zipCode(?string $value = null)
    {
        return self::getField(self::$zipCode_id, $value);
    }

    public static function neighborhood(?string $value = null)
    {
        return self::getField(self::$neighborhood_id, $value);
    }

    public static function streetNumber(?string $value = null)
    {
        return self::getField(self::$streetNumber_id, $value);
    }

    public static function streetComplement(?string $value = null)
    {
        return self::getField(self::$streetComplement_id, $value);
    }

    public static function state(?string $value = null)
    {
        return self::getField(self::$state_id, $value);
    }

    public static function city(?string $value = null)
    {
        return self::getField(self::$city_id, $value);
    }

    public static function all(array $data): array
    {
        $data = array_merge([
            'role' => null,
            'uuid' => null,
            'cpf' => null,
            'picture' => null,
            'birthday' => null,
            'zipCode' => null,
            'neighborhood' => null,
            'streetNumber' => null,
            'streetComplement' => null,
            'state' => null,
            'city' => null,
        ], $data);
        $fields = [
            self::role($data['role']),
            self::uuid($data['uuid']),
            self::birthday($data['birthday']),
            self::picture($data['picture']),
            self::cpf($data['cpf']),
            self::zipCode($data['zipCode']),
            self::neighborhood($data['neighborhood']),
            self::streetNumber($data['streetNumber']),
            self::streetComplement($data['streetComplement']),
            self::state($data['state']),
            self::city($data['city']),
        ];
        return array_values(array_filter($fields, fn (array $entry) => !empty($entry['value'])));
    }

    private static function getField($id, $value): array
    {
        return [
            'field' => $id,
            'value' => $value
        ];
    }
}
