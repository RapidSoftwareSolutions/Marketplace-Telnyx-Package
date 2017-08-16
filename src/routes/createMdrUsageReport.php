<?php
$app->post('/api/Telnyx/createMdrUsageReport', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'startTime']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'reporting/mdr_usage_reports';
    $post_data['args']['startTime'] = \Models\ParamsModifier::timeToFormat($post_data['args']['startTime'], 'Y-m-d\TH:i:s\Z');
    $post_data['args']['endTime'] = \Models\ParamsModifier::timeToFormat($post_data['args']['endTime'], 'Y-m-d\TH:i:s\Z');
    $params = [
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'aggregation_type' => 'aggregationType',
        'connections' => 'connections'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});