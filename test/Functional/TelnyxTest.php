<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');

class TelnyxTest extends BaseTestCase
{

    public function testListMetrics()
    {

        $routes = [
            'deleteUsageReport',
            'getUsageReportStatus',
            'createUsageReport',
            'listUsageReports',
            'deleteMdrUsageReport',
            'getMdrUsageReportStatus',
            'createMdrUsageReport',
            'listMdrUsageReports',
            'deleteMdrRequest',
            'getMdrRequestStatus',
            'createMdrRequest',
            'listMdrRequests',
            'deleteCdrRequest',
            'getCdrRequestStatus',
            'createCdrRequest',
            'listCdrRequests',
            'getLinkToSupportingDocumentForDraftRequest',
            'getSingleSupportingDocumentForDraftRequest',
            'listSupportingDocumentsForDraftPortRequest',
            'getSingleDraftPortSubrequestAllowedDates',
            'updateSingleDraftPortSubrequest',
            'getSingleDraftPortSubrequest',
            'getSubrequestsForDraftPortRequest',
            'submitDraftPortRequest',
            'getSingleDraftPortRequest',
            'createDraftPortRequest',
            'listDraftPortRequests',
            'getLinkToSupportingDocument',
            'getSingleSupportingDocument',
            'listSupportingDocumentsForPortRequest',
            'addCommentToPortRequest',
            'getPortRequestComments',
            'getSingleSubrequest',
            'getSubrequestsForPortRequest',
            'getSinglePortRequest',
            'listPortRequests',
            'checkPhoneNumberPortability',
            'deleteOutboundProfile',
            'updateOutboundProfile',
            'getOutboundProfile',
            'createOutboundProfile',
            'listOutboundProfiles',
            'getNumberSearch',
            'createNumberSearch',
            'createNumberOrder',
            'updateConcurrentChannelSettings',
            'getConcurrentChannelSettings',
            'deleteNumber',
            'enableE911OnNumber',
            'checkUpdateRequest',
            'updateNumbers',
            'updateSingleNumber',
            'getSingleNumber',
            'listNumbers',
            'deleteE911Address',
            'updateE911Address',
            'getSingleE911Address',
            'createE911Address',
            'listE911Addresses',
            'deleteAuthorizedIp',
            'updateAuthorizedIp',
            'createAuthorizedIp',
            'listAuthorizedIps',
            'getConnectionIpAuthTokenSuggestion',
            'updateConnectionIpAuthMethod',
            'setConnectionIpAuth',
            'deleteFQDN',
            'updateFQDN',
            'createFQDN',
            'listFQDNs',
            'updateConnectionFQDNAuth',
            'setConnectionFQDNAuth',
            'getConnectionCredentialsSuggestion',
            'updateConnectionCredentials',
            'createConnectionCredentials',
            'deleteConnection',
            'updateConnection',
            'getSingleConnection',
            'createConnection',
            'listConnections',
            'deleteAddress',
            'updateAddress',
            'getSingleAddress',
            'createAddress',
            'listAddresses',
            'sendSMS',
            'getActiveSendRequests',
            'updateTNMessagingSettings',
            'getTNMessagingSettings',
            'deleteMessagingProfile',
            'getMessagingProfileTNs',
            'getMessagingProfileSmsTNs',
            'generateMessagingProfileSecret',
            'updateMessagingProfile',
            'getSingleMessagingProfile',
            'createMessagingProfile',
            'getMessagingProfiles',
            'getExtendedLRN',
            'getLRN',
            'getCallerInformation'

        ];

        foreach ($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/Telnyx/' . $file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in ' . $file . ' method');
        }
    }

}
