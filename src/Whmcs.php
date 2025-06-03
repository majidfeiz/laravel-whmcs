<?php


namespace sermajid\LaravelWhmcs;

//use sermajid\LaravelWhmcs\whmcs\WSystem;
use sermajid\LaravelWhmcs\whmcs\Authentication;

class Whmcs extends Authentication
{

    /**
     * Proxy to call any WHMCS API action.
     *
     * @param string $action
     * @param array  $params
     * @return array|\SimpleXMLElement
     */
    public function api(string $action, array $params = [])
    {
        return $this->call($action, $params);
    }

    public function __call($method, $parameters)
    {
        $params = $parameters[0] ?? [];

        if (!is_array($params)) {
            throw new \InvalidArgumentException('Parameters must be passed as an array');
        }

        return $this->call($method, $params);
    }
}
