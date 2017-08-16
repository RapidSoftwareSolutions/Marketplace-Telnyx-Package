<?php
$app->post('/api/Telnyx/listNumbers', function ($request, $response, $args) {
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

    $query_str = $settings['api_url'].'origination/numbers/';
    $params = [
       'filter_tag' => 'filterTag',
        'filter_number_val'=> 'filterNumberVal',
        'filter_status'=> 'filterStatus',
        'filter_connection_name'=> 'filterConnectionName',
        'filter_usage_payment_method'=> 'filterUsagePaymentMethod',
        'order_by'=> 'orderBy',
        'sort_direction'=> 'sortDirection',
        'page'=> 'page',
        'per_page'=> 'perPage'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});