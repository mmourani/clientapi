<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class TradeController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://94.237.48.139:3000/api/org.example.mynetwork.Commodity');
        echo $res->getStatusCode();
        // 200
        echo $res->getHeaderLine('content-type');
        // 'application/json; charset=utf8'
        echo $res->getBody();
        // '{"id": 1420053, "name": "guzzle", ...}'
    }
}
