<?php


namespace OAuth2\Roles\ClientProfiles;

/**
 * Interface UserAgentBasedApplication
 * @package Roles\ClientProfiles
 *
 * A user-agent-based application is a public client in which the
 * client code is downloaded from a web server and executes within a
 * user-agent (e.g., web browser) on the device used by the resource
 * owner.  Protocol data and credentials are easily accessible (and
 * often visible) to the resource owner.  Since such applications
 * reside within the user-agent, they can make seamless use of the
 * user-agent capabilities when requesting authorization.
 */
interface UserAgentBasedApplication extends ClientProfileInterface
{

}