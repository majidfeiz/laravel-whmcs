<?php


namespace sermajid\Laravelwhmcs\whmcs;

use sermajid\LaravelWhmcs\whmcs\WSystem;

class Authentication extends WSystem
{

    public function ValidateLogin(string $email,string $password)
    {
        $data = [
            'action'        => 'ValidateLogin',
            'email'      => $email,
            'password2'    =>  $password,
        ];

        return $this->submitRequest($data);
    }
}
