<?php


namespace OAuth2\ClientAuthentication;

/**
 * Interface ClientAuthenticationInterface
 * @package ClientAuthentication
 *
 * If the client type is confidential, the client and authorization
 * server establish a client authentication method suitable for the
 * security requirements of the authorization server.  The authorization
 * server MAY accept any form of client authentication meeting its
 * security requirements.
 *
 * Confidential clients are typically issued (or establish) a set of
 * client credentials used for authenticating with the authorization
 * server (e.g., password, public/private key pair).
 *
 * The authorization server MAY establish a client authentication method
 * with public clients.  However, the authorization server MUST NOT rely
 * on public client authentication for the purpose of identifying the
 * client.
 *
 * The client MUST NOT use more than one authentication method in each
 * request.
 *
 * The authorization server MAY support any suitable HTTP authentication
 * scheme matching its security requirements.  When using other
 * authentication methods, the authorization server MUST define a
 * mapping between the client identifier (registration record) and
 * authentication scheme.
 *
 * This specification does not exclude the use of unregistered clients.
 * However, the use of such clients is beyond the scope of this
 * specification and requires additional security analysis and review of
 * its interoperability impact.
 */
interface ClientAuthenticationMethodInterface
{

}