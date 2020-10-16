<?php


namespace sermajid\Laravelwhmcs\Fecades;
use Illuminate\Suppoart\Facades\Facade;


class WHMCS extends Fecade
{
    /**
     * Get the registered name of the component
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'whmcs'; }
}
