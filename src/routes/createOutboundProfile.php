<?php
$app->post('/api/Telnyx/createOutboundProfile', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'connectionIds', 'trafficType', 'servicePlan']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'termination/endpoints';
    $params = [
      'connection_ids'=> 'connectionIds',
        'traffic_type'=> 'trafficType',
        'service_plan'=> 'servicePlan',
        'active'=> 'active',
        'translation_rule'=> 'translationRule',
        'cps_limit_increase'=> 'cpsLimitIncrease',
        'ports'=> 'ports',
        'tag_list'=> 'tagList',
        'usage_payment_method'=> 'usagePaymentMethod',
        'whitelisted_destination_format' => 'whitelistedDestinationFormat',
        'whitelisted_destinations'=> 'whitelistedDestinations'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});