<?php

namespace App\Console\Components;

use GuzzleHttp\Client;

class ImportDataClient
{
    public $clienttt;

    public function __construct()
    {
        $this->clienttt = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://jsonplaceholder.typicode.com/',
            // You can set any number of default request options.
            'timeout' => 2.0,
            'verify' => false
        ]);
    }
}
