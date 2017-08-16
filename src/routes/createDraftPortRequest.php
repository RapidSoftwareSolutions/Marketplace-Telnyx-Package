<?php
$app->post('/api/Telnyx/createDraftPortRequest', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'phoneNumbers']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    foreach ($post_data['args']['phoneNumbers'] as $number){
        $post_data['args']['phone_numbers'][]['phone_number'] = $number;
    }
    unset($post_data['args']['phoneNumbers']);
    $query_str = $settings['api_url'] . '/origination/porting/draft_port_requests';
    $params = [
        'phone_numbers' => 'phone_numbers'

    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});