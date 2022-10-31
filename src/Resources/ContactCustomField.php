<?php

namespace TestMonitor\ActiveCampaign\Resources;


class ContactCustomField
{
     /**
     * The id of the role field.
     *
     * @var string
     */
    public static $role_id = '1';
     /**
     * The id of the externalId field.
     *
     * @var string
     */
    public static string $externalId_id = '2';

    public static function role(?string $value = null) {
        return self::getField(self::$role_id, $value);
    }

    public static function externalId(string $value) {
        return self::getField(self::$externalId_id, $value);
    }

    private static function getField($id, $value): array {
        return [
            'field' => $id,
            'value' => $value
        ];
    }
}
