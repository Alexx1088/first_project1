<?php


namespace App\Components;


//use http\Client;
use GuzzleHttp\Client;

class ImportDataClient
{
    public $client;

    /**
     * ImportDataClient constructor.
     * @param $client
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://jsonplaceholder.typicode.com/',
            'timeout' => 2,
            'verify'=> false,
        ]);
    }


}