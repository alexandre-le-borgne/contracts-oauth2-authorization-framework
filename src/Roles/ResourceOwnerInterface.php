<?php

namespace OAuth2\Roles;

use OAuth2\Credentials\AccessTokenInterface;

/**
 * Interface ResourceOwnerInterface
 *
 * An entity capable of granting access to a protected resource.
 * When the resource owner is a person, it is referred to as an
 * end-user.
 */
interface ResourceOwnerInterface extends RoleInterface
{
    /**
     *   The client accesses protected resources by presenting the access
     * token to the resource server.  The resource server MUST validate the
     * access token and ensure that it has not expired and that its scope
     * covers the requested resource.  The methods used by the resource
     * server to validate the access token (as well as any error responses)
     * are beyond the scope of this specification but generally involve an
     * interaction or coordination between the resource server and the
     * authorization server.
     *
     * The method in which the client utilizes the access token to
     * authenticate with the resource server depends on the type of access
     * token issued by the authorization server.  Typically, it involves
     * using the HTTP "Authorization" request header field [RFC2617] with an
     * authentication scheme defined by the specification of the access
     * token type used, such as [RFC6750].
     *
     * @param AccessTokenInterface $accessToken
     * @return bool
     */
    function validate(AccessTokenInterface $accessToken): bool;
}