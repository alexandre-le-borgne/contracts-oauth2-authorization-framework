<?php


namespace OAuth2\Roles\ClientTypes;

/**
 * Interface PublicClientInterface
 * @package Roles\ClientTypes
 *
 * Clients incapable of maintaining the confidentiality of their
 * credentials (e.g., clients executing on the device used by the
 * resource owner, such as an installed native application or a web
 * browser-based application), and incapable of secure client
 * authentication via any other means.
 */
interface PublicClientTypeInterface extends ClientTypeInterface
{

}