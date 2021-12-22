<?php 

namespace App\Http\Controllers;

use App\Serie;

Class SeriesController
{
    public function index()
    {
        return Serie::all();
    }   
}