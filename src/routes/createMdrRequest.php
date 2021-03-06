<?php
$app->post('/api/Telnyx/createMdrRequest', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'startTime', 'endTime']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'reporting/mdr_requests';
    $post_data['args']['startTime'] = \Models\ParamsModifier::timeToFormat($post_data['args']['startTime'], 'Y-m-d\TH:i:s\Z');
    $post_data['args']['endTime'] = \Models\ParamsModifier::timeToFormat($post_data['args']['endTime'], 'Y-m-d\TH:i:s\Z');
    foreach ($post_data['args']['recordTypes'] as $recordType) {
        $recordTypes[] = (int)$recordType;
    }
    $post_data['args']['recordTypes'] = $recordTypes;
    foreach ($post_data['args']['callTypes'] as $callType) {
        $callTypes[] = (int)$callType;
    }
    $params = [
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'call_types' => 'callTypes',
        'record_types' => 'recordTypes',
        'connections' => 'connections',
        'report_name' => 'reportName',
        'filters' => 'filters'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});