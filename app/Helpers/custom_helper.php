<?php

function userLogin()
{
    $db = \Config\Database::connect();
    return $db->table('users')->where('nik', session('nik'))->get()->getRow();
}
