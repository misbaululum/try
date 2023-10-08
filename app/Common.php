<?php

use Config\Globals;
use Config\Services;

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter.com/user_guide/extending/common.html
 */

function getValidationRules($validation)
{
    $rules = $validation->getRules();
    $newRules = [];

    // Check if $rules is not empty
    if (!empty($rules)) {
        foreach ($rules as $key => $rule) {
            // Create a new rule array with the desired structure
            $newRules[$key] = [
                'label' => $rule['label'],
                'rules' => $rule['rules'],
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'min_length' => '{field} harus berisi minimal {param} karakter.',
                    'max_length' => '{field} tidak boleh berisi lebih dari {param} karakter.',
                    'matches' => '{field} tidak cocok dengan {param}.',
                    'is_unique' => '{field} harus unik.',
                ]
            ];
        }
    }

    return $newRules;
}

if (!function_exists('inputPost')) {
    function inputPost($input_name)
    {
        $input = Services::request()->getPost($input_name);

        return $input;
    }
}

if (!function_exists('checkAuthentication')) {
    function checkAuthentication()
    {
        // Access the authentication status from the global variable
        return Globals::$checkAuthentication;
    }
}
