<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte;

class ProductesController extends Controller
{
    //
	public function index()
	{
		
		return Producte::count();
	}
}
