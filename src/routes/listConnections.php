<?php
$app->post('/api/Telnyx/listConnections', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'].'security/connections/';
    $params = [
        'with_ips'=> 'withIps',
        'with_auth'=> 'withAuth',
        'with_fqdns'=> 'withFQDNS',
        'mode'=> 'mode',
        'order_by'=> 'orderBy',
        'sort_direction'=> 'sortDirection',
        'filter_connection_name'=> 'filterConnectionName',
        'filter_ip_address'=> 'filterIpAddress',
        'filter_auth_user_name'=> 'filterAuthUserName',
        'page'=> 'page',
        'per_page'=> 'perPage'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});