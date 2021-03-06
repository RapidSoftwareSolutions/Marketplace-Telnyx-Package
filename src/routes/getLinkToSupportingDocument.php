<?php
$app->post('/api/Telnyx/getLinkToSupportingDocument', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['username', 'apiToken', 'portRequestId', 'supportingDocumentId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'origination/porting/port_requests/' . $post_data['args']['portRequestId'] . '/supporting_documents/' . $post_data['args']['supportingDocumentId'] . '/download_links';
    $params = [
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});