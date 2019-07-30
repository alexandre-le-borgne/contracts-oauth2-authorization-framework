<?php

namespace OAuth2\Roles;

use Credentials\ClientCredentialsInterface;
use Psr\Http\Message\UriInterface;
use OAuth2\Roles\ClientTypes\ClientTypeInterface;

/**
 * Class AuthorizationServerInterface
 *
 * The server issuing access tokens to the client after successfully
 * authenticating the resource owner and obtaining authorization.
 *
 * The authorization server establishes client credentials with web
 * application clients for the purpose of client authentication.  The
 * authorization server is encouraged to consider stronger client
 * authentication means than a client password.  Web application clients
 * MUST ensure confidentiality of client passwords and other client
 * credentials.
 *
 * The authorization server MUST NOT issue client passwords or other
 * client credentials to native application or user-agent-based
 * application clients for the purpose of client authentication.  The
 * authorization server MAY issue a client password or other credentials
 * for a specific installation of a native application client on a
 * specific device.
 *
 * When client authentication is not possible, the authorization server
 * SHOULD employ other means to validate the client's identity -- for
 * example, by requiring the registration of the client redirection URI
 * or enlisting the resource owner to confirm identity.  A valid
 * redirection URI is not sufficient to verify the client's identity
 * when asking for resource owner authorization but can be used to
 * prevent delivering credentials to a counterfeit client after
 * obtaining resource owner authorization.
 *
 * The authorization server must consider the security implications of
 * interacting with unauthenticated clients and take measures to limit
 * the potential exposure of other credentials (e.g., refresh tokens)
 * issued to such clients.
 */
interface AuthorizationServerInterface extends RoleInterface
{
    /**
     * You can include any other information required by the authorization server
     * (e.g., application name, website, description, logo image, the
     * acceptance of legal terms).
     *
     * The authorization server issues the registered client a client
     * identifier -- a unique string representing the registration
     * information provided by the client.  The client identifier is not a
     * secret; it is exposed to the resource owner and MUST NOT be used
     * alone for client authentication.  The client identifier is unique to
     * the authorization server.
     *
     * The client identifier string size is left undefined by this
     * specification.  The client should avoid making assumptions about the
     * identifier size.  The authorization server SHOULD document the size
     * of any identifier it issues.
     *
     * @param ClientTypeInterface $clientType specify the client type as described in Section 2.1
     * @param UriInterface[] $redirectUris provide its client redirection URIs as described in Section 3.1.2
     * @return string client identifier
     */
    function registerClient(ClientTypeInterface $clientType, array $redirectUris): string;

    /**
     * Confidential clients or other clients issued client credentials MUST
     * authenticate with the authorization server as described in
     * Section 2.3 when making requests to the token endpoint.  Client
     * authentication is used for:
     *
     * o  Enforcing the binding of refresh tokens and authorization codes to
     * the client they were issued to.  Client authentication is critical
     * when an authorization code is transmitted to the redirection
     * endpoint over an insecure channel or when the redirection URI has
     * not been registered in full.
     *
     * o  Recovering from a compromised client by disabling the client or
     * changing its credentials, thus preventing an attacker from abusing
     * stolen refresh tokens.  Changing a single set of client
     * credentials is significantly faster than revoking an entire set of
     * refresh tokens.
     *
     * o  Implementing authentication management best practices, which
     * require periodic credential rotation.  Rotation of an entire set
     * of refresh tokens can be challenging, while rotation of a single
     * set of client credentials is significantly easier.
     *
     * A client MAY use the "client_id" request parameter to identify itself
     * when sending requests to the token endpoint.  In the
     * "authorization_code" "grant_type" request to the token endpoint, an
     * unauthenticated client MUST send its "client_id" to prevent itself
     * from inadvertently accepting a code intended for a client with a
     * different "client_id".  This protects the client from substitution of
     * the authentication code.  (It provides no additional security for the
     * protected resource.)
     *
     * @param ClientCredentialsInterface $credentials
     * @return mixed
     */
    function authenticate(ClientCredentialsInterface $credentials): ClientInterface;
}