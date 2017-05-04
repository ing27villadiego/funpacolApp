<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 3/05/17
 * Time: 6:23 PM
 */

namespace App\Funpacol\Repositories;


use App\Funpacol\Entities\City;

class CityRepo {


    public function find($id)
    {
        return City::find($id);

    }



}