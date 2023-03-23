<?php 

namespace Kooriv\PGP;

use Kooriv\JWT\JWT;

class Send
{
	public static function header(): array
	{
		return [
			'Authorization' => (new JWT)->encode(
				payload: ['SERVICE_NAME' => env('APP_NAME')]
			)
		];
	}
}
