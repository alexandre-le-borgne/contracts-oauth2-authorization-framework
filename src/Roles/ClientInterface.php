<?php

namespace OAuth2\Roles;

use Credentials\ClientCredentialsInterface;

/**
 * Class ClientInterface
 *
 * An application making protected resource requests on behalf of the
 * resource owner and with its authorization.  The term "client" does
 * not imply any particular implementation characteristics (e.g.,
 * whether the application executes on a server, a desktop, or other
 * devices).
 */
interface ClientInterface extends RoleInterface
{
    function getCredentials(): ClientCredentialsInterface;
}