<?php


namespace OAuth2\Roles\ClientTypes;

/**
 * Interface ClientTypeInterface
 * @package Roles\ClientTypes
 *
 * OAuth defines two client types, based on their ability to
 * authenticate securely with the authorization server (i.e., ability to
 * maintain the confidentiality of their client credentials).
 *
 * The client type designation is based on the authorization server's
 * definition of secure authentication and its acceptable exposure
 * levels of client credentials.  The authorization server SHOULD NOT
 * make assumptions about the client type.
 *
 * A client may be implemented as a distributed set of components, each
 * with a different client type and security context (e.g., a
 * distributed client with both a confidential server-based component
 * and a public browser-based component).  If the authorization server
 * does not provide support for such clients or does not provide
 * guidance with regard to their registration, the client SHOULD
 * register each component as a separate client.
 */
interface ClientTypeInterface
{

}