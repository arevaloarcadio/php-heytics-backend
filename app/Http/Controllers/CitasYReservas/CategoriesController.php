<?php

namespace App\Http\Controllers\CitasYReservas;

use App\Models\CyrCategories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{   
    public function index()
    {
        try{

            $categories = CyrCategories::all();
            
            return response()->json(['status' => 'OK', 'categories' => $categories], 200);
        } catch (Exception $e) {
            return response()->json(['error'=> $e->getMessage()], 500);
        }
    }
}
