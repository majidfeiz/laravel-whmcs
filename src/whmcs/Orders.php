<?php

namespace sermajid\LaravelWhmcs\whmcs;

class Orders extends Clients
{
    public function AcceptOrder($order_id = '')
    {
        return $this->call('AcceptOrder', [
            'orderid' => $order_id,
        ]);
    }
}
