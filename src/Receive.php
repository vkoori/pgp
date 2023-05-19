<?php

namespace Kooriv\PGP;

use Kooriv\PGP\Middlewares\JWT as MiddlewaresJWT;

class Receive
{
	public static function payload(?string $key = null)
	{
		MiddlewaresJWT::singletonPGP(request: request());
		$payload = request()->attributes->get(key: 'PGP');

		return $key ? $payload[$key] ?? null : $payload;
	}

	public static function serviceName(): string
	{
		return strtoupper(self::payload('SERVICE_NAME'));
	}
}
