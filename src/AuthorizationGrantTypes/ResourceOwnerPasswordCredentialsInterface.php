<?php


namespace OAuth2\AuthorizationGrantTypes;

/**
 * Interface ResourceOwnerPasswordCredentialsInterface
 * @package AuthorizationGrantTypes
 *
 * The resource owner password credentials (i.e., username and password)
 * can be used directly as an authorization grant to obtain an access
 * token.  The credentials should only be used when there is a high
 * degree of trust between the resource owner and the client (e.g., the
 * client is part of the device operating system or a highly privileged
 * application), and when other authorization grant types are not
 * available (such as an authorization code).
 *
 * Even though this grant type requires direct client access to the
 * resource owner credentials, the resource owner credentials are used
 * for a single request and are exchanged for an access token.  This
 * grant type can eliminate the need for the client to store the
 * resource owner credentials for future use, by exchanging the
 * credentials with a long-lived access token or refresh token.
 *
 * The resource owner password credentials grant type is suitable in
 * cases where the resource owner has a trust relationship with the
 * client, such as the device operating system or a highly privileged
 *
 * application.  The authorization server should take special care when
 * enabling this grant type and only allow it when other flows are not
 * viable.
 *
 * This grant type is suitable for clients capable of obtaining the
 * resource owner's credentials (username and password, typically using
 * an interactive form).  It is also used to migrate existing clients
 * using direct authentication schemes such as HTTP Basic or Digest
 * authentication to OAuth by converting the stored credentials to an
 * access token.
 *
 * The resource owner password credentials grant type is often used for
 * legacy or migration reasons.  It reduces the overall risk of storing
 * usernames and passwords by the client but does not eliminate the need
 * to expose highly privileged credentials to the client.
 *
 * This grant type carries a higher risk than other grant types because
 * it maintains the password anti-pattern this protocol seeks to avoid.
 * The client could abuse the password, or the password could
 * unintentionally be disclosed to an attacker (e.g., via log files or
 * other records kept by the client).
 *
 * Additionally, because the resource owner does not have control over
 * the authorization process (the resource owner's involvement ends when
 * it hands over its credentials to the client), the client can obtain
 * access tokens with a broader scope than desired by the resource
 * owner.  The authorization server should consider the scope and
 * lifetime of access tokens issued via this grant type.
 *
 * The authorization server and client SHOULD minimize use of this grant
 * type and utilize other grant types whenever possible.
 */
interface ResourceOwnerPasswordCredentialsInterface
{

}