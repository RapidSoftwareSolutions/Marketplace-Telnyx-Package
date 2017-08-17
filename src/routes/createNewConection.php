<?php
$app->post('/api/Telnyx/createNewConection', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'connectionName']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;

    }
    //forming request to vendor API

    $query_str = $settings['api_url'].'security/connections/';
    $params = [
        'connection_name'=> 'connectionName',
        'active'=> 'active',
        'dnis_number_format'=> 'dnisNumberFormat',
        'timeout_1xx' => 'timeout1xx',
        'timeout_2xx'=> 'timeout2xx',
        'ani_override_type'=> 'aniOverrideType',
        'ani_override'=> 'aniOverride',
        'sip_compact_headers_enabled'=> 'sipCompactHeadersEnabled',
        'transport_protocol'=> 'transportProtocol',
        'third_party_control_enabled'=> 'thirdPartyControlEnabled',
        'privacy_zone_enabled'=> 'privacyZoneEnabled',
        'codecs'=> 'codecs',
        'prack_enabled'=> 'prackEnabled',
        'default_routing_method'=> 'defaultRoutingMethod',
        'default_primary_authorized_ip_id'=> 'defaultPrimaryAuthorizedIpId',
        'default_secondary_authorized_ip_id'=> 'defaultSecondaryAuthorizedIpId',
        'default_tertiary_authorized_ip_id'=> 'defaultTertiaryAuthorizedIpId',
        'anchorsite_override'=> 'anchorsiteOverride',
        'encrypted_media'=> 'encryptedMedia',
        'instant_ringback_enabled'=> 'instantRingbackEnabled',
        't38_reinvite_source'=> 't38ReinviteSource',
        'ani_number_format'=> 'aniNumberFormat',
        'isup_headers_enabled'=> 'isupHeadersEnabled',
        'encode_contact_header_enabled'=> 'encodeContactHeaderEnabled',
        'inbound_generate_ringback_tone'=> 'inboundGenerateRingbackTone',
        'outbound_generate_ringback_tone'=> 'outboundGenerateRingbackTone',
        'dtmf_type'=> 'dtmfType',
        'outbound_localization'=> 'outboundLocalization'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});