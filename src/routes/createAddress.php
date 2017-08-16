<?php
$app->post('/api/Telnyx/createAddress', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'firstName', 'lastName', 'phoneNumber', 'streetAddress', 'locality', 'countryCode']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'].'account/addresses/';
    $params = [
       'first_name'=> 'firstName',
        'last_name'=> 'lastName',
        'business_name'=> 'businessName',
        'phone_number'=> 'phoneNumber',
        'street_address'=> 'streetAddress',
        'extended_address'=> 'extendedAddress',
        'locality'=> 'locality',
        'administrative_area'=> 'administrativeArea',
        'postal_code'=> 'postalCode',
        'country_code'=> 'countryCode',
        'address_book'=> 'addressBook'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});