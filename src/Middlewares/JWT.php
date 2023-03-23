<?php 

namespace Kooriv\PGP\Middlewares;

use Illuminate\Http\Request;
use Closure;
use Kooriv\PGP\Exceptions\Unauthorized;
use Kooriv\JWT\JWT as KoorivJWT;

class JWT
{
	public function handle(Request $request, Closure $next)
	{
		$jwt = $request->header(key:'Authorization');

		if (empty($jwt)) {
			throw new Unauthorized;
		}

		$payload = (new KoorivJWT)->decode(token: $jwt);

		$request->attributes->add(parameters: ['PGP' => $payload]);

		return $next($request);
	}
}