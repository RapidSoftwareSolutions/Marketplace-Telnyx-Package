<?php
$app->post('/api/Telnyx/updateNumbers', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'numberIds']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'origination/bulk_number_update_requests/';
    $params = [
        'ids_or_number_vals' => 'numberIds',
        'connection_id' => 'connectionId',
        'primary_ip' => 'primaryIp',
        'secondary_ip' => 'secondaryIp',
        'tertiary_ip' => 'tertiaryIp',
        'primary_port' => 'primaryPort',
        'secondary_port' => 'secondaryPort',
        'tertiary_port' => 'tertiaryPort',
        'e911_enabled' => 'e911Enabled',
        'e911_address_id' => 'e911AddressId',
        'address_id' => 'addressId',

        'enable_tech_prefix' => 'enableTechPrefix',
        'translated_number' => 'translatedNumber',
        'forwards_to' => 'forwardsTo',
        'forwarding_type' => 'forwardingType',
        'usage_payment_method' => 'usagePaymentMethod',
        'enable_rtp_auto_adjust' => 'enableRtpAutoAdjust',
        'media_handling_mode' => 'mediaHandlingMode',
        't38_fax_gateway_enabled' => 't38FaxGatewayEnabled',
        'accept_any_rtp_packets_enabled' => 'acceptAnyRtpPacketsEnabled',
        'tag_list' => 'tagList'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});