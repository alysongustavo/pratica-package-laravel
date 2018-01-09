<?php
/**
 * Created by PhpStorm.
 * User: Alyson
 * Date: 09/01/2018
 * Time: 07:56
 */

namespace Modules\Location\Facades;



use Illuminate\Support\Facades\Facade;

class Location extends Facade
{

    protected static function getFacadeAccessor(){
        return 'Location.location';
    }

}