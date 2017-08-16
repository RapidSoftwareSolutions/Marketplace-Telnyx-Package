<?php
$app->post('/api/Telnyx/setConnectionFQDNAuth', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'connectionId', 'connectionUsername', 'connectionPassword']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'security/connections/' . $post_data['args']['connectionId'].'/fqdn_authentication';
    $params = [
        'user_name'=> 'connectionUsername',
        'password' => 'connectionPassword',
        'ip_authentication_method'=> 'ipAuthenticationMethod',
        'fqdn_outbound_authentication'=> 'fqdnOutboundAuthentication'
   ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});