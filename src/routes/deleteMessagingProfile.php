<?php
$app->post('/api/Telnyx/deleteMessagingProfile', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'profileId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = 'https://api.telnyx.com/messaging/profiles/' . $post_data['args']['profileId'];
    $params = [
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, "DELETE");
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});