<?php


namespace sermajid\Laravelwhmcs\whmcs;
use sermajid\LaravelWhmcs\whmcs\Orders;

class WSystem extends Orders
{
    /**
     * DecryptPassword
     * @param string $password
     * @return array
     */

    public function DecryptPassword(string $password)
    {
        $data = [
            'action'        =>  'DecryptPassword',
            'password2'      =>  $password
        ];

        return $this->submitRequest($data);
    }

    /**
     * EncryptPassword
     * @param string $password
     * @return array
     */

    public function EncryptPassword(string $password)
    {
        $data = [
            'action'        =>  'EncryptPassword',
            'password2'      =>  $password
        ];

        return $this->submitRequest($data);
    }
}
