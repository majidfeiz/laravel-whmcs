<?php


namespace sermajid\LaravelWhmcs\whmcs;


class Orders extends Clients
{

    public function AcceptOrder($order_id='')
    {

        $data = [
            'action'        => 'getclients',
            'limitstart'    => $start,
            'limitnum'      => $limit,
        ];

        if($search)
            $data['search'] = $search;

        return $this->submitRequest($data);
    }

}
