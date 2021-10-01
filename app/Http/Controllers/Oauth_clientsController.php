<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Oauth_client;

use App\Oauth_client;

class Oauth_clientController extends Controller
{
    //
    public function index()
    {
      return oauth_clients::all();
    }
}
