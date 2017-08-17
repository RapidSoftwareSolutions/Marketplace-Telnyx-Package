[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Telnyx/functions?utm_source=RapidAPIGitHub_TelnyxFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Telnyx Package
Telnyx is a VoIP telecom service provider, providing a cloud-based platform that offers access to carrier grade voice services over the internet.
* Domain: [Telnyx](http://telnyx.com)
* Credentials: username, apiToken

## How to get credentials: 
0. Browse to [Telnyx](http://telnyx.com)
1. Register or log in 
3. Go to [API tokens](https://portal.telnyx.com/#/app/api-tokens) and create new one
4. Go to [Connections](https://portal.telnyx.com/#/app/connections) and create new one
5. Go to [Telco data](https://portal.telnyx.com/#/app/telephone-data) and add created token to created connection


## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Telnyx.getCallerInformation
Returns the caller information (if found) for a telephone number

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| number  | String     | The requested telephone number in E.164 format, may or may not begin with "1"

## Telnyx.getLRN
Gets LRN object

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| number  | String     | The requested telephone number in E.164 format, may or may not begin with "1"

## Telnyx.getExtendedLRN
Gets ExtendedLRN object

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| number  | String     | The requested telephone number in E.164 format, may or may not begin with "1"

## Telnyx.getMessagingProfiles
Use this endpoint to get messaging profiles associated with your Telnyx account.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)

## Telnyx.createMessagingProfile
Use this endpoint to create a new messaging profile, required for SMS-capable numbers.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| connectionId| String     | Id of the connection
| name        | String     | Name of the profile
| url         | String     | Url of the profile
| failoverUrl | String     | Failover url of the profile
| method      | String     | Method of the profile

## Telnyx.getSingleMessagingProfile
Use this endpoint to retrieve a messaging profile associated with your Telnyx account.

| Field    | Type       | Description
|----------|------------|----------
| apiToken | credentials| Api token received from Telnyx
| username | credentials| Your Telnyx username (email)
| profileId| String     | Id of the profile

## Telnyx.updateMessagingProfile
Use this endpoint to update a messaging profile associated with your Telnyx account.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| profileId   | String     | Id of the profile
| connectionId| String     | Id of the connection
| name        | String     | Name of the profile
| url         | String     | Url of the profile
| failoverUrl | String     | Failover url of the profile
| method      | String     | Method of the profile

## Telnyx.generateMessagingProfileSecret
To send messages from one of your numbers, you must authenticate using the unique secret/token that is on the associated messaging profile. Use this endpoint to generate a new secret.

| Field    | Type       | Description
|----------|------------|----------
| apiToken | credentials| Api token received from Telnyx
| username | credentials| Your Telnyx username (email)
| profileId| String     | Id of the profile

## Telnyx.getMessagingProfileSmsTNs
Use this endpoint to retrieve a list of SMS-enabled numbers associated with a messaging profile on your Telnyx account.

| Field    | Type       | Description
|----------|------------|----------
| apiToken | credentials| Api token received from Telnyx
| username | credentials| Your Telnyx username (email)
| profileId| String     | Id of the profile

## Telnyx.getMessagingProfileTNs
Use this endpoint to retrieve a list of numbers to associate with one of your messaging profiles.

| Field              | Type       | Description
|--------------------|------------|----------
| apiToken           | credentials| Api token received from Telnyx
| username           | credentials| Your Telnyx username (email)
| connectionId       | String     | Filter numbers by connection ID
| hasMessagingProfile| Select     | Only show numbers associated with a messaging profile

## Telnyx.deleteMessagingProfile
Use this endpoint to delete a messaging profile from your Telnyx account.

| Field    | Type       | Description
|----------|------------|----------
| apiToken | credentials| Api token received from Telnyx
| username | credentials| Your Telnyx username (email)
| profileId| String     | Id of the profile

## Telnyx.getTNMessagingSettings
Use this endpoint to get the settings for one of your SMS-enabled numbers.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| number  | String     | The number in e164 format (without the plus sign)

## Telnyx.updateTNMessagingSettings
Use this endpoint to update the settings for one of your SMS-enabled numbers.

| Field    | Type       | Description
|----------|------------|----------
| apiToken | credentials| Api token received from Telnyx
| username | credentials| Your Telnyx username (email)
| number   | String     | The number in e164 format (without the plus sign)
| profileId| String     | Id of the messaging profile

## Telnyx.getActiveSendRequests
Use this endpoint to expose information about active outbound requests.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)

## Telnyx.sendSMS
Use this endpoint to send a message from an SMS-enabled number.

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| profileSecret| String     | This is the unique, private secret/password belonging to the from number’s messaging profile.
| from         | String     | The source number, in e164 format. This number must be attached to a messaging profile.
| to           | String     | The destination number, in e164 format. 
| message      | String     | The message body.

## Telnyx.listAddresses
Returns all Addresses the user has access to

| Field                | Type       | Description
|----------------------|------------|----------
| apiToken             | credentials| Api token received from Telnyx
| username             | credentials| Your Telnyx username (email)
| page                 | Number     | Page number of results to load
| perPage              | Number     | Number of results per page
| includeNonAddressBook| Select     | Filter to indicate if addresses not in the address book should be shown

## Telnyx.createAddress
Create an Address

| Field             | Type       | Description
|-------------------|------------|----------
| apiToken          | credentials| Api token received from Telnyx
| username          | credentials| Your Telnyx username (email)
| firstName         | String     | First name
| lastName          | String     | Last name
| businessName      | String     | Business name
| phoneNumber       | String     | Phone number
| streetAddress     | String     | Address first line
| extendedAddress   | String     | Address second line
| locality          | String     | Locality (city for US addresses)
| administrativeArea| String     | Administrative area (state for US addresses)
| postalCode        | String     | Postal code
| countryCode       | String     | 2-digit country code
| addressBook       | Select     | Indicates if the address should be considered part of your 'address book' or not; addresses that are in your address book are shown by default when listing addresses, those not in your address book are not. 

## Telnyx.getSingleAddress
Gets a single Address based on the ID supplied.

| Field    | Type       | Description
|----------|------------|----------
| apiToken | credentials| Api token received from Telnyx
| username | credentials| Your Telnyx username (email)
| addressId| String     | Id of the address

## Telnyx.updateAddress
Update a single Address based on the ID supplied.

| Field             | Type       | Description
|-------------------|------------|----------
| apiToken          | credentials| Api token received from Telnyx
| username          | credentials| Your Telnyx username (email)
| addressId         | String     | Id of the address
| firstName         | String     | First name
| lastName          | String     | Last name
| businessName      | String     | Business name
| phoneNumber       | String     | Phone number
| streetAddress     | String     | Address first line
| extendedAddress   | String     | Address second line
| locality          | String     | Locality (city for US addresses)
| administrativeArea| String     | Administrative area (state for US addresses)
| postalCode        | String     | Postal code
| countryCode       | String     | 2-digit country code
| addressBook       | Select     | Indicates if the address should be considered part of your 'address book' or not; addresses that are in your address book are shown by default when listing addresses, those not in your address book are not. 

## Telnyx.deleteAddress
Delete a single Address based on the ID supplied.

| Field    | Type       | Description
|----------|------------|----------
| apiToken | credentials| Api token received from Telnyx
| username | credentials| Your Telnyx username (email)
| addressId| String     | Id of the address

## Telnyx.listConnections
Returns all Connections the user has access to

| Field               | Type       | Description
|---------------------|------------|----------
| apiToken            | credentials| Api token received from Telnyx
| username            | credentials| Your Telnyx username (email)
| page                | Number     | Page number of results to load
| perPage             | Number     | Number of results per page
| withIps             | Select     | Specify as true to include authorized IPs along with connections
| withAuth            | Select     | Specify as true to include credential authentication details along with connections. Please note this only affects connections for which the authorization type is credential-based authentication.
| withFQDNS           | Select     | Specify as true to include FQDN / domain details along with connections. Please note this only affects connections for which the authorization type is FQDN-based authentication.
| mode                | Select     | Optional parameter to specify typeahead mode. Doing so limits the amount of details returned but speeds up calls.
| orderBy             | Select     | Specify an ordering for the results.
| sortDirection       | Select     | The sort_direction specifies in which way the ordering of the connections is applied.
| filterConnectionName| String     | Optional filtering parameter. If present, connections with at least a partial match will be returned. Matching is not case-sensitive. Requires at least three characters.
| filterIpAddress     | String     |  Optional filtering parameter. If present, only connections with one or more matching authorized IP addresses will be returned.
| filterAuthUserName  | String     | Optional filtering parameter. If present, only connections of credential-based authentication will be returned, and only those with a user_name that is at least a partial match with the value provided. Requires at least three characters.

## Telnyx.createNewConection
Create new connection

| Field                         | Type       | Description
|-------------------------------|------------|----------
| apiToken                      | credentials| Api token received from Telnyx
| username                      | credentials| Your Telnyx username (email)
| connectionName                | String     | Name of the connection
| active                        | Select     | Defaults to true
| dnisNumberFormat              | Select     | E.164 = 0, Strip-1 = 1, Strip-2 = 2
| timeout1xx                    | Number     | Time(sec) before aborting if connection is not made (min: 1, max: 20)
| timeout2xx                    | Number     | Time(sec) before aborting if call is unanswered (min: 1, max: 600)
| aniOverrideType               | Select     | Specifies when we apply your ani_override setting. Only applies when ani_override is not blank.
| aniOverride                   | String     | Set a phone number as the ani_override value to override caller id number on outbound calls
| sipCompactHeadersEnabled      | Select     | Defaults to true
| transportProtocol             | Select     | One of UDP, TLS, or TCP. Applies only to connections with IP authentication or FQDN authentication.
| thirdPartyControlEnabled      | Select     | Applies to calls sent TO this connection.
| privacyZoneEnabled            | Select     | By default, Telnyx does not send caller-id information when the caller has chosen to hide this information. When this option is enabled, Telnyx will send the SIP header Privacy:id plus the caller-id information so that the receiver side can choose when to hide it.
| codecs                        | List       | Defines the list of codecs that Telnyx will send for inbound calls to a specific number on your portal account, in priority order. This only works when the Connection the number is assigned to uses Media Handling mode: default. OPUS and H.264 codecs are available only when using TCP or TLS transport for SIP
| prackEnabled                  | Select     | Enable PRACK messages as defined in RFC3262
| defaultRoutingMethod          | Select     | Default routing method to be used when a number is associated with the connection.
| defaultPrimaryAuthorizedIpId  | Number     | The default primary IP to use for the number. Only settable if the connection is of IP authentication type. Value must be the ID of an authorized IP set on the connection.
| defaultSecondaryAuthorizedIpId| Number     | The default secondary IP to use for the number. Only settable if the connection is of IP authentication type. Value must be the ID of an authorized IP set on the connection.
| defaultTertiaryAuthorizedIpId | Number     | The default tertiary IP to use for the number. Only settable if the connection is of IP authentication type. Value must be the ID of an authorized IP set on the connection.
| anchorsiteOverride            | Select     | "Latency" directs Telnyx to route media through the site with the lowest round-trip time to the user's connection. Telnyx calculates this time using ICMP ping messages. This can be disabled by specifying a site to handle all media.
| encryptedMedia                | Select     | Enable use of SRTP or ZRTP for encryption. Valid values are those listed or null. Cannot be set to non-null if the transport_portocol is TLS.
| instantRingbackEnabled        | Select     | When set, ringback will not wait for indication before sending ringback tone to calling party.
| t38ReinviteSource             | Select     | This setting only affects connections with Fax-type Outbound Profiles. The setting dictates whether or not Telnyx sends a t.38 reinvite. By default, Telnyx will send the re-invite. If set to `customer`, the caller is expected to send the t.38 reinvite.
| aniNumberFormat               | Select     | This setting allows you to set the format with which the caller's number (ANI) is sent for inbound phone calls.
| isupHeadersEnabled            | Select     | When set, inbound phone calls will receive ISUP parameters via SIP headers. (Only when available and only when using TCP or TLS transport.) Defaults to false.
| encodeContactHeaderEnabled    | Select     | Encode the SIP contact header sent by Telnyx to avoid issues for NAT or ALG scenarios
| inboundGenerateRingbackTone   | Select     | Generate ringback tone through 183 session progress message with early media
| outboundGenerateRingbackTone  | Select     | Generate ringback tone through 183 session progress message with early media
| dtmfType                      | Select     | Sets the type of DTMF digits sent from Telnyx to this Connection. Note that DTMF digits sent to Telnyx will be accepted in all formats.
| outboundLocalization          | String     | A 2-character country code specifying the country whose national dialing rules should be used. For example, if set to `US` then any US number can be dialed without preprending +1 to the number. When left blank, Telnyx will try US and GB dialing rules, in that order, by default.

## Telnyx.getSingleConnection
Gets a single connection based on the ID supplied.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| connectionId| String     | Id of the connection

## Telnyx.updateConnection
update a single connection based on the ID supplied.

| Field                         | Type       | Description
|-------------------------------|------------|----------
| apiToken                      | credentials| Api token received from Telnyx
| username                      | credentials| Your Telnyx username (email)
| connectionId                  | String     | Id of the connection
| connectionName                | String     | Name of the connection
| active                        | Select     | Defaults to true
| dnisNumberFormat              | Select     | E.164 = 0, Strip-1 = 1, Strip-2 = 2
| timeout1xx                    | Number     | Time(sec) before aborting if connection is not made (min: 1, max: 20)
| timeout2xx                    | Number     | Time(sec) before aborting if call is unanswered (min: 1, max: 600)
| aniOverrideType               | Select     | Specifies when we apply your ani_override setting. Only applies when ani_override is not blank.
| aniOverride                   | String     | Set a phone number as the ani_override value to override caller id number on outbound calls
| sipCompactHeadersEnabled      | Select     | Defaults to true
| transportProtocol             | Select     | One of UDP, TLS, or TCP. Applies only to connections with IP authentication or FQDN authentication.
| thirdPartyControlEnabled      | Select     | Applies to calls sent TO this connection.
| privacyZoneEnabled            | Select     | By default, Telnyx does not send caller-id information when the caller has chosen to hide this information. When this option is enabled, Telnyx will send the SIP header Privacy:id plus the caller-id information so that the receiver side can choose when to hide it.
| codecs                        | List       | Defines the list of codecs that Telnyx will send for inbound calls to a specific number on your portal account, in priority order. This only works when the Connection the number is assigned to uses Media Handling mode: default. OPUS and H.264 codecs are available only when using TCP or TLS transport for SIP
| prackEnabled                  | Select     | Enable PRACK messages as defined in RFC3262
| defaultRoutingMethod          | Select     | Default routing method to be used when a number is associated with the connection.
| defaultPrimaryAuthorizedIpId  | Number     | The default primary IP to use for the number. Only settable if the connection is of IP authentication type. Value must be the ID of an authorized IP set on the connection.
| defaultSecondaryAuthorizedIpId| Number     | The default secondary IP to use for the number. Only settable if the connection is of IP authentication type. Value must be the ID of an authorized IP set on the connection.
| defaultTertiaryAuthorizedIpId | Number     | The default tertiary IP to use for the number. Only settable if the connection is of IP authentication type. Value must be the ID of an authorized IP set on the connection.
| anchorsiteOverride            | Select     | "Latency" directs Telnyx to route media through the site with the lowest round-trip time to the user's connection. Telnyx calculates this time using ICMP ping messages. This can be disabled by specifying a site to handle all media.
| encryptedMedia                | Select     | Enable use of SRTP or ZRTP for encryption. Valid values are those listed or null. Cannot be set to non-null if the transport_portocol is TLS.
| instantRingbackEnabled        | Select     | When set, ringback will not wait for indication before sending ringback tone to calling party.
| t38ReinviteSource             | Select     | This setting only affects connections with Fax-type Outbound Profiles. The setting dictates whether or not Telnyx sends a t.38 reinvite. By default, Telnyx will send the re-invite. If set to `customer`, the caller is expected to send the t.38 reinvite.
| aniNumberFormat               | Select     | This setting allows you to set the format with which the caller's number (ANI) is sent for inbound phone calls.
| isupHeadersEnabled            | Select     | When set, inbound phone calls will receive ISUP parameters via SIP headers. (Only when available and only when using TCP or TLS transport.) Defaults to false.
| encodeContactHeaderEnabled    | Select     | Encode the SIP contact header sent by Telnyx to avoid issues for NAT or ALG scenarios
| inboundGenerateRingbackTone   | Select     | Generate ringback tone through 183 session progress message with early media
| outboundGenerateRingbackTone  | Select     | Generate ringback tone through 183 session progress message with early media
| dtmfType                      | Select     | Sets the type of DTMF digits sent from Telnyx to this Connection. Note that DTMF digits sent to Telnyx will be accepted in all formats.
| outboundLocalization          | String     | A 2-character country code specifying the country whose national dialing rules should be used. For example, if set to `US` then any US number can be dialed without preprending +1 to the number. When left blank, Telnyx will try US and GB dialing rules, in that order, by default.

## Telnyx.deleteConnection
Deletes a single connection based on the ID supplied.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| connectionId| String     | Id of the connection

## Telnyx.createConnectionCredentials
Sets the connection given by connectionId to use credentials-based authentication. This will remove any other authentication type set for the connection.

| Field             | Type       | Description
|-------------------|------------|----------
| apiToken          | credentials| Api token received from Telnyx
| username          | credentials| Your Telnyx username (email)
| connectionId      | String     | Id of the connection
| connectionUsername| String     | Username that will be sent when using the connection. Must be globally unique. Case-insensitive.
| connectionPassword| String     | Password that will be sent when using the connection. Must be at least 8 characters or more in length.

## Telnyx.updateConnectionCredentials
Update the credentials used for authenticating the connection given

| Field             | Type       | Description
|-------------------|------------|----------
| apiToken          | credentials| Api token received from Telnyx
| username          | credentials| Your Telnyx username (email)
| connectionId      | String     | Id of the connection
| connectionUsername| String     | Username that will be sent when using the connection. Must be globally unique. Case-insensitive.
| connectionPassword| String     | Password that will be sent when using the connection. Must be at least 8 characters or more in length.

## Telnyx.getConnectionCredentialsSuggestion
Get a suggestion for a username and password for use when creating a credentials authentication record for the connection given by connectionIds.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| connectionId| String     | Id of the connection

## Telnyx.setConnectionFQDNAuth
Sets the connection given by connectionId to use FQDN-based authentication. This will remove any other authentication type set for the connection. Please note that domains themselves are not added through this endpoint.

| Field                     | Type       | Description
|---------------------------|------------|----------
| apiToken                  | credentials| Api token received from Telnyx
| username                  | credentials| Your Telnyx username (email)
| connectionId              | String     | Id of the connection
| connectionUsername        | String     | Username that will be sent when using the connection. Must be globally unique. Case-insensitive.
| connectionPassword        | String     | Password that will be sent when using the connection. Must be at least 8 characters or more in length.
| ipAuthenticationMethod    | Select     | The method of authentication to use if this FQDN auth strategy uses IP-based outbound. Defaults to "tech-prefix". Has no effect if this auth strategy uses credentials for outbound authentication.
| fqdnOutboundAuthentication| Select     | The method of authentication to use for outbound calls on this authentication strategy. Defaults to "credential-authentication".

## Telnyx.updateConnectionFQDNAuth
Update the credentials used for authenticating the connection given

| Field                     | Type       | Description
|---------------------------|------------|----------
| apiToken                  | credentials| Api token received from Telnyx
| username                  | credentials| Your Telnyx username (email)
| connectionId              | String     | Id of the connection
| connectionUsername        | String     | Username that will be sent when using the connection. Must be globally unique. Case-insensitive.
| connectionPassword        | String     | Password that will be sent when using the connection. Must be at least 8 characters or more in length.
| ipAuthenticationMethod    | Select     | The method of authentication to use if this FQDN auth strategy uses IP-based outbound. Defaults to "tech-prefix". Has no effect if this auth strategy uses credentials for outbound authentication.
| fqdnOutboundAuthentication| Select     | The method of authentication to use for outbound calls on this authentication strategy. Defaults to "credential-authentication".

## Telnyx.listFQDNs
Returns all FQDNs the user has access to

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| page    | Number     | Page number of results to load
| perPage | Number     | Number of results per page

## Telnyx.createFQDN
Creates a new FQDN.

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| connectionId | String     | Id of the connection
| fqdn         | String     | Your FQDN
| port         | Number     | Port number
| dnsRecordType| Select     | the DNS record type for the FQDN. For cases where a port is not set, the DNS record type must be 'srv'. For cases where a port is set, the DNS record type must be 'a'. If the DNS record type is 'a' and a port is not specified, 5060 will be used.

## Telnyx.updateFQDN
Updates a single FQDN based on the ID supplied

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| fqdnId       | String     | Id of the fqdn
| connectionId | String     | Id of the connection
| fqdn         | String     | Your FQDN
| port         | Number     | Port number
| dnsRecordType| Select     | the DNS record type for the FQDN. For cases where a port is not set, the DNS record type must be 'srv'. For cases where a port is set, the DNS record type must be 'a'. If the DNS record type is 'a' and a port is not specified, 5060 will be used.

## Telnyx.deleteFQDN
Deletes a single FQDN based on the ID supplied

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| fqdnId  | String     | Id of the fqdn

## Telnyx.setConnectionIpAuth
Sets the connection given by connectionId to use IP-based authentication. This will remove any other authentication type set for the connection. Please note that authorized IP addresses are not added through this endpoint.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| connectionId| String     | Id of the connectionl

## Telnyx.updateConnectionIpAuthMethod
Update the IP authentication strategy used for authenticating the given connection

| Field                 | Type       | Description
|-----------------------|------------|----------
| apiToken              | credentials| Api token received from Telnyx
| username              | credentials| Your Telnyx username (email)
| connectionId          | String     | Id of the connectionl
| ipAuthenticationMethod| Select     | The method of IP authentication to use along with the connection. Defaults to tech-prefix. Can be tech-prefix, token or p-charge-info

## Telnyx.getConnectionIpAuthTokenSuggestion
Gets a suggestion for a token to use with the IP authentication method token for the connection specified by connection_id. This is not 'binding' you can use a value other than one returned by this endpoint as a token. It is provided as a convenient way of getting a randomly generated token for a connection using that authentication method.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| connectionId| String     | Id of the connectionl

## Telnyx.listAuthorizedIps
Returns all Authorized IPs the user has access to

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| page    | Number     | Page number of results to load
| perPage | Number     | Number of results per page

## Telnyx.createAuthorizedIp
Creates a new Authorized IP.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| connectionId| String     | Id of the connection
| ipAddress   | String     | Valid IP address

## Telnyx.updateAuthorizedIp
Updates existing Authorized IP.

| Field         | Type       | Description
|---------------|------------|----------
| apiToken      | credentials| Api token received from Telnyx
| username      | credentials| Your Telnyx username (email)
| authorizedIpId| String     | Id of the authorized ip
| connectionId  | String     | Id of the connection
| ipAddress     | String     | Valid IP address

## Telnyx.deleteAuthorizedIp
Deletes existing Authorized IP.

| Field         | Type       | Description
|---------------|------------|----------
| apiToken      | credentials| Api token received from Telnyx
| username      | credentials| Your Telnyx username (email)
| authorizedIpId| String     | Id of the authorized ip

## Telnyx.listE911Addresses
Returns all E911 Addresses the user has access to

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| page    | Number     | Page number of results to load
| perPage | Number     | Number of results per page

## Telnyx.createE911Address
Creating an E911 Address requires the address fields to exactly match E911 Service records. All capital letters, and no punctuation is generally sufficient.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| firstName   | String     | Required if business name not given
| lastName    | String     | Required if business name not given
| businessName| String     | Required if personal name not given
| line1       | String     | Address first line
| line2       | String     | Address second line
| city        | String     | Address city
| state       | String     | Address state
| postalCode  | String     | Address postal code

## Telnyx.getSingleE911Address
Gets a single E911 Address based on the ID supplied.

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| e911AddressId| String     | Id of the e911 address

## Telnyx.updateE911Address
Updates a single E911 Address based on the ID supplied.

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| e911AddressId| String     | Id of the e911 address
| firstName    | String     | Required if business name not given
| lastName     | String     | Required if business name not given
| businessName | String     | Required if personal name not given
| line1        | String     | Address first line
| line2        | String     | Address second line
| city         | String     | Address city
| state        | String     | Address state
| postalCode   | String     | Address postal code

## Telnyx.deleteE911Address
Deletes a single E911 Address based on the ID supplied.

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| e911AddressId| String     | Id of the e911 address

## Telnyx.listNumbers
Returns all numbers that the user has access to.

| Field                   | Type       | Description
|-------------------------|------------|----------
| apiToken                | credentials| Api token received from Telnyx
| username                | credentials| Your Telnyx username (email)
| page                    | Number     | Page number of results to load
| perPage                 | Number     | Number of results per page
| filterTag               | String     | Optional filtering parameter. If present, only numbers that have been tagged 　with the string given will be returned. Returns exact matches only.
| filterNumberVal         | String     | Optional filtering parameter. If present, only numbers that at least partially match the value given in their number will be returned. Requires at least three digits. Non-numerical characters should not be present in the filter and will result in no values being returned.
| filterStatus            | Select     |  Optional filtering parameter. If present, only numbers that have the same status as specified will be returned.
| filterConnectionName    | String     | Optional filtering parameter. If present, only numbers that have a connection that at least partially matches the string given will be returned. Matching is not case-sensitive. Requires at least three characters. Numbers without a connection will not be returned.
| filterUsagePaymentMethod| Select     | Optional filtering parameter. If present, only numbers that have the filterUsagePaymentMethod that at matches the string given will be returned. Matching is case-sensitive and only specified values are allowed.
| orderBy                 | Select     | Specify an ordering for the results.
| sortDirection           | Select     | The sort_direction specifies in which way the ordering of the connections is applied.

## Telnyx.getSingleNumber
Retrieve a single number - ID supplied can be the telephone number (ex: +12124567890) or object ID

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| number  | String     | Phone number or objectID

## Telnyx.updateSingleNumber
Updates a single number - ID supplied can be the telephone number (ex: +12124567890) or object ID

| Field                     | Type       | Description
|---------------------------|------------|----------
| apiToken                  | credentials| Api token received from Telnyx
| username                  | credentials| Your Telnyx username (email)
| number                    | String     | Phone number or objectID
| connectionId              | String     | Id of the connection
| primaryIp                 | String     | Primary ip
| secondaryIp               | String     | Secondary ip
| tertiaryIp                | String     | Tertiary ip
| primaryPort               | Number     | Primary ip port
| secondaryPort             | Number     | Secondary ip port
| tertiaryPort              | Number     | Tertiary ip port
| primaryFqdn               | String     | The primary domain name for the number. Only relevant for numbers using a connection of FQDN-based authentication.
| secondaryFqdn             | String     | The secondary domain name for the number. Only relevant for numbers using a connection of FQDN-based authentication.
| tertiaryFqdn              | String     | The tertiary domain name for the number. Only relevant for numbers using a connection of FQDN-based authentication.
| primaryFqdnPort           | Number     | Port for the primary FQDN
| secondaryFqdnPort         | Number     | Port for the secondary FQDN
| tertiaryFqdnPort          | Number     | Port for the tertiary FQDN
| enableTechPrefix          | Select     | Whether tech prefix is enabled
| translatedNumber          | String     | Translated number
| forwardsTo                | String     | The number that this number should be forwarded to; when this is set, forwardingType must also be set
| forwardingType            | Select     | sets when this number should have its calls forwarded; valid values are 'always' and 'on-failure'
| enableCallerIdName        | Select     | If true, enables sending of CNAME information for incoming calls to the number
| usagePaymentMethod        | Select     | setting for whether a number is billed per minute or uses your concurrent channels. Can be pay-per-minute or channel
| enableRtpAutoAdjust       | Select     | When RTP Auto-Adjust is enabled, the destination RTP address port will be automatically changed to match the source of the incoming RTP packets.
| mediaHandlingMode         | Select     | default: media routed through Telnyx with transcode support. proxy: media routed through Telnyx with no transcode support. bypass: media routed directly between origination and termination endpoints. Only Telnyx support may set a number to bypass mode.Can be default, proxy or bypass
| routingMethod             | Select     | The method for selecting the next connection IP address to use when dispatching calls for the number. This value has no effect for numbers that are not on a connection using IP authentication.Can be sequential or round-robin
| cnamListingEnabled        | Select     | Enable CNAM listings for this number. Requires cnamListingDetails to also be filled in. Changes to this must be reviewed by Telnyx support and will not be active until this process is complete.
| cnamListingDetails        | String     | The CNAM listing details for this number. Must be alphanumeric characters or spaces with a maximum length of 15. Requires cnamListingEnabled to also be set. Changes to this must be reviewed by Telnyx support and will not be active until this process is complete.
| t38FaxGatewayEnabled      | Select     | If true, fax gateway is enabled
| acceptAnyRtpPacketsEnabled| Select     | If true, accepts any rtp packets
| tagList                   | List       | Array of tags for this number

## Telnyx.updateNumbers
Update multiple numbers at once

| Field                     | Type       | Description
|---------------------------|------------|----------
| apiToken                  | credentials| Api token received from Telnyx
| username                  | credentials| Your Telnyx username (email)
| numberIds                 | List       | Array of number ids and/or number values to update
| connectionId              | String     | Id of the connection
| primaryIp                 | String     | Primary ip
| secondaryIp               | String     | Secondary ip
| tertiaryIp                | String     | Tertiary ip
| primaryPort               | Number     | Primary ip port
| secondaryPort             | Number     | Secondary ip port
| tertiaryPort              | Number     | Tertiary ip port
| e911Enabled               | Select     | If true, enables e911
| e911AddressId             | String     | Address id for 3911
| addressId                 | String     | Address id
| enableTechPrefix          | Select     | Whether tech prefix is enabled
| translatedNumber          | String     | Translated number
| forwardsTo                | String     | The number that this number should be forwarded to; when this is set, forwardingType must also be set
| forwardingType            | Select     | sets when this number should have its calls forwarded; valid values are 'always' and 'on-failure'
| usagePaymentMethod        | Select     | setting for whether a number is billed per minute or uses your concurrent channels. Can be pay-per-minute or channel
| enableRtpAutoAdjust       | Select     | When RTP Auto-Adjust is enabled, the destination RTP address port will be automatically changed to match the source of the incoming RTP packets.
| mediaHandlingMode         | Select     | default: media routed through Telnyx with transcode support. proxy: media routed through Telnyx with no transcode support. bypass: media routed directly between origination and termination endpoints. Only Telnyx support may set a number to bypass mode.Can be default, proxy or bypass
| t38FaxGatewayEnabled      | Select     | If true, fax gateway is enabled
| acceptAnyRtpPacketsEnabled| Select     | If true, accepts any rtp packets
| tagList                   | List       | Array of tags for this number

## Telnyx.checkUpdateRequest
Get status of mass numbers update

| Field          | Type       | Description
|----------------|------------|----------
| apiToken       | credentials| Api token received from Telnyx
| username       | credentials| Your Telnyx username (email)
| updateRequestId| String     | Id of the mass numbers update request

## Telnyx.enableE911OnNumber
Enable E911 - ID supplied can be the telephone number (ex: +12124567890) or object ID

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| number       | String     | Phone number or objectID
| e911Enabled  | Select     | If true, enables e911
| e911AddressId| String     | Address id for 3911

## Telnyx.deleteNumber
Deletes number - ID supplied can be the telephone number (ex: +12124567890) or object ID

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| number  | String     | Phone number or objectID

## Telnyx.getConcurrentChannelSettings
Get your concurrent channel settings

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)

## Telnyx.updateConcurrentChannelSettings
Update your concurrent channel settings

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| channels| Number     | The new number of concurrent channels you want. You may check the cost per channel on the pricing page. Please note you may not set your channel count to 0 if you have any numbers using channel billing.

## Telnyx.createNumberOrder
Creates a number order. All numbers included in the order should have appeared in a NumberSearch within 1 day ago.

| Field                       | Type       | Description
|-----------------------------|------------|----------
| apiToken                    | credentials| Api token received from Telnyx
| username                    | credentials| Your Telnyx username (email)
| requestedNumbersWithMetadata| List       | Number with metadata
| requestedInexplicitNumbers  | List       | JSON object with explicit number properties
| requestedNumbers            | List       | Requested numbers

## Telnyx.createNumberSearch
Creates number search

| Field           | Type       | Description
|-----------------|------------|----------
| apiToken        | credentials| Api token received from Telnyx
| username        | credentials| Your Telnyx username (email)
| searchType      | Select     | NPA/NXX = 1, Region = 2, Tollfree = 3, Advanced = 4
| searchDescriptor| JSON       | JSOn object with search descriptor of proper type
| limit           | Number     | Search limit

## Telnyx.getNumberSearch
Get number search status

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| searchId| String     | Id of the number search

## Telnyx.listOutboundProfiles
Returns all Outbound Profiles the user has access to

| Field                       | Type       | Description
|-----------------------------|------------|----------
| apiToken                    | credentials| Api token received from Telnyx
| username                    | credentials| Your Telnyx username (email)
| whitelistedDestinationFormat| Select     | Format of your whitelisted destinations.
| page                        | Number     | Page number of results to load
| perPage                     | Number     | Number of results per page

## Telnyx.createOutboundProfile
Creates a new Outbound Profile.

| Field                       | Type       | Description
|-----------------------------|------------|----------
| apiToken                    | credentials| Api token received from Telnyx
| username                    | credentials| Your Telnyx username (email)
| connectionIds               | List       | Connection IDs
| trafficType                 | Select     | Conversational = 1, Fax = 3
| servicePlan                 | Select     | US = 1, International = 2
| active                      | Select     | Defaults to true
| translationRule             | String     | Only configure if advised by Telnyx support
| cpsLimitIncrease            | Number     | Increase cps limit
| ports                       | Number     | Must be no more than your concurrent call limit. Null means no limit.
| tagList                     | List       | List of tags
| filterUsagePaymentMethod    | Select     | Optional filtering parameter. If present, only numbers that have the filterUsagePaymentMethod that at matches the string given will be returned. Matching is case-sensitive and only specified values are allowed.
| whitelistedDestinationFormat| Select     | Format of your whitelisted destinations.
| whitelistedDestinations     | List       | Whitelisted destinations

## Telnyx.getOutboundProfile
Gets a single Outbound Profile based on the ID supplied.

| Field            | Type       | Description
|------------------|------------|----------
| apiToken         | credentials| Api token received from Telnyx
| username         | credentials| Your Telnyx username (email)
| outboundProfileId| String     | Id of the outbound profile

## Telnyx.updateOutboundProfile
Updates a single Outbound Profile based on the ID supplied.

| Field                       | Type       | Description
|-----------------------------|------------|----------
| apiToken                    | credentials| Api token received from Telnyx
| username                    | credentials| Your Telnyx username (email)
| outboundProfileId           | String     | Id of the outbound profile
| connectionIds               | List       | Connection IDs
| trafficType                 | Select     | Conversational = 1, Fax = 3
| servicePlan                 | Select     | US = 1, International = 2
| active                      | Select     | Defaults to true
| translationRule             | String     | Only configure if advised by Telnyx support
| cpsLimitIncrease            | Number     | Increase cps limit
| ports                       | Number     | Must be no more than your concurrent call limit. Null means no limit.
| tagList                     | List       | List of tags
| filterUsagePaymentMethod    | Select     | Optional filtering parameter. If present, only numbers that have the filterUsagePaymentMethod that at matches the string given will be returned. Matching is case-sensitive and only specified values are allowed.
| whitelistedDestinationFormat| Select     | Format of your whitelisted destinations.
| whitelistedDestinations     | List       | Whitelisted destinations

## Telnyx.deleteOutboundProfile
Deletes a single Outbound Profile based on the ID supplied.

| Field            | Type       | Description
|------------------|------------|----------
| apiToken         | credentials| Api token received from Telnyx
| username         | credentials| Your Telnyx username (email)
| outboundProfileId| String     | Id of the outbound profile

## Telnyx.checkPhoneNumberPortability
Check a list of numbers to see if they're portable.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| phoneNumbers| List       | Phone numbers to check

## Telnyx.listPortRequests
Returns all port requests that your user has access to

| Field              | Type       | Description
|--------------------|------------|----------
| apiToken           | credentials| Api token received from Telnyx
| username           | credentials| Your Telnyx username (email)
| page               | Number     | Page number of results to load
| perPage            | Number     | Number of results per page
| search             | String     | Filter results by supportkey (pr*) or partial phone number
| status             | Select     | Filter results by status
| includePhoneNumbers| Select     | Include phone number objects in the results
| includeSubRequests | Select     | Include sub request objects in the results

## Telnyx.getSinglePortRequest
Returns a single port request based on the id supplied

| Field              | Type       | Description
|--------------------|------------|----------
| apiToken           | credentials| Api token received from Telnyx
| username           | credentials| Your Telnyx username (email)
| portRequestId      | String     | Id of the port request
| includePhoneNumbers| Select     | Include phone number objects in the results
| includeSubRequests | Select     | Include sub request objects in the results

## Telnyx.getSubrequestsForPortRequest
Get the sub requests for a given port request

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| portRequestId| String     | Id of the port request

## Telnyx.getSingleSubrequest
Get a sub request belonging to the given port request id

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| portRequestId| String     | Id of the port request
| subrequestId | String     | Id of the port subrequest

## Telnyx.getPortRequestComments
Get the comments for a given port request

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| portRequestId| String     | Id of the port request

## Telnyx.addCommentToPortRequest
Add comment to a given port request

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| portRequestId| String     | Id of the port request
| comment      | String     | Body of the comment
| subrequestId | String     | Id of the subrequest

## Telnyx.listSupportingDocumentsForPortRequest
List supporting documents for the given port request

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| portRequestId| String     | Id of the port request

## Telnyx.getSingleSupportingDocument
Get a supporting document belonging to the given port request id.

| Field               | Type       | Description
|---------------------|------------|----------
| apiToken            | credentials| Api token received from Telnyx
| username            | credentials| Your Telnyx username (email)
| portRequestId       | String     | Id of the port request
| supportingDocumentId| String     | Id of the supporting document

## Telnyx.getLinkToSupportingDocument
Create link to allows downloading this document. Expires in 1 hour.

| Field               | Type       | Description
|---------------------|------------|----------
| apiToken            | credentials| Api token received from Telnyx
| username            | credentials| Your Telnyx username (email)
| portRequestId       | String     | Id of the port request
| supportingDocumentId| String     | Id of the supporting document

## Telnyx.listDraftPortRequests
Returns all draft port requests that your user has access to

| Field              | Type       | Description
|--------------------|------------|----------
| apiToken           | credentials| Api token received from Telnyx
| username           | credentials| Your Telnyx username (email)
| page               | Number     | Page number of results to load
| perPage            | Number     | Number of results per page
| search             | String     | Filter results by supportkey (pr*) or partial phone number
| status             | Select     | Filter results by status
| includePhoneNumbers| Select     | Include phone number objects in the results
| includeSubRequests | Select     | Include sub request objects in the results

## Telnyx.createDraftPortRequest
Creates a new draft port request

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| phoneNumbers| List       | List of phone numbers to port

## Telnyx.getSingleDraftPortRequest
Returns a single draft port request based on the id supplied

| Field              | Type       | Description
|--------------------|------------|----------
| apiToken           | credentials| Api token received from Telnyx
| username           | credentials| Your Telnyx username (email)
| draftPortRequestId | String     | Id of the draft port request
| includePhoneNumbers| Select     | Include phone number objects in the results
| includeSubRequests | Select     | Include sub request objects in the results

## Telnyx.submitDraftPortRequest
Once all of the sub requests belonging to a draft port request are populated with required information the draft port request can be submitted, initiating the porting process. Once successfully submitted changes can no longer be made to the draft port request.

| Field             | Type       | Description
|-------------------|------------|----------
| apiToken          | credentials| Api token received from Telnyx
| username          | credentials| Your Telnyx username (email)
| draftPortRequestId| String     | Id of the draft port request

## Telnyx.getSubrequestsForDraftPortRequest
Get the sub requests for a given draft port request

| Field             | Type       | Description
|-------------------|------------|----------
| apiToken          | credentials| Api token received from Telnyx
| username          | credentials| Your Telnyx username (email)
| draftPortRequestId| String     | Id of the draft port request

## Telnyx.getSingleDraftPortSubrequest
Get a sub request belonging to the given draft port request id

| Field             | Type       | Description
|-------------------|------------|----------
| apiToken          | credentials| Api token received from Telnyx
| username          | credentials| Your Telnyx username (email)
| draftPortRequestId| String     | Id of the draft port request
| subrequestId      | String     | Id of the port subrequest

## Telnyx.updateSingleDraftPortSubrequest
Update a sub request belonging to the given draft port request id

| Field                 | Type       | Description
|-----------------------|------------|----------
| apiToken              | credentials| Api token received from Telnyx
| username              | credentials| Your Telnyx username (email)
| draftPortRequestId    | String     | Id of the draft port request
| subrequestId          | String     | Id of the port subrequest
| focDateRequestedByUser| DatePicker | Date/Time requested for the FOC date
| personOrCompanyName   | String     | Person Name or Company name requesting the port
| authPersonName        | String     | Name of person authorizing the port request
| billingPhoneNumber    | String     | Billing phone number associated with these phone numbers
| streetAddress         | String     | First line of billing address
| extendedAddress       | String     | Second line of billing address
| locality              | String     | City of billing address
| administrativeArea    | String     | Two character state abbreviation of billing address
| postalCode            | String     | Postal Code of billing address
| countryCode           | String     | ISO3166-1 alpha-2 country code of billing address
| defaultConnectionId   | String     | ID of connection to set on the numbers when ported
| portingOptionType     | Select     | A port can be either 'full' or 'partial'. When type is 'full' the other attributes should be ommitted.
| remainingNumbersAction| Select     | Remaining numbers can be either kept with their current service provider or disconnected. 'newBillingPhoneNumber' is required when 'remainingNumbersAction' is 'keep'.
| newBillingPhoneNumber | String     | New billing telephone numbers for the remaining numbers. This will be set on your account with your current service provider and should be one of the numbers remaining on that account.
| pinPasscode           | String     | PIN/passcode for accounts that have wireless type numbers
| accountNumber         | String     | The authorized person's account number with the current service provider
| taxIdentifier         | String     | European tax identification number. Applicable only in the European Union
| businessIdentifier    | String     | European business identification number. Applicable only in the European Union

## Telnyx.getSingleDraftPortSubrequestAllowedDates
Get the allowed FOC dates for a draft sub request

| Field             | Type       | Description
|-------------------|------------|----------
| apiToken          | credentials| Api token received from Telnyx
| username          | credentials| Your Telnyx username (email)
| draftPortRequestId| String     | Id of the draft port request
| subrequestId      | String     | Id of the port subrequest

## Telnyx.listSupportingDocumentsForDraftPortRequest
List supporting documents for the given draft port request

| Field             | Type       | Description
|-------------------|------------|----------
| apiToken          | credentials| Api token received from Telnyx
| username          | credentials| Your Telnyx username (email)
| draftPortRequestId| String     | Id of the draft port request

## Telnyx.getSingleSupportingDocumentForDraftRequest
Get a supporting document belonging to the given draft port request id.

| Field               | Type       | Description
|---------------------|------------|----------
| apiToken            | credentials| Api token received from Telnyx
| username            | credentials| Your Telnyx username (email)
| draftPortRequestId  | String     | Id of the draft port request
| supportingDocumentId| String     | Id of the supporting document

## Telnyx.getLinkToSupportingDocumentForDraftRequest
Create download link for document this document. Expires in 1 hour.

| Field               | Type       | Description
|---------------------|------------|----------
| apiToken            | credentials| Api token received from Telnyx
| username            | credentials| Your Telnyx username (email)
| draftPortRequestId  | String     | Id of the draft port request
| supportingDocumentId| String     | Id of the supporting document

## Telnyx.listCdrRequests
Returns all cdr_requests that the user has access to

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| page    | Number     | Page number of results to load
| perPage | Number     | Number of results per page

## Telnyx.createCdrRequest
Create a new cdr_request

| Field      | Type       | Description
|------------|------------|----------
| apiToken   | credentials| Api token received from Telnyx
| username   | credentials| Your Telnyx username (email)
| startTime  | DatePicker | Report start time
| endTime    | DatePicker | Report end time.  Must be less than 24 hours from now
| callTypes  | List       | Inbound = 1, Outbound = 2
| recordTypes| List       | Complete = 1, Incomplete = 2, Errors = 3
| connections| List       | Array of connection IDs
| reportName | String     | Name of the report
| filters    | List       | The 'filters' field specifies a list of query criteria

## Telnyx.getCdrRequestStatus
Get the status of a CDR request. Response includes a link to the report once it is generated.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| cdrRequestId| String     | Id of the cdr request

## Telnyx.deleteCdrRequest
Deletes a CDR request.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| cdrRequestId| String     | Id of the cdr request

## Telnyx.listMdrRequests
Returns all mdr_requests that the user has access to

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| page    | Number     | Page number of results to load
| perPage | Number     | Number of results per page

## Telnyx.createMdrRequest
Create a new mdr_request

| Field      | Type       | Description
|------------|------------|----------
| apiToken   | credentials| Api token received from Telnyx
| username   | credentials| Your Telnyx username (email)
| startTime  | DatePicker | Report start time
| endTime    | DatePicker | Report end time.  Must be less than 24 hours from now
| callTypes  | List       | Inbound = 1, Outbound = 2
| recordTypes| List       | Complete = 1, Incomplete = 2, Errors = 3
| connections| List       | Array of connection IDs
| reportName | String     | Name of the report
| filters    | List       | The 'filters' field specifies a list of query criteria

## Telnyx.getMdrRequestStatus
Get the status of a MDR request. Response includes a link to the report once it is generated.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| mdrRequestId| String     | Id of the mdr request

## Telnyx.deleteMdrRequest
Deletes a MDR request.

| Field       | Type       | Description
|-------------|------------|----------
| apiToken    | credentials| Api token received from Telnyx
| username    | credentials| Your Telnyx username (email)
| mdrRequestId| String     | Id of the mdr request

## Telnyx.listMdrUsageReports
Returns all MDR usage reports that the user has access to

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| page    | Number     | Page number of results to load
| perPage | Number     | Number of results per page

## Telnyx.createMdrUsageReport
Create a new mdr usage report

| Field          | Type       | Description
|----------------|------------|----------
| apiToken       | credentials| Api token received from Telnyx
| username       | credentials| Your Telnyx username (email)
| startTime      | DatePicker | Report start time
| endTime        | DatePicker | Report end time.  Must be less than 24 hours from now
| aggregationType| Select     | Aggregate: All = 0, By Connection = 1
| connections    | List       | Array of connection IDs

## Telnyx.getMdrUsageReportStatus
Get the status of MDR usage report. Response includes a link to the report once it is generated.

| Field           | Type       | Description
|-----------------|------------|----------
| apiToken        | credentials| Api token received from Telnyx
| username        | credentials| Your Telnyx username (email)
| mdrUsageReportId| String     | Id of the mdr usage report

## Telnyx.deleteMdrUsageReport
Delete MDR usage report.

| Field           | Type       | Description
|-----------------|------------|----------
| apiToken        | credentials| Api token received from Telnyx
| username        | credentials| Your Telnyx username (email)
| mdrUsageReportId| String     | Id of the mdr usage report

## Telnyx.listUsageReports
Returns all usage reports that the user has access to

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Api token received from Telnyx
| username| credentials| Your Telnyx username (email)
| page    | Number     | Page number of results to load
| perPage | Number     | Number of results per page

## Telnyx.createUsageReport
Create a new usage report

| Field          | Type       | Description
|----------------|------------|----------
| apiToken       | credentials| Api token received from Telnyx
| username       | credentials| Your Telnyx username (email)
| startTime      | DatePicker | Report start time
| endTime        | DatePicker | Report end time.  Must be less than 24 hours from now
| aggregationType| Select     | Aggregate: All = 0, By Connection = 1
| connections    | List       | Array of connection IDs

## Telnyx.getUsageReportStatus
Get the status of usage report. Response includes a link to the report once it is generated.

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| usageReportId| String     | Id of the usage report

## Telnyx.deleteUsageReport
Delete the usage report. 

| Field        | Type       | Description
|--------------|------------|----------
| apiToken     | credentials| Api token received from Telnyx
| username     | credentials| Your Telnyx username (email)
| usageReportId| String     | Id of the usage report

