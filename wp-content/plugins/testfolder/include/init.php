<?php

namespace Inc;

use Inc\Base\Enqueue;

use Inc\Base\SettingsLink;

use Inc\Pages\Admin;

final class Init
{
    public static function get_sevisies()
    {
        return [
          Admin::class,
            Enqueue::class,
           SettingsLink::class

        ];
    }

    public static function register_services()
    {
        foreach (self::get_sevisies() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    private static function instantiate($class)
    {
        $service = new $class();

        return $service;
    }
}