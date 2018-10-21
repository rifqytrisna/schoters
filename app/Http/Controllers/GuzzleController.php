<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class GuzzleController extends Controller
{
    public function getRemoteData(){
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://private-90552-schoterspersonal.apiary-mock.com/categories');
        $response = $request->getBody()->getContents();
        echo '<pre>';
        print_r($response);
        exit;

//            $data = $response->getBody();
//            $data = json_decode($data);
//
//            dd($data);

        }
    }

