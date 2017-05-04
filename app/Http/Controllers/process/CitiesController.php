<?php

namespace App\Http\Controllers\process;


use App\Funpacol\Repositories\CityRepo;
use App\Http\Controllers\Controller;

class CitiesController extends Controller {


    protected $categoryRepo;

    public function __construct(CityRepo $categoryRepo)
    {

        $this->categoryRepo=$categoryRepo;

    }


    public function zone($slug, $id )
    {

        $category = $this->categoryRepo->find($id);

        dd($category);

        return view('candidates/category', compact('category'));


    }



}
