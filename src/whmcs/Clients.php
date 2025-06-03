<?php


namespace sermajid\LaravelWhmcs\whmcs;


use sermajid\LaravelWhmcs\WhmcsCore;

class Clients extends WhmcsCore
{

    /**
     * add new client
     * @param string $firstname
     * @param string $lastname
     * @param string $email
     * @param string $address1
     * @param string $city
     * @param string $state
     * @param int $postcode
     * @param int $phonenumber
     * @param string $country
     * @param array $customfields
     * @return array
     */


    public function addClients(string $firstname,string $lastname,string $email,string $address1,string $city,string $state,int $postcode,int $phonenumber,string $country,array $customfields)
    {
        $data = [
            'action'        => 'AddClient',
            'firstname'    => $firstname,
            'lastname'      => $lastname,
            'email'      => $email,
            'address1'      => $address1,
            'city'      => $city,
            'state'      => $state,
            'postcode'      => $postcode,
            'phonenumber'      => $phonenumber,
            'country'      => $country,
            'customfields' => base64_encode(serialize($customfields))

        ];


        return $this->submitRequest($data);
    }

    /**
     * Return a list of all clients
     *
     * @param int $start
     * @param int $limit
     * @return array
     */
    public function getClients($start = 0, $limit = 25,$search = null)
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

    /**
     * Returns the specified client's data
     *
     * @param int $client_id
     * @param bool $stats
     * @return array
     */
    public function getClientDetails(int $client_id,bool $stats = false,string $email=null)
    {
        $data = [
            'action'    =>  'getclientsdetails',
            'clientid'  =>  $client_id,
            'stats'     =>  $stats,
            'email'     =>  $email
        ];

        return $this->submitRequest($data);
    }

    /**
     * Returns the specified client's domainss
     *
     * @param string|int $clientId
     * @return array
     */
    public function getClientDomains($client_id, $start = 0, $limit = 25)
    {
        $data = [
            'action'        =>  'getclientsdomains',
            'clientid'      =>  $client_id,
            'limitstart'    =>  $start,
            'limitnum'      =>  $limit
        ];

        return $this->submitRequest($data);
    }

    /**
     * @param int $client_id
     * @param int $start
     * @param int $limit
     * @param string|null $date
     * @param string|null $subject
     * @return array
     */

        public function GetEmails(int $client_id,int $start = 0,int $limit = 25,string $date=null,string $subject=null)
    {
        $data = [
            'action'        =>  'GetEmails',
            'clientid'      =>  $client_id,
            'limitstart'    =>  $start,
            'limitnum'      =>  $limit,
            'date'          =>  $date,
            'subject'       =>  $subject
        ];

        return $this->submitRequest($data);
    }

    /**
     * Return a list of a client's products
     *
     * @param int $client_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    public function getClientProducts($client_id, $start = 0, $limit = 25)
    {
        $data = [
            'action'        => 'getclientsproducts',
            'clientid'      => $client_id,
            'limitstart'    =>  $start,
            'limitnum'      =>  $limit
        ];

        return $this->submitRequest($data);
    }

    /**
     * getClientPassword
     * @param string|null $user_id
     * @param string|null $email
     * @return array
     */

    public function getClientPassword(string $user_id=null,string $email=null)
    {
        $data = [
            'action'        => 'GetClientPassword',
            'userid'      => $user_id,
            'email'    =>  $email,
        ];

        return $this->submitRequest($data);
    }


}
