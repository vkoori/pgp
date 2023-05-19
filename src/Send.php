<?php 

namespace Kooriv\PGP;

use Kooriv\JWT\JWT;

class Send
{
	public static function header(array $payload=[]): array
	{
		return [
			'Authorization' => (new JWT)->encode(
				payload: [
					'SERVICE_NAME' => strtoupper(config(key: 'app.name', default: env(key: 'APP_NAME', default: '-')))
				] + $payload
			)
		];
	}
}
