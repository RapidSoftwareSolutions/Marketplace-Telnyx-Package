<?php
$app->post('/api/Telnyx/deleteAddress', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'addressId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'account/addresses/' . $post_data['args']['addressId'];
    $params = [

    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'DELETE');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});