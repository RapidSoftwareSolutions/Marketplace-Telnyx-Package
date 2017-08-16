<?php
$app->post('/api/Telnyx/updateSingleNumber', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'number']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'origination/numbers/' . $post_data['args']['number'];
    $params = [
        'connection_id' => 'connectionId',
        'primary_ip' => 'primaryIp',
        'secondary_ip' => 'secondaryIp',
        'tertiary_ip' => 'tertiaryIp',
        'primary_port' => 'primaryPort',
        'secondary_port' => 'secondaryPort',
        'tertiary_port' => 'tertiaryPort',
        'primary_fqdn' => 'primaryFqdn',
        'secondary_fqdn' => 'secondaryFqdn',
        'tertiary_fqdn' => 'tertiaryFqdn',
        'primary_fqdn_port' => 'primaryFqdnPort',
        'secondary_fqdn_port' => 'secondaryFqdnPort',
        'tertiary_fqdn_port' => 'tertiaryFqdnPort',
        'primary_fqdn_dns_record_type' => 'primaryFqdnDnsRecordType',
        'secondary_fqdn_dns_record_type' => 'secondaryFqdnDnsRecordType',
        'tertiary_fqdn_dns_record_type' => 'tertiaryFqdnDnsRecordType',
        'enable_tech_prefix' => 'enableTechPrefix',
        'translated_number' => 'translatedNumber',
        'forwards_to' => 'forwardsTo',
        'forwarding_type' => 'forwardingType',
        'enable_caller_id_name' => 'enableCallerIdName',
        'usage_payment_method' => 'usagePaymentMethod',
        'enable_rtp_auto_adjust' => 'enableRtpAutoAdjust',
        'media_handling_mode' => 'mediaHandlingMode',
        'routing_method' => 'routingMethod',
        'cnam_listing_enabled' => 'cnamListingEnabled',
        'cnam_listing_details' => 'cnamListingDetails',
        't38_fax_gateway_enabled' => 't38FaxGatewayEnabled',
        'accept_any_rtp_packets_enabled' => 'acceptAnyRtpPacketsEnabled',
        'tag_list' => 'tagList'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'PUT', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});