<?php

namespace sermajid\LaravelWhmcs\Tests;

use PHPUnit\Framework\TestCase;
use sermajid\LaravelWhmcs\Whmcs;

class WhmcsTest extends TestCase
{
    public function testApiDelegatesCall()
    {
        $whmcs = $this->getMockBuilder(Whmcs::class)
            ->onlyMethods(['call'])
            ->getMock();

        $whmcs->expects($this->once())
            ->method('call')
            ->with('GetClients', ['limitnum' => 10]);

        $whmcs->api('GetClients', ['limitnum' => 10]);
    }

    public function testMagicCallDelegatesToApi()
    {
        $whmcs = $this->getMockBuilder(Whmcs::class)
            ->onlyMethods(['call'])
            ->getMock();

        $whmcs->expects($this->once())
            ->method('call')
            ->with('GetClients', []);

        $whmcs->GetClients([]);
    }
}
