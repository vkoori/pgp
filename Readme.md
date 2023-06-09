# Installation

```bash
composer require vkoori/pgp
```

# Setting

You need to add the following to the env file:

```
JWT_BLACK_LIST=false
JWT_KEY=secret
JWT_ALGO=HS256
JWT_MAX_AGE=3600
JWT_LEEWAY=0
```

When you want to send a request to a service, set the received value in the request header according to the following code:

```
\Kooriv\PGP\Send::header(payload:['key' => 'value']);
```

If you are the recipient of the request, use the following middleware to validate the received request:

```
\Kooriv\PGP\Middlewares\JWT::class
```

If you are the recipient of the request and want to recognize the sender of the request, use the following code:

```
\Kooriv\PGP\Receive::serviceName();
```

If you are the recipient of the request and want to get all/specific payload, use the following code:

```
\Kooriv\PGP\Receive::payload();
\Kooriv\PGP\Receive::payload('key');
```

> **Warning**
>
> When sending a request, the `APP_NAME` value is sent in the payload. So make sure the `.env` file values are correct.
