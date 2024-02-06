<?php
namespace App;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
class RequestSender{
    private $url;
    public function __construct(string $url){
        $this->url = $url; 
     }
    public function sendRequest(array $data)  { 
        try {      
        $client = new Client();      
        $response = $client->request('POST', $this->url, [        'json' => $data,      ]);
        $responseBody = json_decode($response->getBody()->getContents(), true);      
        return $responseBody['result'];    } 
        catch (RequestException $e) {      
            if ($e->hasResponse()) {
                        $errorResponse = json_decode($e->getResponse()->getBody()->getContents(), true);
                        throw new Exception($errorResponse['error'], (int)$e->getCode());     
                        } 
                        else {
                        throw new Exception($e->getMessage(), (int)$e->getCode());      
                    }    
                }  
            }
        }