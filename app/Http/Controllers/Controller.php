<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Portfolio;
use App\Models\Site;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $site = Site::first();
        
        return view('index', compact('site'));
    }



    public function about()
    {
        $contacts = Contacts::orderBy('id', 'desc')
        ->first();
        return view('about', compact('contacts'));
    }




    public function portfolio()
    {  
        $site = Site::orderBy('id', 'desc')
        ->first();
        $portfolios = Portfolio::all();
        return view('portfolio', compact('site','portfolios'));
    }

}
