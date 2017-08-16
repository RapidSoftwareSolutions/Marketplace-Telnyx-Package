<?php
$app->post('/api/Telnyx/listDraftPortRequests', function ($request, $response, $args) {
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

    $query_str = $settings['api_url'] . 'origination/porting/draft_port_requests';
    $params = [
        'search' => 'search',
        'page' => 'page',
        'per_page' => 'perPage',
        'status' => 'status',
        'include_phone_numbers'=> 'includePhoneNumbers',
        'include_sub_requests'=> 'includeSubRequests'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});