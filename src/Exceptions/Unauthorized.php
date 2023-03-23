<?php 

namespace Kooriv\PGP\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;

class Unauthorized extends HttpException
{
	public function __construct()
	{
		parent::__construct(
			statusCode: 401,
			message: 'Unauthorized! The request header is not set or invalid.',
			previous: null,
			headers: [],
			code: 0
		);
	}
}