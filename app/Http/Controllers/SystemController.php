<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;

class SystemController extends Controller
{
        public function ping()
        {
            $client = new \GuzzleHttp\Client();
            $res = $client->request('GET', 'http://94.237.48.139:3000/api/system/ping');
            $StatusCode = $res->getStatusCode();
            // 200
            $Address = '94.237.48.139';
            $Body = $res->getBody();
            // '{"id": 1420053, "name": "guzzle", ...}'
            
            return view('welcome', compact('StatusCode', 'Address', 'Body'));
        }
}
