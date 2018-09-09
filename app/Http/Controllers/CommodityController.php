<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class CommodityController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://94.237.48.139:3000/api/org.example.mynetwork.Commodity');
        $StatusCode = $res->getStatusCode();
        // 200
        $Header = $res->getHeaderLine('content-type');
        // 'application/json; charset=utf8'
        $Body = $res->getBody();
        // '{"id": 1420053, "name": "guzzle", ...}'
        
        return view('/', compact('StatusCode', 'Header', 'Body'));
    }

    public function show()
    {
    }

    public function add()
    {
    }
}
