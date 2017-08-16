<?php
$app->post('/api/Telnyx/updateE911Address', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'e911AddressId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'origination/e911_addresses/' . $post_data['args']['e911AddressId'];
    $params = [
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'business_name' => 'businessName',
        'line_1' => 'line1',
        'line_2' => 'line2',
        'city' => 'city',
        'state' => 'state',
        'postal_code' => 'postalCode'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'PUT', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});