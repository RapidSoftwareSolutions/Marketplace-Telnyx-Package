<?php
$app->post('/api/Telnyx/updateSingleDraftPortSubrequest', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'draftPortRequestId', 'subrequestId', 'focDateRequestedByUser', 'authPersonName', 'billingPhoneNumber', 'streetAddress', 'locality', 'administrativeArea', 'postalCode', 'countryCode', 'defaultConnectionId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'origination/porting/draft_port_requests/' . $post_data['args']['draftPortRequestId'] . '/sub_requests/' . $post_data['args']['subrequestId'];
    $datetime = new DateTime($post_data['args']['focDateRequestedByUser']);
    $post_data['args']['focDateRequestedByUser'] = $datetime->format('Y-m-d\TH:i:s\Z');
    $post_data['args']['porting_option']['type'] = $post_data['args']['portingOptionType'];
    $post_data['args']['porting_option']['remaining_numbers_action'] = $post_data['args']['remainingNumbersAction'];
    $post_data['args']['porting_option']['new_billing_phone_number'] = $post_data['args']['newBillingPhoneNumber'];
    $params = [
        'foc_date_requested_by_user' => 'focDateRequestedByUser',
        'person_or_company_name' => 'personOrCompanyName',
        'auth_person_name' => 'authPersonName',
        'billing_phone_number' => 'billingPhoneNumber',
        'street_address' => 'streetAddress',
        'extended_address' => 'extendedAddress',
        'locality' => 'locality',
        'administrative_area' => 'administrativeArea',
        'postal_code' => 'postalCode',
        'country_code' => 'countryCode',
        'default_connection_id' => 'defaultConnectionId',
        'porting_option' => 'porting_option',
        'pin_passcode' => 'pinPasscode',
        'account_number' => 'accountNumber',
        'tax_identifier' => 'taxIdentifier',
        'business_identifier' => 'businessIdentifier'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'PUT', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});