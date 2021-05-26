<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Category;
use Response;

class TestingController extends Controller
{
    
    public function index()
    {
    	$Categories = Category::all();
    	$Goods = Good::all();
		$data = [$Categories,$Goods];
		
		return Response::json($data);    	
    }

    public function getCategories()
    {
    	$Categories = Category::all();
    	//$data = [$Categories,$Goods];
		
		return Response::json($Categories);    		
    }

    public function getGoods()
    {
    	$Goods = Good::all();
		return Response::json($Goods);    
    }
}
