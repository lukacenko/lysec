<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

namespace Nette\Http;


/**
 * IHttpRequest provides access scheme for request sent via HTTP.
 */
interface IRequest
{
	/** HTTP request method */
	const
		GET = 'GET',
		POST = 'POST',
		HEAD = 'HEAD',
		PUT = 'PUT',
		DELETE = 'DELETE',
		PATCH = 'PATCH';

	/**
	 * Returns URL object.
	 * @return UrlScript
	 */
	function getUrl();

	/********************* query, post, files & cookies ****************d*g**/

	/**
	 * Returns variable provided to the script via URL query ($_GET).
	 * If no key is passed, returns the entire array.
	 * @param  string key
	 * @param  mixed  default value
	 * @return mixed
	 */
	function getQuery($key = NULL, $default = NULL);

	/**
	 * Returns variable provided to the script via POST method ($_POST).
	 * If no key is passed, returns the entire array.
	 * @param  string key
	 * @param  mixed  default value
	 * @return mixed
	 */
	function getPost($key = NULL, $default = NULL);

	/**
	 * Returns uploaded file.
	 * @param  string key
	 * @return FileUpload|NULL
	 */
	function getFile($key);

	/**
	 * Returns uploaded files.
	 * @return array
	 */
	function getFiles();

	/**
	 * Returns variable provided to the script via HTTP cookies.
	 * @param  string key
	 * @param  mixed  default value
	 * @return mixed
	 */
	function getCookie($key, $default = NULL);

	/**
	 * Returns variables provided to the script via HTTP cookies.
	 * @return array
	 */
	function getCookies();

	/********************* method & headers ****************d*g**/

	/**
	 * Returns HTTP request method (GET, POST, HEAD, PUT, ...). The method is case-sensitive.
	 * @return string
	 */
	function getMethod();

	/**
	 * Checks HTTP request method.
	 * @param  string
	 * @return bool
	 */
	function isMethod($method);

	/**
	 * Return the value of the HTTP header. Pass the header name as the
	 * plain, HTTP-specified header name (e.g. 'Accept-Encoding').
	 * @param  string
	 * @param  mixed
	 * @return mixed
	 */
	function getHeader($header, $default = NULL);

	/**
	 * Returns all HTTP headers.
	 * @return array
	 */
	function getHeaders();

	/**
	 * Is the request is sent via secure channel (https).
	 * @return bool
	 */
	function isSecured();

	/**
	 * Is AJAX request?
	 * @return bool
	 */
	function isAjax();

	/**
	 * Returns the IP address of the remote client.
	 * @return string|NULL
	 */
	function getRemoteAddress();

	/**
	 * Returns the host of the remote client.
	 * @return string|NULL
	 */
	function getRemoteHost();

	/**
	 * Returns raw content of HTTP request body.
	 * @return string|NULL
	 */
	function getRawBody();

}
