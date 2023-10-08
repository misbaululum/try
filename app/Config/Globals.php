<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Globals extends BaseConfig
{
    private static $database = null;
    public static $checkAuthentication = false;
    public static $userAuthentication = null;

    public static function setGlobals()
    {
        self::$database = Database::connect();
        $session = Services::session();

        if (!empty($session->get('session_id')) && !empty($session->get('session_password'))) {
            $user = self::$database->table('users')->where('id', $session->get('session_id'))->get()->getRow();
            if (!empty($user) && md5($user->password ?? '') == $session->get('session_password')) {
                self::$checkAuthentication = true;
                self::$userAuthentication = $user;
            }
        }
    }
}

Globals::setGlobals();
