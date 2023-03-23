<?php 

namespace Kooriv\PGP;

use Kooriv\JWT\JWT;

class Receive
{
	public static function serviceName(): string
	{
		$payload = request()->attributes->get(key: 'PGP');
		if (is_null($payload)) {
			$jwt = request()->header(key: 'Authorization', default: '');
			$payload = (new JWT)->decode(token: $jwt);
		}
		
		return $payload['SERVICE_NAME'];
	}
}
