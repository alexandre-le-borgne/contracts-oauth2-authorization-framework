<?php


namespace Endpoints;


use OAuth2\Endpoints\EndpointInterface;

/**
 * Interface RedirectionEndpointInterface
 * @package Endpoints
 *
 * After completing its interaction with the resource owner, the
 * authorization server directs the resource owner's user-agent back to
 * the client.  The authorization server redirects the user-agent to the
 * client's redirection endpoint previously established with the
 * authorization server during the client registration process or when
 * making the authorization request.
 *
 * The redirection endpoint URI MUST be an absolute URI as defined by
 * [RFC3986] Section 4.3.  The endpoint URI MAY include an
 * "application/x-www-form-urlencoded" formatted (per Appendix B) query
 * component ([RFC3986] Section 3.4), which MUST be retained when adding
 * additional query parameters.  The endpoint URI MUST NOT include a
 * fragment component.
 *
 * The redirection endpoint SHOULD require the use of TLS as described
 * in Section 1.6 when the requested response type is "code" or "token",
 * or when the redirection request will result in the transmission of
 * sensitive credentials over an open network.  This specification does
 * not mandate the use of TLS because at the time of this writing,
 * requiring clients to deploy TLS is a significant hurdle for many
 * client developers.  If TLS is not available, the authorization server
 * SHOULD warn the resource owner about the insecure endpoint prior to
 * redirection (e.g., display a message during the authorization
 * request).
 *
 * Lack of transport-layer security can have a severe impact on the
 * security of the client and the protected resources it is authorized
 * to access.  The use of transport-layer security is particularly
 * critical when the authorization process is used as a form of
 * delegated end-user authentication by the client (e.g., third-party
 * sign-in service).
 *
 * The redirection request to the client's endpoint typically results in
 * an HTML document response, processed by the user-agent.  If the HTML
 * response is served directly as the result of the redirection request,
 * any script included in the HTML document will execute with full
 * access to the redirection URI and the credentials it contains.
 *
 * The client SHOULD NOT include any third-party scripts (e.g., third-
 * party analytics, social plug-ins, ad networks) in the redirection
 * endpoint response.  Instead, it SHOULD extract the credentials from
 * the URI and redirect the user-agent again to another endpoint without
 * exposing the credentials (in the URI or elsewhere).  If third-party
 * scripts are included, the client MUST ensure that its own scripts
 * (used to extract and remove the credentials from the URI) will
 * execute first.
 */
interface RedirectionEndpointInterface extends EndpointInterface
{

}