<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolkloreController extends Controller
{
   public function index()
{
    $folklore = [
        

    ];

    return view('folklore', compact('folklore'));
}

}

