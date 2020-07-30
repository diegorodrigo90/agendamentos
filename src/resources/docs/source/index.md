---
title: API Reference

language_tabs:
- javascript
- php
- python
- bash

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_28e9d0941f6bc6d018b62145708d9208 -->
## Refresh a token.

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/auth-refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/v1/auth-refresh',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer {token}',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/auth-refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {token}'
}
response = requests.request('POST', url, headers=headers)
response.json()
```

```bash
curl -X POST \
    "http://localhost/api/v1/auth-refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```



### HTTP Request
`POST api/v1/auth-refresh`


<!-- END_28e9d0941f6bc6d018b62145708d9208 -->

<!-- START_af82433e555a57f31d78233071a5a020 -->
## Autenticação do usuário

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/auth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/v1/auth',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer {token}',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/auth'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {token}'
}
response = requests.request('POST', url, headers=headers)
response.json()
```

```bash
curl -X POST \
    "http://localhost/api/v1/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```



### HTTP Request
`POST api/v1/auth`


<!-- END_af82433e555a57f31d78233071a5a020 -->

<!-- START_c5e64b712c39685cb2dedfa8eb581a21 -->
## Get the authenticated User.

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/v1/me',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer {token}',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/me'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {token}'
}
response = requests.request('POST', url, headers=headers)
response.json()
```

```bash
curl -X POST \
    "http://localhost/api/v1/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```



### HTTP Request
`POST api/v1/me`


<!-- END_c5e64b712c39685cb2dedfa8eb581a21 -->


