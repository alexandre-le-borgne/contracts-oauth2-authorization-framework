<?php


namespace Credentials;

/**
 * The transmission of authorization codes SHOULD be made over a secure
 * channel, and the client SHOULD require the use of TLS with its
 * redirection URI if the URI identifies a network resource.  Since
 * authorization codes are transmitted via user-agent redirections, they
 * could potentially be disclosed through user-agent history and HTTP
 * referrer headers.
 *
 * Authorization codes operate as plaintext bearer credentials, used to
 * verify that the resource owner who granted authorization at the
 * authorization server is the same resource owner returning to the
 * client to complete the process.  Therefore, if the client relies on
 * the authorization code for its own resource owner authentication, the
 * client redirection endpoint MUST require the use of TLS.
 *
 * Authorization codes MUST be short lived and single-use.  If the
 * authorization server observes multiple attempts to exchange an
 * authorization code for an access token, the authorization server
 * SHOULD attempt to revoke all access tokens already granted based on
 * the compromised authorization code.
 *
 * If the client can be authenticated, the authorization servers MUST
 * authenticate the client and ensure that the authorization code was
 * issued to the same client.
 *
 * Interface AuthorizationCodeInterface
 * @package Credentials
 */
interface AuthorizationCodeInterface
{

}