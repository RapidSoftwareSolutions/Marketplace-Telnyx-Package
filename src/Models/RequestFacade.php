<?php
namespace Models;

use GuzzleHttp\Client;

class RequestFacade
{

    public function makeRequest(Client $client, array $params, array $post_data, string $query_str, string $method, string $paramType)
    {

        foreach ($params as $key => $value) {
            if (isset($post_data['args'][$value]) && (strlen($post_data['args'][$value]) > 0 || count($post_data['args'][$value]) > 0)) {
                $body[$key] = $post_data['args'][$value];
            }
        }
        $result = $client->request($method, $query_str, [
            'headers' => [
                'Accept' => 'application/json',
                'x-api-user' => $post_data['args']['username'],
                'x-api-token' => $post_data['args']['apiToken']
            ],
            $paramType => $body
        ]);

        return $result;
    }

}
